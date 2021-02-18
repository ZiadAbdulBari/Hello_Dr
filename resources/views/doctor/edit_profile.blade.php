@extends('layouts/doctor_dashboard')
@section('title')
    Dashboard | Edit Profile
@endsection
@section('doctor_dashboard_content')
    <div class="container">
        <div class="card-header">
            Edit Profile
        </div>
        <div class="card">
            <div class="row">
                <div class="col-md-8 m-auto">
                    <div class="card">
                        <div class="card-header">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home" role="tab"
                                        aria-controls="home" aria-selected="true">Change Name</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab"
                                        aria-controls="profile" aria-selected="false">Change Password</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#contact" role="tab"
                                        aria-controls="contact" aria-selected="false">Change Profile Photo</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    @if (session('success_mgs'))
                                        <div class="alert alert-success" role="alert">
                                            {{session('success_mgs')}}
                                        </div>
                                    @endif
                                    <form method="POST" action="{{url('doctor/profile/name/edit')}}">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Name</label>
                                            <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Enter A new name">
                                        </div>
                                        <button class="btn btn-info">Change Name</button>
                                    </form>
                                </div>

                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
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
                                    <form class="col-md-5 m-auto" method="POST" action="{{url('doctor/profile/password/edit')}}">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Old Password</label>
                                            <input type="password" name="old_password" class="form-control" id="exampleFormControlInput1" placeholder="Enter old password">
                                            @error('old_password')
                                                <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">New Password</label>
                                            <input type="text" name="password" class="form-control" id="exampleFormControlInput1" placeholder="Enter A new password">
                                            @error('password')
                                                <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Retype Password</label>
                                            <input type="text" name="password_confirmation" class="form-control" id="exampleFormControlInput1" placeholder="Retype Password">
                                            @error('password-confirmation')
                                                <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                        <button type="submit" class="btn btn-info">Change Paaword</button>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                    <form method="post" action="{{url('doctor/profile/photo/edit')}}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Select Picture</label>
                                            <input class="form-control" type="file" id="formFile" name="profile_picture">
                                        </div>
                                        <button type="submit" class="btn btn-info">Change Photo</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
