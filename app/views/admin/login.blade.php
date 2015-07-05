@extends('layout.main')

@section('content')
<div class="row">
	<div class="col-md-4"></div>
	<div class="col-md-4">
		<div class="wrapper loginbox">
			<div class="login-title">
				<h1>PLEASE LOG IN </h1>
			</div>
			<hr>
			<form action="{{ URL::route('admin_login_post') }}" method="post" role="form">
				<div class="form-group">
					<label for="username">Username</label>
					<input type="text" class="form-control" placeholder="Username" name="username"{{ (Input::old('username')) ? 'value="'.Input::old('username').'"':'' }}>
					@if($errors->has('username'))
							{{ $errors->first('username') }}
						@endif
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" name="password" id="password" class="form-control" placeholder="Password">
					@if($errors->has('password'))
							{{ $errors->first('password') }}
						@endif
				</div>
		
				<div class="row">
					<div class="col-md-4"></div>
					<div class="col-md-4">
					<input type="submit" value="Login" class="btn btn-primary">
					</div>
					<div class="col-md-4"></div>
				</div>
				{{ Form::token() }}
			</form>
		</div>
	</div>
	<div class="col-md-4"></div>
</div>
@stop