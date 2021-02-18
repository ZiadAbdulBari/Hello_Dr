<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
</head>

<body class="bg-light">
    <link rel="stylesheet" href="{{ asset('homepage_asset') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('homepage_asset') }}/css/style.css">
    <div class="row me-0">
        <div class="col-md-2 pe-0 ps-0">
            <div class="dashboard-menu bg-info">

                <div class="text-center">
                    <a class="navbar-brand text-dark fw-bold" href="#">{{ env('APP_NAME') }}</a>

                    <div class="m-auto img-frame mt-3">
                        <img src="{{ asset('images') }}/profile_pictures/{{Auth::user()->profile_picture}}" style="height:100px;width:100px;border-radius:50%" alt="">
                    </div>

                    <p class="text-dark fw-bold mt-3">{{ Auth::user()->name }}</p>
                    
                    <a type="button" class=" btn btn-danger btn-sm" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                        {{ __('Sign Out') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>

                <div class="text-center mt-5">
                    <div class="d-grid gap-2">
                        <button class="btn btn-dark" type="button"><a class="link-info" href="{{url('patientdashboard ')}}">Home</a></button>
                        <button class="btn btn-dark" type="button"><a class="link-info" href="{{url('patient/enroll')}}">Enroll</a></button>
                        <button class="btn btn-dark" type="button"><a class="link-info" href="{{url('patient/history')}}">History</a></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-10 pe-0 ps-0">
            
            <div class="top-bar bg-info d-flex">
                <div class="ms-auto pe-4">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-dark fw-bold" href="#" id="navbarDarkDropdownMenuLink" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Settings
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink">
                                <li><a class="dropdown-item" href="{{url('patient/profile/edit')}}">Edit Profile</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            @yield('patient_dashboard_content')

            <div class="footer bg-light">
                <p class="text-center text-dark">copyright @ {{Carbon\Carbon::now()->format('Y')}}</p>
            </div>

        </div>
    </div>

    <script src="{{ asset('homepage_asset') }}/js/bootstrap.bundle.min.js"></script>
</body>

</html>
