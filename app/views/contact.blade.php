@extends('layout.main')
@section('content')
<section class="cover fullscreen image-bg overlay">
	<div class="background-image-holder">
		<img alt="image" class="background-image" src="images/aboutme.png" />
	</div>
	<div class="container inner-text-banner">
		<div class="row">
			<div class="col-md-6 col-md-offset-3 col-sm-10 col-sm-offset-1">
				<div class="feature bordered text-center">
					<h3 class="uppercase">Check Back Soon</h3>
					<p>
						We'll be launching our new site in the coming weeks. Hit the form below to get notified as we launch. Thanks for your interest!
					</p>
					<form class="halves form-newsletter" data-success="Thanks for your submission, we will be in touch shortly." data-error="Please fill all fields correctly.">
						<input class="mb16 validate-required validate-email signup-email-field" type="text" placeholder="Email Address" name="email" />
						<button class="mb16" type="submit">Notify Me</button>
						<span>*We won't share your email with third parties.</span>
					</form>
				</div>
			</div>
		</div>
		<!--end of row-->
	</div>
	<!--end of container-->
</section>

<div class="container">
	<div class="contact-bottom">
		<div class="row">
			<div class="col-md-2 col-sm-2"></div>
			<div class="col-md-8 col-sm-8">
				<div class="row contact-method">
					<h2>Web Developer/ Frontend Developer/ Web Designer/ Multi-media Specialist</h2>
					<h2></h2>
					<div class="col-md-6 col-sm-6 contact-info-left">
						<span class="glyphicon glyphicon-envelope"></span> beini.gao@gmail.com
					</div>
					<div class="col-md-6 col-sm-6 contact-info-right">
						<span class="glyphicon glyphicon-phone"></span>(022)393-1477
					</div>
				</div>
				<form action="{{ URL::route('contact-post') }}" method="post" class="contact-form">
					<div class="form-group">
						<label for="email">Email Address(*):</label>
						<input type="text" class="form-control" name="email" {{ (Input::old('email'))?'value="'.e(Input::old('email')).'"':'' }} >
					</div>
					<div class="form-group">
						<label for="name">Your name(*):</label>
						<input type="text" class="form-control" name="name" {{ (Input::old('name'))?'value="'.e(Input::old('email')).'"':'' }} >
					</div>
					<div class="form-group">
						<label for="message">Message(*):</label>
						<textarea class="form-control" row="5" name="message"></textarea>
					</div>
					<button type="submit" class="btn btn-default more-info" style="color:#fff;">Submit</button>
					{{ Form::token() }}
				</form>
			</div>
			<div class="col-md-2 col-sm-2"></div>
		</div>
		<p></p>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3189.4608108233324!2d174.7380092!3d-36.9271542!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d0d45d692bd4099%3A0xb9100f12b4194176!2s3+Drew+St%2C+Mt+Roskill%2C+Auckland+1041!5e0!3m2!1sen!2snz!4v1436265612666" width="100%" height="450"  allowfullscreen></iframe>
		<!-- <div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3189.4608108233324!2d174.7380092!3d-36.9271542!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d0d45d692bd4099%3A0xb9100f12b4194176!2s3+Drew+St%2C+Mt+Roskill%2C+Auckland+1041!5e0!3m2!1sen!2snz!4v1436265612666" width="100%" height="450"  allowfullscreen></iframe>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
						<form action="{{ URL::route('contact-post') }}" method="post" class="contact-form">
								<div class="form-group">
										<label for="email">Email Address(*):</label>
										<input type="text" class="form-control" name="email" {{ (Input::old('email'))?'value="'.e(Input::old('email')).'"':'' }} >
								</div>
								<div class="form-group">
										<label for="name">Your name(*):</label>
										<input type="text" class="form-control" name="name" {{ (Input::old('name'))?'value="'.e(Input::old('email')).'"':'' }} >
								</div>
								<div class="form-group">
										<label for="message">Message(*):</label>
										<textarea class="form-control" row="5" name="message"></textarea>
								</div>
								<button type="submit" class="btn btn-default more-info" style="float:right;color:#fff;">Submit</button>
								{{ Form::token() }}
				</form>
				</div>
		</div> -->
	</div>
</div>
@stop