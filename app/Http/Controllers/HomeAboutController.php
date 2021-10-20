<?php

namespace App\Http\Controllers;

use App\Models\home_about;
use Illuminate\Http\Request;

class HomeAboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all=home_about::all();
        return view('admin.about.index',compact('all'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     //   dd($request);
        $hb=new home_about;
        $hb->long_dis=$request->input('long_dis');
        $hb->short_dis=$request->input('short_dis');
        $hb->title=$request->input('title');
        $hb->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\home_about  $home_about
     * @return \Illuminate\Http\Response
     */
    public function show(home_about $home_about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\home_about  $home_about
     * @return \Illuminate\Http\Response
     */
    public function edit(home_about $home_about)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\home_about  $home_about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, home_about $home_about)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\home_about  $home_about
     * @return \Illuminate\Http\Response
     */
    public function destroy(home_about $home_about)
    {
        //
    }
}
