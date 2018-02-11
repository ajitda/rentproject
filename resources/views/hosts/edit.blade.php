@extends('layouts.app')
@section('content')
	<div class="row">
		<div class="container">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h1>Edit Hosts <a href="{{url('hosts')}}" class="btn btn-primary pull-right">Back</a></h1>
				</div>
				<div class="panel-body">
					<form method="POST" action="{{route('hosts.store')}}">
						<div class="form-group">
							<label for="name">name</label>
							<input type="text" id="name" name="name" class="form-control">
						</div>
						<div class="form-group">
							<label for="email">email</label>
							<input type="email" id="email" name="email" class="form-control">
						</div>
						<div class="form-group">
							<label for="phone">pone</label>
							<input type="number" id="phone" name="phone" class="form-control">
						</div>
						<div class="form-group">
							<label for="address">address</label>
							<input type="text" id="address" name="address" class="form-control">
						</div>
						<div class="form-group">
							<label for="city">city</label>
							<input type="text" id="city" name="city" class="form-control">
						</div>
						<div class="form-group">
							<label for="zip">zip</label>
							<input type="number" id="zip" name="zip" class="form-control">
						</div>
						<div class="form-group">
							<label for="state">state</label>
							<input type="text" id="state" name="state" class="form-control">
						</div>
						<div class="form-group">
							<label for="country">country</label>
							<input type="text" id="country" name="country" class="form-control">
						</div>
						<button type="submit" class="btn btn-primary">update</button>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection