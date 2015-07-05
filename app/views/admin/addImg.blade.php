@extends('layout.main')

@section('content')
	<div class="row">
	 <div class="col-md-2"></div>
	 <div class="col-md-8">
	 	<div class="login-title">
			<h1>Add Slider Image</h1>
		</div>
		<hr>
	{{ Form::open(array('action' => 'AdminController@postAddImg','files'=>true)) }}
	
		<div class="form-group">
			<label for="Title">title:</label>
			<input type="text" class="form-control input-sm" name="title" >
		</div>
		<div class="form-group">
			<label for="description">Description:</label>
			<textarea class="form-control" row="3" name="description"></textarea> 
		</div>
		<div class="form-group">
			<label for="images">Images:</label>
			<input type="file" class="form-control input-sm" name="images" accept="image/*"> 
		</div>
		<button type="submit" class="btn btn-default">Upload Images</button>
		{{ Form::close() }}
	</form>
	</div>
	<div class="col-md-2"></div>
</div>



@stop