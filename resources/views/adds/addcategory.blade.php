@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<h1>All Categories <a href="#" class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal">Add</a></h1>

			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<div class="modal-title" id="myModalLabel">Create Category</div>
						</div>
						<div class="modal-body">
							<form action="{{route('addcategory.store')}}" method="POST">
								{{csrf_field()}}
								<div class="form-group">
									<label for="name">Add Category Name</label>
									<input type="text" name="name" id="name" class="form-control">
								</div>
								<div class="form-group">
									<label for="slug">Add Category Slug</label>
									<input type="text" name="slug" id="slug" class="form-control">
								</div>
								<div class="form-group">
									<label for="description">Add Category Description</label>
									<textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
								</div>
								<button type="submit" class="btn btn-default">Add</button>
							</form>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>				
			</div>
			<div>
				<div class="btn-group" role="group">
					@foreach($categorys as $category)
					<a href="{{route('addcategory.show', $category->id)}}">
						<button type="button" class="btn btn-default">{{$category->name}}</button>
					</a>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</div>
@endsection