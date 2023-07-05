@extends('layouts.nav')

@section('title')
    BEEFIT
@endsection


@section('cont')

<head>

        <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
            integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
            crossorigin="anonymous"
        />
        <!-- FontAwesome CSS -->
        <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.css"
        />
        <!-- Custom CSS -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/planstyle.css')}}">
    </head>

<body>

    <div class="planchooser">
      <div class="row">
        <div class="col-12 plan">
          <h1>Choose your workout plan:</h1>
        </div>
      </div>
    </div>

    <div class="rcorners2">
      <div>
        <a href="{{url('w1')}}"
          ><button
            type="button"
            class="btn btn-primary btn-lg btn-block btnpos"
          >
            Easy
          </button>
        </a>
      </div>

      <div>
        <a href="{{url('w2')}}">
          <button
            type="button"
            class="btn btn-primary btn-lg btn-block btnpos2"
          >
            Hard
          </button></a
        >
      </div>
    </div>
    
  </body>

