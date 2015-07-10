@extends('layout.main')

@section('content')
<div class="container portfolio-main">
	<div class="row">
		<div class="widget">
			<div class="col-md-8">
				{{ HTML::image("images/magazine.jpg", "full-magazine",array(
									'width'=>'100%'
								)) }}
			</div>
			<div class="col-md-4">
				<p>Magazine Design</p>
				<p>Natalie Portman</p>
<!-- 			<button class="btn btn-primary" style="background-color:#005f74;color:#fff;"><a href="http://healthplus.nz">View More</a></button>
			 -->			</div>
		</div>
	</div>

</div>
@stop