@extends('layouts.nav')

@section('title')
    FAQ

@endsection


@section('cont')





    <head>

        <link rel="stylesheet" type="text/css" href="{{ asset('css/w1style.css') }}">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    </head>

    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
        </script>

        <div class="planchooser">
            <div class="row">
                <div class="col-12 plan">
                    <h1>Workout Plan - Easy</h1>
                </div>
            </div>
        </div>
        <div class="whole">
            <div class="excercise">
                <div class="text">
                    <h2>High Stepping</h2>
                    <p>Start standing with feet hip-distance apart.
                        Lift right knee as high as it will go and raise the opposite arm, then switch quickly so left knee
                        is up before right foot lands. Continue pulling knees up quirky for as long as desired. There’s a
                        reason you did high knees in your high school gym! High Knee is a great move to use as a warm-up to
                        a run or as part of a high-intensity interval training routine—it just depends on how high you lift
                        your knees and how fast you go!</p>
                    <p><b>Duration: 30seconds</b></p>
                    <p><a href="https://www.youtube.com/watch?v=Cmxr9xcNhgU" target="_blank"> Video Link</a></p>
                </div>
                <div class="image">
                    <img src="images\Workout\highstepping.gif" alt="cat" />
                </div>
            </div>

            <div class="excercise">
                <div class="text">
                    <h2>Mountain Climber</h2>
                    <p>Get into a plank position, making sure to distribute your weight evenly between your hands and your
                        toes.
                        Check your form—your hands should be about shoulder-width apart, back flat, abs engaged, and head in
                        alignment.
                        Pull your right knee into your chest as far as you can.
                        Switch legs, pulling one knee out and bringing the other knee in.
                        Keep your hips down and run your knees in and out as far and as fast as you can. Alternate inhaling
                        and exhaling with each leg change. Mountain climbers are great for building cardio endurance, core
                        strength, and agility. You work several different muscle groups with mountain climbers—it's almost
                        like getting a total-body workout with just one exercise.</p>
                    <p><b>Duration: 30seconds</b></p>
                    <p><a href="#" target="_blank"> Video Link</a></p>
                </div>
                <div class="image">
                    <img src="images\Workout\mountainclimber.gif" alt="cat" />
                </div>
            </div>
            <div class="excercise">
                <div class="text">
                    <h2>Flutter Kicks</h2>
                    <p>A Flutter Kick is an exercise that specifically targets the lower abdominal wall. You perform this
                        move by lying on your back and using your core to “flutter” your legs up and down. You’ll often see
                        this type of move performed in Pilates, barre and strength training classes. Lie on your back and
                        extend your legs up to a 45-degree angle. Keep your arms straight and in line with the floor, palms
                        facing down. Lift your head, neck and shoulders slightly off the ground. Keeping your legs stick
                        straight and glued together with your toes pointed, start lowering one leg. Raise your lowered leg
                        and lower the other, focusing on keeping your core engaged. Continue the movement, alternating
                        between legs.</p>
                    <p><b>Repeat: 10 times</b></p>
                    <p><a href="#" target="_blank"> Video Link</a></p>
                </div>
                <div class="image">
                    <img src="images\Workout\flutterkicks.gif" alt="cat" />
                </div>
            </div>
            <div class="excercise">
                <div class="text">
                    <h2>Bicycle Crunch</h2>
                    <p>The bicycle crunch is an effective ab exercise, reaching not only the usual abs but also the deep abs
                        and the obliques. If you want to work your core, this air bicycle maneuver is a great choice. It's a
                        no-equipment, beginner's level exercise you can do anywhere. Use it as part of your core
                        strengthening workout or add it to a full body workout.</p>
                    <p><b>Repeat: 10 times</b></p>
                    <p><a href="#" target="_blank"> Video Link</a></p>
                </div>
                <div class="image">
                    <img src="images\Workout\bicyclecrunch.gif" alt="cat" />
                </div>
            </div>
            <div class="finish">
                <a href="..\index.html"><button>Finish</button></a>
            </div>
        </div>
    </body>

    </html>
