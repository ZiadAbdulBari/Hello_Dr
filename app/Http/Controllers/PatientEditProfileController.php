<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use File;
use Auth;
use Image;
use App\User;
class PatientEditProfileController extends Controller
{
    function show_change_photo(){
        return view('patient/edit_profile');
    }

    function change_photo_process(Request $request){

        if($request->hasFile('profile_picture')){
            if(Auth::user()->profile_picture!='default.jpg'){
                $location = 'public/images/profile_pictures/'.Auth::user()->profile_picture;
                unlink(base_path($location));
            }
            $uploaded_photo = $request->file('profile_picture');
            $picture_rename = Auth::user()->id.".". $uploaded_photo->getClientOriginalExtension();
            $picture_location = 'public/images/profile_pictures/'.$picture_rename;
            Image::make($uploaded_photo)->save(base_path($picture_location));
            User::find(Auth::user()->id)->update([
                'profile_picture' => $picture_rename,
            ]);
            return back()->with('success_mgs','Your profile picture changed successfully');
        }
        else{
            return back()->with('error_mgs','Please select a image');
        }

    }
}
