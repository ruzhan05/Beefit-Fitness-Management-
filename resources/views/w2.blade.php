@extends('layouts.nav')

@section('title')
    Workout-Hard

@endsection


@section('cont')

    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
            integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
        <!-- FontAwesome CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.css" />
        <!-- Custom CSS -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/w1style.css') }}">
    </head>




    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
        </script>
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#"><span>Bee</span>Fit</a><a href=""><img class="logo"
                        src="logo.png" /></a>
                <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"
                    class="navbar-toggler" data-bs-target="#navbarSupportedContent" data-bs-toggle="collapse"
                    type="button">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Account</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown">Services</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="mywork.html">Workout </a>
                                </li>
                                <li><a class="dropdown-item" href="#">Diet</a></li>
                                <li>
                                    <a class="dropdown-item" href="#">BMI Caalculation</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Appoinment of Trainer</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="faq.html">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a class="login" href="index.html">LogIn/SignUp</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="planchooser">
            <div class="row">
                <div class="col-12 plan">
                    <h1>Workout Plan - Hard</h1>
                </div>
            </div>
        </div>
        <div class="whole">
            <div class="excercise">
                <div class="text">
                    <h2>Jumping Jacks</h2>
                    magnam dolorem, sit soluta quam id quasi dolore quia asperiores quae.
                    Eveniet quas ratione, cumque reiciendis mollitia deserunt asperiores
                    alias! Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore
                    sapiente architecto illum ipsam explicabo nulla dicta praesentium,
                    exercitationem distinctio blanditiis assumenda iusto quis molestiae
                    quidem, numquam cupiditate quo accusantium deserunt pariatur!
                    <p><b>Duration: 30seconds</b></p>
                    <p><a href="#"> Video Link</a></p>
                </div>
                <div class="image">
                    <img src="images\Workout\jumpingjacks.gif" alt="cat" />
                </div>
            </div>

            <div class="excercise">
                <div class="text">
                    <h2>Leg Raises</h2>
                    magnam dolorem, sit soluta quam id quasi dolore quia asperiores quae.
                    Eveniet quas ratione, cumque reiciendis mollitia deserunt asperiores
                    alias! Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore
                    sapiente architecto illum ipsam explicabo nulla dicta praesentium,
                    exercitationem distinctio blanditiis assumenda iusto quis molestiae
                    quidem, numquam cupiditate quo accusantium deserunt pariatur!
                    <p><b>Repeat: 12 times</b></p>
                    <p><a href="#"> Video Link</a></p>
                </div>
                <div class="image">
                    <img src="images\Workout\mountainclimber.gif" alt="cat" />
                </div>
            </div>
            <div class="excercise">
                <div class="text">
                    <h2>Flutter Kicks</h2>
                    magnam dolorem, sit soluta quam id quasi dolore quia asperiores quae.
                    Eveniet quas ratione, cumque reiciendis mollitia deserunt asperiores
                    alias! Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore
                    sapiente architecto illum ipsam explicabo nulla dicta praesentium,
                    exercitationem distinctio blanditiis assumenda iusto quis molestiae
                    quidem, numquam cupiditate quo accusantium deserunt pariatur!
                    <p><b>Repeat: 10 times</b></p>
                    <p><a href="#"> Video Link</a></p>
                </div>
                <div class="image">
                    <img src="images\Workout\flutterkicks.gif" alt="cat" />
                </div>
            </div>
            <div class="excercise">
                <div class="text">
                    <h2>Bicycle Crunch</h2>
                    magnam dolorem, sit soluta quam id quasi dolore quia asperiores quae.
                    Eveniet quas ratione, cumque reiciendis mollitia deserunt asperiores
                    alias! Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore
                    sapiente architecto illum ipsam explicabo nulla dicta praesentium,
                    exercitationem distinctio blanditiis assumenda iusto quis molestiae
                    quidem, numquam cupiditate quo accusantium deserunt pariatur!
                    <p><b>Repeat: 10 times</b></p>
                    <p><a href="#"> Video Link</a></p>
                </div>
                <div class="image">
                    <img src="images\Workout\bicyclecrunch.gif" alt="cat" />
                </div>
            </div>
            <div class="excercise">
                <div class="text">
                    <h2>Pushups</h2>
                    magnam dolorem, sit soluta quam id quasi dolore quia asperiores quae.
                    Eveniet quas ratione, cumque reiciendis mollitia deserunt asperiores
                    alias! Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore
                    sapiente architecto illum ipsam explicabo nulla dicta praesentium,
                    exercitationem distinctio blanditiis assumenda iusto quis molestiae
                    quidem, numquam cupiditate quo accusantium deserunt pariatur!
                    <p><b>Repeat: 7 times</b></p>
                    <p><a href="#"> Video Link</a></p>
                </div>
                <div class="image">
                    <img src="images\Workout\pushup.gif" alt="cat" />
                </div>
            </div>
            <div class="finish">
                <a href="..\index.html"><button>Finish</button></a>
            </div>
        </div>
    </body>

    </html>
