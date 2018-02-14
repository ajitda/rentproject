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
                    @if(Auth::user()->hasRole('admin'))
                   <div class="row">
                        <div class="col-sm-1"></div>
                        <div class="col-sm-4 well"><a href="{{route('adds.index')}}">Published Adds : {{DB::table('adds')->where('type', 1)->count()}}</a></div>
                        <div class="col-sm-2"></div>
                        <div class="col-sm-4 well"><a href="{{route('adds.index')}}">Pending Adds : {{DB::table('adds')->where('type', 0)->count()}}</a></div>
                        <div class="col-sm-1"></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-1"></div>
                        <div class="col-sm-4 well"><a href="{{route('hosts.index')}}">Total Hosts : {{DB::table('hosts')->count()}}</a></div>
                        <div class="col-sm-2"></div>
                        <div class="col-sm-4 well"><a href="{{route('addcategory.index')}}">Total Categories : {{DB::table('add_catagories')->count()}}</a></div>
                    </div>
                    @endif
                    @if(Auth::user()->hasRole('host'))
                     <div class="row">
                        <div class="col-sm-1"></div>
                        <div class="col-sm-4 well"><a href="{{route('adds.index')}}">Your Adds</a></div>
                        <div class="col-sm-1"></div>
                        <div class="col-sm-4 well"><a href="{{route('adds.create')}}">Create Your Adds</a></div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
