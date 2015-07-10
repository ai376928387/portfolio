@extends('layout.main')

@section('content')
<div class="dashboard">
	<div class="row">
		 <div class="col-md-2"></div>
		 <div class="col-md-8">
		 	<div class="login-title">
				<h1>Add Blog</h1>
			</div>
			<hr>
		{{ Form::open(array('action' => 'AdminController@postAddBlog')) }}
		
			<div class="form-group">
				<label for="title">title:</label>
				<input type="text" class="form-control input-sm" name="title" >
			</div>
			<div class="form-group">
				<label for="content">Content:</label>
				<textarea class="form-control" row="10" name="content"></textarea> 
			</div>
			
			<button type="submit" class="btn btn-default">Post</button>
		{{ Form::close() }}
	</div>
	<div class="col-md-2"></div>
</div>



@stop