@extends('layouts.nav')

@section('title')
    view appointments
@endsection


@section('cont')
    <br>
    <br>
    <div class=" container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ _('All Appointments') }}</div>
                    <div class="card-body">
                        <table class="table table-responsive table-strioe">
                            <thead>
                                <tr>
                                    <td>SL</td>
                                    <td>Customer Name</td>
                                    <td>Number</td>
                                    <td>Email</td>
                                    <td>Topic</td>
                                    <td>Appointment Date</td>
                                    <td>Appointment Date</td>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($appnts as $key => $row)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ $row->name }}</td>
                                        <td>{{ $row->number }}</td>
                                        <td>{{ $row->email }}</td>
                                        <td>{{ $row->topic }}</td>
                                        <td>{{ $row->app_date }}</td>
                                        <td>{{ $row->app_time }}</td>
                                        <td>
                                            <a href="{{ route('appnts.delete', $row->id) }}" class="btn btn-sm btn-danger">Delete</a>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
