<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\BrandRequset;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Image;

use Illuminate\Support\Facades\File;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $Cat=Category::all();
        $Brand=Brand::all();
      //  dd($Brand);
       // dd($Brand[0]->user->name);
       $notification=array(

        'message'=>'test',
        'alert-type'=>'error'
       );

       //echo"<br>" .($b->Category->cat_name);
        return view('admin.Brand.index',compact('Brand','Cat')) ->with($notification);;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request BrandRequset
     * @return \Illuminate\Http\Response
     */
    public function store(BrandRequset $request)
    {

 $brand_img =$request->input('file');

if($request['file']){


         $name_gen=hexdec(uniqid());
         $img_ext=strtolower($request->file('file')->getClientOriginalExtension());
         $img_name=$name_gen.'.'.$img_ext;
         $up_location='Image/brand/';
         $last_img=$up_location.$img_name;
         $request->file('file')->move($up_location,$img_name);

    $b=new Brand  ;
    $b->Brand_name=$request->input('brand_name');
    $b->Brand_img=$img_name;
    $b->detail="";
    $b->User=Auth::user()->id;
    $b->Cat_id=$request->input('select');
    $b->save();
    $notification=array(

      'message'=>"{$request->input('brand_name')} bien ajouter",
      'alert-type'=>'suscces'
     );
    return redirect()->route('Brand.index')
    ->with( $notification);
  }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit($brand)
    {   $Cat=Category::all();
        $item=Brand::findOrFail($brand);
    // dd($item);

       return view('admin.Brand.edite',compact('item','Cat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $brand)
    {
        $this->authorize('update',$brand);
       $pic= Brand::findOrFail($brand)->Brand_img;
       if($request['file']){
        $name_gen=hexdec(uniqid());
        $img_ext=strtolower($request->file('file')->getClientOriginalExtension());
        $img_name=$name_gen.'.'.$img_ext;
        $up_location='Image/brand/';
        $last_img=$up_location.$img_name;

         File::delete('Image/brand/'.$pic);
        $request->file('file')->move($up_location,$img_name);

        $pic=$img_name;


       }

       Brand::findOrFail($brand)->update([
        'Brand_name'=>$request->input('brand_name'),
        'Cat_id'=>$request->input('select'),
        'Brand_img'=>$pic
       ]);
       $notification=array(

        'message'=>'test',
        'alert-type'=>'error'
       );
       return redirect()->route('Brand.index')
       ->with($notification);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $b=Brand::findOrFail($id);
        $n=$b->Brand_name;
        /*File::delete('Image/brand/'.$b->$Brand_img);
        Brand::findOrFail($brand)->delete();*/
       /*return redirect()->route('Brand.index')
        ->with('success'," bien ajouter");*/
        //Session::flash('success','  This is a message!');

      //return $id;
    }
    public function delete(Request $request,$id,$nom)
    {



    try {
   $request->session()->flash('success', "{$nom} Brand Delete with  successful!");
     // $message = Session::get('success');
       $b=Brand::findOrFail($id);
        File::delete('Image/brand/'.$b->Brand_img);
        Brand::findOrFail($id)->delete();


    } catch (Throwable $e) {}


      /* return redirect()->route('Brand.index')
        ->with('success'," bien ajouter");*/
      //  Session::get('success');
     // $request->session()->reflash();
    // $message = Session::get('success');

      return 0;
    }
    public function GetOut()
    {

     Auth::logout();
     return redirect()->route('login')->with('success','Log Out with succs');
    }

}
