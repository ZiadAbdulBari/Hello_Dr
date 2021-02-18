<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Enroll;
use App\User;
use Auth;
use Carbon\Carbon;
class PatientController extends Controller
{
    function show_dashboard_enroll_form(){
        return view('patient/enroll');
    }

    function enroll_process(Request $request){
        $request->validate([
            'patient_name'=>'required',
            'patient_age'=>'required',
            'doctor_name'=>'required',
            'disease'=>'required',
            
        ]);

        Enroll::insert([
            'user_id'=>Auth::user()->id,
            'status'=>1,
            'doctor_name'=>$request->doctor_name,
            'patient_name'=>$request->patient_name,
            'patient_age'=>$request->patient_age,
            'disease'=>$request->disease,
            'created_at'=>Carbon::now(),
        ]);
        return back()->with('success_mgs','You are successfully enrolled');
    }


    function show_history(){
        $data = Enroll::where('user_id','=',Auth::user()->id)->where('status','=','2')->get();
        return view('patient/history',compact(['data']));
    }
}
