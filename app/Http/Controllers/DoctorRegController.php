<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Carbon\Carbon;
use Hash;
use Auth;
class DoctorRegController extends Controller
{
   function doctor_registration(){
        return view('doctor/registration');
    }

    function doctor_registration_process(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email:filter|unique:users,email',
            'password'=>'required|confirmed|min:9',
            'password_confirmation'=>'required',
            'contact'=>'required',
            'edu_info'=>'required',
            'chamber_address'=>'required',
        ]);

        User::insert([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'role'=>2,
            'created_at'=>Carbon::now(),
            'edu_info'=>$request->edu_info,
            'contact'=>$request->contact,
            'chamber_address'=>$request->chamber_address,
        ]);
        
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){

            return redirect('doctordashboard');
        }
        
    }


    
}
