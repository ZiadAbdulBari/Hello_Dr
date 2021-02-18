@extends('layouts/patient_dashboard')
@section('title')
    Dashboard | Enroll
@endsection
@section('patient_dashboard_content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Enroll</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6 m-auto">
                    @if (Session::has('success_mgs'))
                        <div class="alert alert-success" role="alert">
                            {{Session::get('success_mgs')}}
                      </div>
                    @endif
                    <form method="POST" action="{{url('patinet/enroll/process')}}">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Patient Name</label>
                            <input type="text" name="patient_name" class="form-control" id="exampleFormControlInput1"
                                placeholder="Enter patient name">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Patient Age</label>
                            <input type="number" name="patient_age" class="form-control" id="exampleFormControlInput1"
                                placeholder="Enter patient age">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Doctor Name</label>
                            <input type="text" name="doctor_name" class="form-control" id="exampleFormControlInput1"
                                placeholder="Enter doctor name">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Disease Details</label>
                            <textarea class="form-control" name="disease" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection