@extends('layout.main')

@section('content')
    
@include ('layout.mainbanner')
<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
			@include ('layout.homeslider')
			@include ('layout.blog')
		</div>

		<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 hide-home-sidebar">
			@include('layout.profile')
		</div>
	</div>
</div>

<section>
    <div class="container">
        <div class="row v-align-children">
            <div class="col-md-5 col-sm-6 text-center mb-xs-24">
                <a href="#">
                    <h2 class="uppercase  mb16">WICKY GAO'S INSTAGRAM</h2>
                </a>
                <h6 class="uppercase">Follow Me</h6>
                <p class="lead mb0">
                    Love Life, Love food.
                </p>
            </div>
            <div class="col-md-7 col-sm-6 text-center">
                <div class="instafeed grid-gallery" data-user-name="wickygao">
                    <ul></ul>
                </div>
            </div>
        </div>
        <!--end of row-->
    </div>
    <!--end of container-->
</section>

@stop