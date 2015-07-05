@extends('layout.main')

@section('content')
<div class="row">
	 <div class="col-md-4"></div>
	 <div class="col-md-4">
	 	<div class="login-title">
			<h1>create new acount</h1>
		</div>
		<hr>
	<form action="{{ URL::route('account-create-post') }}" method="post">
	
		<div class="form-group">
			<label for="username">username:</label>
			<input type="text" class="form-control" name="username" {{ (Input::old('username'))?'value="'.e(Input::old('username')).'"':'' }} >
			@if($errors ->has('username'))
			{{ $errors->first('username') }}
			@endif
		</div>
		<div class="form-group">
			<label for="password">Password:</label>
			<input type="password" class="form-control" name="password"> 
			@if($errors ->has('password'))
			{{ $errors->first('password') }}
			@endif
		</div>
		<button type="submit" class="btn btn-default">Create Account</button>
		{{ Form::token() }}
	</form>
	</div>
	<div class="col-md-4"></div>
</div>


@stop