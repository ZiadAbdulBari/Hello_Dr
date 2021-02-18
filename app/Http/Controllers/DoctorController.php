<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Enroll;
use App\User;
use Auth;
use Image;
use Hash;
class DoctorController extends Controller
{
    function checked_update_sataus($id){
        Enroll::find($id)->update([
            'status'=>2,
        ]);
        return back();
    }

    function show_history(){
        $name = User::find(Auth::user()->id)->name;
        $data = Enroll::where('doctor_name','=',$name)->where('status','=',2)->get();
        return view('doctor/history',compact(['data']));
    }

    function show_change_photo(){
        return view('doctor/edit_profile');
    }

    function change_photo_process(Request $request){
        if($request->hasFile('profile_picture')){
            if(Auth::user()->profile_picture != 'defalut.jpg'){
                $photo_location = 'public/images/profile_pictures/'.Auth::user()->profile_picture;
                unlink(base_path($photo_location));
            }

            $upload_photo = $request->file('profile_picture');
            $rename_photo  =Auth::user()->id.'.'. $upload_photo->getClientOriginalExtension();
            $location = 'public/images/profile_pictures/'.$rename_photo;
            Image::make($upload_photo)->save(base_path($location));
            User::find(Auth::user()->id)->update([
                'profile_picture'=>$rename_photo,
            ]);
            return back();
        }
        else{
            echo "nai";
        }
    }

    function change_name_process(Request $request){
        $request->validate([
            'name'=>'required',
        ]);

        User::find(Auth::user()->id)->update([
            'name'=>$request->name,
        ]);
        return back()->with('success_mgs','Your name is changed successfully');
    }


    function change_password_process(Request $request){
        $request->validate([
            'old_password'=>'required',
            'password'=>'required|confirmed',
            'password_confirmation'=>'required',
        ]);
        $current_password = User::find(Auth::user()->id)->password;

        if(Hash::check($request->old_password,$current_password)){
            if($request->old_password != $request->password){
                User::find(Auth::user()->id)->update([
                    'password'=>Hash::make($request->password),
                ]);

                return back()->with('success_mgs','Password changed successfully');
            }
            else{
                return back()->with('error_mgs','Please set a different password');
            }
        }
        else{
            return back()->with('error_mgs','Password is not matched');
        }
    }
}
