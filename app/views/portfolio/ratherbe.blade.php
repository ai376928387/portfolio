@extends('layout.main')

@section('content')
<div class="container portfolio-main">
	<div class="row">
		<div class="widget">
			<div class="col-md-8">
				<video width="100%" height="auto" controls>
					<source src="{{ URL::to('uploadfiles/wicky.mp4') }}" type="video/mp4">
				Your broswer doesn't support the video tag.
				</video>
			</div>
			<div class="col-md-4">
				<p>Rather Be</p>
				<p>Movie Video</p>
				<p>I am in charge of the whole filming production.</p>
<!-- 				<button class="btn btn-primary" style="background-color:#005f74;color:#fff;"><a href="http://healthplus.nz">View More</a></button>
 -->			</div>
		</div>
	</div>

</div>
@stop