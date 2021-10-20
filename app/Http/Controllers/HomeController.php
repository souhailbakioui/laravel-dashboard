<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Image;
class HomeController extends Controller
{
    public function Slider_home()
    {
        $slider=Slider::all();
        return view('admin.Slider.index',compact('slider'));
    }
    public function store(Request $request)
    {
      //  $brand_img =$request->input('file');
        // ddd($request->file('file'));
       
 //dd($request);
 if($request['file']){
 //dd($request['file']->getClientOriginalName());

          $name_gen=hexdec(uniqid());/*
          $img_ext=strtolower($request->file('file')->getClientOriginalExtension());
          $img_name=$name_gen.'.'.$img_ext;
          $up_location='Image/Slider/';
          $last_img=$up_location.$img_name;
         // $request->file('file')->move($up_location,$img_name);
         // Image::make($request['file']->getClientOriginalName())->resize(300, 200)->save(public_path($last_img));
 
        //  echo $last_img;
         /*    Brand::insert([
         'Brand_name'=>$request->input('brand_name'),
         'Brand_img'=>$img_name,
         'User'=>Auth::user()->id,
         'Cat_id'=>$request->input('select')
     ]) ; */
     $filePath = public_path('/Image/slider');
    $image = $request->file('file');
     $img = Image::make($image->path());
     $img->resize(1920, 1088, function ($const) {
        $const->aspectRatio();
    })->save($filePath.'/'.$name_gen.'.'.$request->file('file')->getClientOriginalExtension());

    
    
     $b=new Slider;
     $b->titre=$request->input('brand_name');
     $b->image=$name_gen.".".$request->file('file')->getClientOriginalExtension();
     $b->description=$request->input('text');
        $b->save();
     return redirect()->route('slider')
     ->with('success',"{$request->input('brand_name')} bien ajouter");
   }
    }
}
