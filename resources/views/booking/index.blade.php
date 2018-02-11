@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                        <div class="col-sm-2 well"><a href="#">Car Booking</a></div>
                        <div class="col-sm-2 well"><a href="#">Hospital Booking</a></div>
                        <div class="col-sm-2 well"><a href="#">Hotel Booking</a></div>
                        <div class="col-sm-2 well"><a href="#">Booking</a></div>
                        <div class="col-sm-2 well"><a href="#">Booking</a></div>
                        <div class="col-sm-2 well"><a href="#">Booking</a></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-2 well"><a href="#">Booking</a></div>
                        <div class="col-sm-2 well"><a href="#">Booking</a></div>
                        <div class="col-sm-2 well"><a href="#">Booking</a></div>
                        <div class="col-sm-2 well"><a href="#">Booking</a></div>
                        <div class="col-sm-2 well"><a href="#">Booking</a></div>
                        <div class="col-sm-2 well"><a href="#">Booking</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
