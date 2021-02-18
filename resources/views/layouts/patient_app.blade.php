<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body class="bg-light">
    <link rel="stylesheet" href="{{ asset('homepage_asset') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('homepage_asset') }}/css/style.css">

    <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <a class="navbar-brand" href="#">{{ env('APP_NAME') }}</a>
        
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">Join</a>
                        </li>
                    @endif
                </ul>
            </div>


        </div>
    </nav>
    <div class="container">

        @yield('main_content')
    </div>

    <script src="{{ asset('homepage_asset') }}/js/bootstrap.bundle.min.js"></script>
</body>

</html>
