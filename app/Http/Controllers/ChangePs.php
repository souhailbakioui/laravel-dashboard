<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ChangePs extends Controller
{
    public function change()
    {
     return view('admin.body.changep');
    }
    public function Update_Password(Request $request)
    {
     
     $request->validate([
'old_pass'=>'required',
'password_confirmation' =>'required|same:password|min:6'

      ]);
$hashpass=Auth::user()->password;
if(Hash::check($request->old_pass, $hashpass)){
 $us= User::findOrFail(Auth::user()->id);
 $us->password=Hash::make($request->input('password'));
 $us->save();
 Auth::logout();
 return redirect()->route('login')->with('success'," Password Bien Changer");
    }
    echo "Same error";
}

public function Update_profail()
{
    $us= User::findOrFail(Auth::user()->id);
   return view('admin.body.updatepro',compact('us'));
}
public function Updated_profail(Request $request)
{
    $request->validate([
        'name'=> 'required|min:4',
        'email' => 'required|email|',


    ]);
    $us= User::findOrFail(Auth::user()->id);
   $us->email=$request->email;
    $us->name=$request->name;
    $us->save();
    return redirect()->route('upade.profail')->with('success'," Updted With Succes");


   

}

}
