<?php

use App\Models\Brand;
use App\Models\Slider;
use App\Models\home_about;
use App\Models\multipic;
use App\Models\Category;
use App\Http\Controllers\ChangePs;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Support\Facades\DB;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
  //  return view('welcome');
   $Brand=Brand::paginate(5);
    $s=Slider::all();
    $about=home_about::findOrFail(1);
    $m=multipic::all();
    $c =Category::all('cat_name')->take(5);

    $m  = DB::table('multipics')
    ->join('brands', 'multipics.id_Brand', '=', 'brands.id')
    ->join('categories', 'categories.id', '=', 'brands.Cat_id')
    ->whereBetween('categories.cat_name',$c->toArray())
    ->select('multipics.*','categories.cat_name')
    ->paginate(6);;
foreach ($m as $t)
$a[]= $t->cat_name;
$a = array_unique($a);
    return view('home',compact('about',"Brand","s",'m',"c",'a'));



})->name('home');
Route::group(['prefix' => "/Category", 'middleware' => ['auth']], function(){

    Route::get('/Category/softdelete/{id}', 'CategoryController@softDelete')->name('sdelete');
    Route::get('/Category/restory/{id}', 'CategoryController@restory')->name('restory');
    Route::get('/Category/destroy/{id}', 'CategoryController@destroy')->name('destroy');
});
Route::Post('/Brand/delete/{id}/{nameg}', 'BrandController@delete')->name('delete')->middleware('auth');
Route::resource('/ContactForm', 'ContactFormController');
Route::resource('/Contact', 'ContactController')->middleware('auth');
Route::resource('/Category', 'CategoryController')->middleware('auth');
Route::resource('/Brand', 'BrandController')->middleware('auth');
Route::resource('/Multipic', 'MultipicController')->middleware('auth');
Route::Get('/GetOut', 'BrandController@GetOut')->name('GetOut');

////////// About Part ////////////
Route::resource('/About', 'HomeAboutController')->middleware('auth');

///////////// Contact Page /////////////////
Route::get('/Contact_us', 'ContactController@contact_front')->name('Contact_us');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
   //$users= User::all();
   $users= DB::table('users')->get();

    return view('dashboard',compact("users"));
})->name('dashboard');



/////// Route For Test /////////////
Route::get('tst', function () {
    return view('admin.admin_master');
})->name('tst');
Route::get('tst1', function () {
    return view('admin.index');
});

//////////Route For Slider ///////////////
Route::group(['middleware' => 'auth'], function () {
Route::get('Slider', "HomeController@Slider_home")->name("slider");
Route::Post('Slider', "HomeController@store")->name("slider_store");


//////////Change Password ////
Route::get('users/passowrd','ChangePs@change')->name('change.password');
Route::Post('users/passowrd','ChangePs@Update_Password')->name('update.password');

///////// UPDATE PROFAIL /////////////
Route::get('users/Update_profail','ChangePs@Update_profail')->name('upade.profail');
Route::Post('users/Update_profail','ChangePs@Updated_profail')->name('updated.profail');

});
