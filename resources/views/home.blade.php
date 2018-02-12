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
                        <div class="col-sm-1"></div>
                        <div class="col-sm-4 well"><a href="">Your Profile</a></div>
                        <div class="col-sm-1"></div>
                        <div class="col-sm-4 well"><a href="#">Your Adds</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
