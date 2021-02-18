@extends('layouts/doctor_dashboard')
@section('title')
    Dashboard | History
@endsection
@section('doctor_dashboard_content')
    <div class="container">
        <div class="card">
            <div class="card-header">
              <h5>Previous Patient List</h5>
            </div>
            <div class="card-body">
              <div class="row">
                  <div class="col-md-6 m-auto">
                    <table class="table table-striped">
                        <thead>
                          <tr class="text-center">
                            <th scope="col">Patient Name</th>
                            <th scope="col">Patient Age</th>
                            <th scope="col">Disease Detail</th>
                            <th scope="col">Enroll Date</th>
                            <th scope="col">Status</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $value)
                                <tr class="text-center">
                                    <td>{{$value->patient_name}}</td>
                                    <td>{{$value->patient_age}}</td>
                                    <td>{{$value->disease}}</td>
                                    <td>{{$value->created_at->format('d-m-Y')}}</td>
                                    <td>Checked</td>
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