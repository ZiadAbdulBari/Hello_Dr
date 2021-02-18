<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Enroll;
use App\User;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function patient_dashboard()
    {   
        $doctor_name=Enroll::where('user_id','=',Auth::user()->id)->first();
        if (isset($doctor_name)) {
            
            $data = Enroll::where('status','=',1)->where('doctor_name','=',$doctor_name->doctor_name)->get();
            return view('patientdashboard',compact(['data']));
        }
        else{
            return view('patientdashboard');
        }
    }

    public function doctor_dashboard(){
        $name = User::find(Auth::user()->id)->name;
        $data = Enroll::where('doctor_name','=',$name)->where('status','=','1')->get();

        return view('doctordashboard',compact(['data']));
    }
}
