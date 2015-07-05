@extends('layout.main')

@section('content')

<div class="dashboard">
	<h2>Welcome To Dashboard</h2>

	<div class="row">
	  <div class="col-sm-4">
	    <div style="background-color:#005f74;">
	      <h3 style="text-align:center;">Slider Image</h3>
	      <ul class="list-group">
	        <a href="*" class="list-group-item">View all images</a>
	        <a href="{{ URL::route('add-slider-images') }}"  class="list-group-item">Add images</a>
	      </ul>
	    </div>
	  </div>


	  <div class="col-sm-4">
	    <div style="background-color:#005f74;">
	      <h3 style="text-align:center;">Blog</h3>
	      <ul class="list-group">
	        <a href="*" class="list-group-item">View all articles</a>
	        <a href="*"  class="list-group-item">Edit articles </a>
	      </ul>
	    </div>
	  </div>

	  <div class="col-sm-4">
	    <div style="background-color:#005f74;">
	      <h3  style="text-align:center;">Task</h3>
	      <ul class="list-group">
	        <a href="#" class="list-group-item">View all messages</a>
	        <a href="#"  class="list-group-item">Reply messages</a>
	      </ul>
	    </div>
	  </div>
</div>

<button type="button" class="btn btn-primary btn-sm more-info"><a href="{{ URL::route('account-sign-out') }}">LOG OUT</a></button>

@stop