@extends('layouts.app')
@section('content')
	<div class="">
		<div class="container">
			<div class="col-sm-8 col-sm-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h1>Creat Add <a href="{{url('adds')}}" class="btn btn-primary pull-right">Back</a></h1>
					</div>
					<div class="panel-body">
						<!-- @if(count($errors->all()) > 0)
						<div class="alert alert-danger">
							@foreach($errors->all() as $error)
								<li>{{$error}}</li>
							@endforeach
						</div>
						@endif -->
						<form method="POST" action="{{route('adds.store')}}" enctype="multipart/form-data">
							{{csrf_field()}}
							<div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
								<label for="name">name</label>
								<input type="text" id="name" name="name" class="form-control">
								@if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
							</div>
							<div class="form-group {{ $errors->has('description') ? ' has-error' : '' }}">
								<label for="description">Description</label>
								<textarea id="description" name="description" class="form-control">
								</textarea>
								@if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
							</div>
							<div class="form-group {{ $errors->has('image') ? ' has-error' : '' }}">
								<label for="image">Upload your add image</label>
								<input type="file" id="image" name="image" class="form-control">
								@if ($errors->has('image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
							</div>
							<div class="form-group {{ $errors->has('price') ? ' has-error' : '' }}">
								<label for="price">Price</label>
								<input type="number" id="price" name="price" class="form-control">
								@if ($errors->has('price'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                                @endif
							</div>
							<div class="form-group {{ $errors->has('add_category_id') ? ' has-error' : '' }}">
								<label for="add_category_id">phone</label>
								<select name="add_category_id" id="add_category_id" class="form-control">
									@foreach($addcategories as $category)
									<option value="{{$category->id}}">{{$category->name}}</option>
									@endforeach
								</select>

								@if ($errors->has('add_category_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('add_category_id') }}</strong>
                                    </span>
                                @endif
							</div>
							
							<button type="submit" class="btn btn-primary">submit</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection