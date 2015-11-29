@extends('layout.main')

@section('content')
<div class="container portfolio-main">
	<div class="row">
		<div class="widget">
			<div class="col-md-8">
				{{ HTML::image("images/sellmyapple-full.png", "full-healthplus",array(
									'width'=>'100%'
								)) }}
			</div>
			<div class="col-md-4">
				<p>Sell my apple ecommerce website</p>
				<p>In charge of the design part</p>
				<button class="btn btn-primary" style="background-color:#005f74;color:#fff;"><a href="http://selmyapple.co.nz">View More</a></button>
			</div>
		</div>
	</div>

</div>
@stop