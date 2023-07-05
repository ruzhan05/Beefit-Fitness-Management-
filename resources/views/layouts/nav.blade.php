<html>

<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }} ">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style2.css') }}">

</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}"><span>Bee</span>Fit</a><a href=""><img
                        alt=".." class="logo" src="images/logo.png"></a> <button
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"
                    class="navbar-toggler" data-bs-target="#navbarSupportedContent" data-bs-toggle="collapse"
                    type="button"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/about') }}">About</a>
                        </li>


                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown">Services</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ url('plans') }}">Workout</a></li>
                                <li><a class="dropdown-item" href="#">Diet</a></li>
                                <li>
                                    <a class="dropdown-item" href="{{ url('bmi') }}">BMI Calculation</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('create.appnts') }}">Appoinment of
                                        Trainer</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('appnts.index') }}">Show Appoinments</a>
                                </li>
                            </ul>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('FAQ') }}">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a class="login" href="{{ url('/login') }}" type="submit">LogIn</a>
                        <li class="nav-item">
                            <a class="login" href="{{ url('registration') }}" type="submit">SignUp</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        <main class="py-4">
            @yield('cont')
        </main>




    </div>
</body>

</html>
