@extends('layouts.patient_dashboard')
@section('title')
    Dashboard | Home
@endsection
@section('patient_dashboard_content')
    <div class="container">
      <div class="card">
          <div class="card-header">
              <h3>Patient List</h3>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-6 m-auto">
                @if (!$data->isEmpty())
                  <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">Serial Number</th>
                          <th scope="col">Patient Name</th>
                          <th scope="col">Doctor Name</th>
                          <th scope="col">Created At</th>
                        </tr>
                      </thead>
                      <tbody>
                        {{-- {{$data}} --}}
                        @foreach ($data as $value)
                          <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $value->patient_name }}</td>
                            <td>{{ $value->doctor_name }}</td>
                            <td>{{ $value->created_at }}</td>
                          </tr>
                        @endforeach
                      </tbody>
                  </table>
                @else
                    <h1>You are not enrolled in any list</h1>
                @endif
              </div>
            </div>
          </div>
      </div>
    </div>
@endsection
