@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row">
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
								@if(Auth::user()->hasRole("admin"))
								<td>Action</td>
								@endif
							</tr>
						</thead>
						<tbody>
							@foreach($adds as $add)
							<tr>
								<td>{{$add->id}}</td>
								<td>{{$add->name}}</td>
								<td>{{$add->description}}</td>
								<td><img src="{{$add->image}}" width="100" alt="{{$add->name}}"></td>
								<td>{{$add->add_category->name}}</td>
								<td>{{$add->host->name}}</td>
								<td>{{$add->created_at}}</td>
								@if($add->type == false)
								<td>Pending</td>
								@else
								<td>Published</td>

								@endif
								@if(Auth::user()->hasRole("admin"))
								<td>@if($add->type == false)
									<a href="{{route('add.publish', $add->id)}}" class="btn btn-primary">Publish</a>
									@else
									<a href="{{route('add.unpublish', $add->id)}}" class="btn btn-primary">Unpublish</a>
									@endif
								</td>
								@endif
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
@endsection