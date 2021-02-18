@extends('layouts/doctor_app')

@section('main_content')
    <div class="row">
        <div class="col-md-5 m-auto">
            <div class="card">
                <div class="card-body">
                    <div class="card-header mb-3">
                        <h4 class="text-center">Registration</h4>
                    </div>
                    <form method="post" action="{{ url('doctor/reg/post') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name" value="{{old('name')}}">
                            @error('name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                                placeholder="Enter your email" name="email" value="{{old('email')}}">
                            @error('email')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" value="{{old('password')}}">
                            @error('password')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="confirm-password" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="confirm-password" name="password_confirmation" placeholder="Retype Password" value="{{old('password_confirmation')}}">
                            @error('password_confirmation')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="phone-number" class="form-label">Phone number</label>
                            <input type="number" class="form-control" id="phone-number" placeholder="Enter your phone number" name="contact" value="{{old('contact')}}">
                            @error('contact')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="education-details" class="form-label">Educational Background</label>
                            <input type="text" class="form-control" id="education-details" placeholder="Enter your educational background"
                                name="edu_info" value="{{old('edu_info')}}">
                            @error('edu_info')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="address" class="form-label">Chamber Address</label>
                            <input type="text" class="form-control" id="address" placeholder="Enter your Chamber Address"
                                name="chamber_address" value="{{old('chamber_address')}}">
                            @error('chamber_address')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="text-center">

                            <button type="submit" class="btn btn-info">Join</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection


