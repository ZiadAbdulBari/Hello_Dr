<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientHomeController extends Controller
{
    function patient_home(){
        return view('patient/index');
    }
}
