@extends('layouts.doctor_dashboard')
@section('title')
    Dashboard | Home
@endsection
@section('doctor_dashboard_content')
    <div class="container">
        <div class="card">
            <h5 class="card-header">Patient List</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8 m-auto">
                        <table class="table table-striped">
                            <thead>
                              <tr class="text-center">
                                <th scope="col">Serial No.</th>
                                <th scope="col">Patient Name</th>
                                <th scope="col">Patient Age</th>
                                <th scope="col">Disease Detail</th>
                                <th scope="col">Enroll Date</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $value)
                                    <tr class="text-center">
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$value->patient_name}}</td>
                                        <td>{{$value->patient_age}}</td>
                                        <td>{{$value->disease}}</td>
                                        <td>{{$value->created_at->format('d-m-Y')}}</td>
                                        <td>{{$value->status}}</td>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                                {{-- <a href="{{url('status/update')}}/{{$value->id}}" type="button" class="btn btn-danger btn-sm">Call</a> --}}
                                                <a href="{{url('status/update')}}/{{$value->id}}" type="button" class="btn btn-warning btn-sm">Checked</a>
                                                <a type="button" class="btn btn-success btn-sm">Failed</a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div> 

@endsection
