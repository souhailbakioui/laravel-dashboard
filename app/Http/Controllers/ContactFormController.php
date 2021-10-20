<?php

namespace App\Http\Controllers;

use App\Models\Contact_form;
use Illuminate\Http\Request;
use App\Http\Requests\ContactFormRequest;

class ContactFormController extends Controller
{
    public function __construct() {
        $this->middleware(['auth' => 'auth'])->except("store");
    
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $Msg=Contact_form::all();
   
    return view('admin.contact.message',compact('Msg'));
       
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
      //  dd($request);
    $contact_form =new Contact_form();
    $contact_form->name=$request->input('name');
    $contact_form->email=$request->input('email');
    $contact_form->subject=$request->input('subject');
    $contact_form->message=$request->input('message');
    $contact_form->save();
    return redirect()->route('Contact_us')
    ->with('success',"youre message has send");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact_form  $contact_form
     * @return \Illuminate\Http\Response
     */
    public function show(Contact_form $contact_form)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact_form  $contact_form
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact_form $contact_form)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact_form  $contact_form
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact_form $contact_form)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact_form  $contact_form
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact_form $contact_form)
    {
        //
    }
}
