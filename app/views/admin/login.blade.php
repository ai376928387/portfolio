@extends('layout.main')

@section('content')

	<div class="wrapper loginbox">
		<div class="login-title">
			<h1>PLEASE LOG IN </h1>
		</div>
		<hr>
		<form action="{{ URL::route('postLogin') }}" method="post" role="form">
			<div class="form-group">
				<label for="username">Username</label>
				<input type="text" class="form-control" placeholder="Username" name="username"{{ (Input::old('username')) ? 'value="'.Input::old('username').'"':'' }}>
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" name="password" id="password" class="form-control" placeholder="Password">
			</div>
	
			<div class="row">
				<input type="submit" value="Login" class="btn btn-primary">
			</div>
			{{ Form::token() }}
		</form>
	</div>

@stop