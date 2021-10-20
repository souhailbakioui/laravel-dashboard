<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;

use Illuminate\Support\Carbon;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $Num= Category::cursor()->count();
       $Cat=Category::paginate(5);
       $Trashed=Category::onlyTrashed()->latest()->paginate(3);

return view('admin.category/index',compact('Cat','Num','Trashed'));
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
     * @param  \Illuminate\Http\Request  $request  CategoryRequest
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        
    
    Category::insert([
        'cat_name'=>$request->input('cat_name'),
        'user_id'=>Auth::user()->id,

        'created_at'=>Carbon::now()
    ]);

       return redirect()->route('Category.index')
       ->with('success',"{$request->input('cat_name')} bien ajouter");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($category)
    {
        $cat=Category::findOrFail($category);
        return view('admin.category.Update',compact('cat'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request,   $category)
    {
       // echo($request->input('cat_name'));
        $cat=Category::findOrFail($category)->update([
            'cat_name'=>$request->input('cat_name'),
            'user_id'=>Auth::user()->id
        ]);
        return redirect()->route('Category.index')
        ->with('success',"{$request->input('cat_name')} bien ajouter");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($category)
    {
        Category::onlyTrashed()->findOrFail($category)->forceDelete();
        return redirect()->route('Category.index')
        ->with('success'," bien destroy");
    }
    public function softDelete(Request $request,$id)
    {
      Category::findOrFail($id)->delete();
      return redirect()->route('Category.index')
        ->with('success',"bien Supprimer");
    }
    public function restory($id)
    {
Category::withTrashed()->findOrFail($id)->restore();
return redirect()->route('Category.index')
->with('success',"bien restore");
    }

    
}
