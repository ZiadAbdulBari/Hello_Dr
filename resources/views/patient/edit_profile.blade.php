@extends('layouts/patient_dashboard')
@section('title')
    Dashboard | Edit Profile
@endsection
@section('patient_dashboard_content')
    <div class="container">
        <div class="card-header">
            <h3>Edit Profile</h3>
        </div>
        <div class="row">
            <div class="col-md-6 m-auto">
                <div class="card">
                    <div class="card-header">
                      <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                          <a class="nav-link active" aria-current="true" href="#">Change Profile Picure</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Change Name</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Change Password</a>
                        </li>
                      </ul>
                    </div>
                    <div class="card-body">
                        @if (session('success_mgs'))
                            <div class="alert alert-success" role="alert">
                                {{session('success_mgs')}}
                            </div>
                        @endif

                        @if (session('error_mgs'))
                            <div class="alert alert-danger" role="alert">
                                {{session('error_mgs')}}
                            </div>
                        @endif
                      <form method="post" action="{{url('patient/profile/photo/edit')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="input-group mb-3">
                            <label for="inputGroupFile03">Select Image</label>
                            
                            <input type="file" name="profile_picture" class="form-control" id="inputGroupFile03" aria-describedby="inputGroupFileAddon03" aria-label="Upload">
                        </div>
                        <button class="btn btn-info" type="submit" id="inputGroupFileAddon03">Change Picture</button>
                      </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
@endsection