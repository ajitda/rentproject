@extends('layouts.app')
@section('content')
	<div class="row">
		<div class="container">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h1>Hosts List <a href="{{url('hosts/create')}}" class="btn btn-primary pull-right">Create</a></h1>
				</div>
				<div class="panel-body">
					<table class="table table-bordered table-striped">
						<thead>
							<tr>
								<td>Sl</td>
								<td>name</td>
								<td>email</td>
								<td>phone</td>
								<td>address</td>
								<td>city</td>
								<td>zip</td>
								<td>state</td>
								<td>country</td>
							</tr>
						</thead>
						<tbody>
							@foreach($hosts as $host)
							<tr>
								<td>{{$host->id}}</td>
								<td>{{$host->name}}</td>
								<td>{{$host->email}}</td>
								<td>{{$host->phone}}</td>
								<td>{{$host->address}}</td>
								<td>{{$host->city}}</td>
								<td>{{$host->zip}}</td>
								<td>{{$host->state}}</td>
								<td>{{$host->country}}</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
@endsection