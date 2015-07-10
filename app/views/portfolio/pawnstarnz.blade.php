@extends('layout.main')

@section('content')
<div class="container portfolio-main">
	<div class="row">
		<div class="widget">
			<div class="col-md-8">
				{{ HTML::image("images/pawnstar-full.png", "full-pawnstar",array(
									'width'=>'100%'
								)) }}
			</div>
			<div class="col-md-4">
				<p>Pawnstar ecommerce website</p>
				<p>Built with Joomla</p>
				<button class="btn btn-primary" style="background-color:#005f74;color:#fff;"><a href="http://pawnstar.co.nz">View More</a></button>
			</div>
		</div>
	</div>

</div>
@stop