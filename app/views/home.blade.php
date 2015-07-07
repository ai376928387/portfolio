@extends('layout.main')

@section('content')


    
<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
			@include ('layout.homeslider')
		</div>

		<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 hide-home-sidebar">
			@include('layout.profile')
		</div>
	</div>
</div>


@stop