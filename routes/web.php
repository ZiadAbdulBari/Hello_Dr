<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();


Route::get('doctor/index', 'DoctorHomeController@doctor_home');
Route::get('patient/index', 'PatientHomeController@patient_home');


Route::get('doctordashboard', 'HomeController@doctor_dashboard');
Route::get('patientdashboard', 'HomeController@patient_dashboard');


Route::get('doctor/registration','DoctorRegController@doctor_registration');
Route::post('doctor/reg/post','DoctorRegController@doctor_registration_process');


Route::get('patient/enroll','PatientController@show_dashboard_enroll_form');
Route::post('patinet/enroll/process','PatientController@enroll_process');


Route::get('patient/history','PatientController@show_history');


Route::get('patient/profile/edit','PatientEditProfileController@show_change_photo');
Route::post('patient/profile/photo/edit','PatientEditProfileController@change_photo_process');


//Doctor dashboard work


Route::get('status/update/{id}','DoctorController@checked_update_sataus');
Route::get('doctor/history','DoctorController@show_history');

Route::get('doctor/profile/edit','DoctorController@show_change_photo');
Route::post('doctor/profile/photo/edit','DoctorController@change_photo_process');
Route::post('doctor/profile/name/edit','DoctorController@change_name_process');

Route::post('doctor/profile/password/edit','DoctorController@change_password_process');

