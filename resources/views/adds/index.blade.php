@extends('layouts.app')
@section('content')
	<div class="row">
		<div class="container">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h1>Adds List <a href="{{url('adds/create')}}" class="btn btn-primary pull-right">Create</a></h1>
				</div>
				<div class="panel-body">
					<table class="table table-bordered table-striped">
						<thead>
							<tr>
								<td>Sl</td>
								<td>name</td>
								<td>description</td>
								<td>image</td>
								<td>category</td>
								<td>Created By</td>
								<td>Created at</td>
								<td>Status</td>
								<td>Action</td>
							</tr>
						</thead>
						<tbody>
							@foreach($adds as $add)
							<tr>
								<td>{{$add->id}}</td>
								<td>{{$add->name}}</td>
								<td>{{$add->description}}</td>
								<td>{{$add->phone}}</td>
								<td>{{$add->category}}</td>
								<td>{{$add->city}}</td>
								<td>{{$add->zip}}</td>
								<td>{{$add->type}}</td>
								<td>{{$add->country}}</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
@endsection