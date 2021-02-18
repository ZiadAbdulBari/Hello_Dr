@extends('layouts.patient_dashboard')
@section('title')
    Dashboard | History
@endsection
@section('patient_dashboard_content')
    <div class="container">
        <div class="card">
            <div class="card-header">
              <h3>Previous History</h3>
            </div>
            <div class="card-body">
              <div class="row">
                  <div class="col-md-6 m-auto">
                    @if (!$data->isEmpty())
                      <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Patient Name</th>
                            <th scope="col">Doctor Name</th>
                            <th scope="col">Disease</th>
                            <th scope="col">Enroll Date</th>
                            <th scope="col">Enroll Time</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $value)
                                <tr>
                                    <td>{{$value->patient_name}}</td>
                                    <td>{{$value->doctor_name}}</td>
                                    <td>{{$value->disease}}</td>
                                    <td>{{$value->created_at->format('d-m-Y')}}</td>
                                    <td>{{$value->created_at->format('s-i-h A')}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                      </table>
                    @else
                        <h1>You have no previous history</h1>  
                    @endif
                  </div>
              </div>
          </div>
    </div>
@endsection