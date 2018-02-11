@extends('layouts.app')
@section('content')
	<div class="row">
		<div class="container">
			<div class="col-sm-8 col-sm-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h1>Creat Host <a href="{{url('hosts')}}" class="btn btn-primary pull-right">Back</a></h1>
					</div>
					<div class="panel-body">
						<!-- @if(count($errors->all()) > 0)
						<div class="alert alert-danger">
							@foreach($errors->all() as $error)
								<li>{{$error}}</li>
							@endforeach
						</div>
						@endif -->
						<form method="POST" action="{{route('hosts.store')}}">
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
							<div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
								<label for="email">email</label>
								<input type="email" id="email" name="email" class="form-control">
								@if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
							</div>
							<div class="form-group {{ $errors->has('phone') ? ' has-error' : '' }}">
								<label for="phone">phone</label>
								<input type="number" id="phone" name="phone" class="form-control">
								@if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
							</div>
							<div class="form-group {{ $errors->has('address') ? ' has-error' : '' }}">
								<label for="address">address</label>
								<input type="text" id="address" name="address" class="form-control">
								@if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
							</div>
							<div class="form-group {{ $errors->has('city') ? ' has-error' : '' }}">
								<label for="city">city</label>
								<input type="text" id="city" name="city" class="form-control">
								@if ($errors->has('city'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                @endif
							</div>
							<div class="form-group {{ $errors->has('zip') ? ' has-error' : '' }}">
								<label for="zip">zip</label>
								<input type="number" id="zip" name="zip" class="form-control">
								@if ($errors->has('zip'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('zip') }}</strong>
                                    </span>
                                @endif
							</div>
							<div class="form-group {{ $errors->has('state') ? ' has-error' : '' }}">
								<label for="state">state</label>
								<input type="text" id="state" name="state" class="form-control">
								@if ($errors->has('state'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('state') }}</strong>
                                    </span>
                                @endif
							</div>
							<div class="form-group {{ $errors->has('country') ? ' has-error' : '' }}">
								<label for="country">country</label>
								<input type="text" id="country" name="country" class="form-control">
								@if ($errors->has('country'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('country') }}</strong>
                                    </span>
                                @endif
							</div>
							<div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
								<label for="password">Password</label>
								<input type="password" id="password" name="password" class="form-control">
								@if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
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