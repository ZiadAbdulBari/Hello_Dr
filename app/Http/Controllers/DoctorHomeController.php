<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorHomeController extends Controller
{
    

    // function doctor_home(){
    //     return view('doctor/home');
    // }

    function doctor_home(){
        return view('doctor/index');
    }
}
