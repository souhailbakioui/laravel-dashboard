<?php

namespace App\Http\Controllers;
use App\Models\Brand;
use App\Models\Category;
use App\Models\multipic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class MultipicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       /*    $Mult=multipic::all('id')->take(2)->toArray();

        $Multi  = DB::table('multipics')
        ->join('brands', 'multipics.id_Brand', '=', 'brands.id')
        ->join('categories', 'categories.id', '=', 'brands.Cat_id')
        ->whereBetween('multipics.id',$Mult)
        ->select('categories.cat_name','brands.id','multipics.image')
        ->get();*/

        $Mult=multipic::all('id')->take(2)->toArray();
        //dd($c);
            $m  = DB::table('multipics')
            ->join('brands', 'multipics.id_Brand', '=', 'brands.id')
            ->join('categories', 'categories.id', '=', 'brands.Cat_id')
            ->whereBetween('multipics.id',$Mult)
            ->select('multipics.*','categories.cat_name')
            ;//->get();
            //dd($m->toSql());
       


    
      $Multi= multipic::all();
     
       return view('admin.PORTFOLIO.PORTFOLIO',compact('Multi'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\multipic  $multipic
     * @return \Illuminate\Http\Response
     */
    public function show(multipic $multipic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\multipic  $multipic
     * @return \Illuminate\Http\Response
     */
    public function edit(multipic $multipic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\multipic  $multipic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, multipic $multipic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\multipic  $multipic
     * @return \Illuminate\Http\Response
     */
    public function destroy(multipic $multipic)
    {
        //
    }
}
