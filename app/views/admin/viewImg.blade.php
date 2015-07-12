@extends('layout.main')

@section('content')
<div class="dashboard">
	<div class="row">
	 <div class="col-md-2"></div>
	 <div class="col-md-8">
	 	<div class="login-title">
			<h1>View all images</h1>
		</div>
		<hr>	
			<table>
				<tr>
					<th>IMAGE ID</th>
					<th>IMAGE TITLE</th>
					<th>IMAGE DESCRIPTION</th>
					<th>IMAGE PREVIEW</th>
					<th>OPTIONS</th>
				</tr>
				@foreach(SliderImage::all() as $sliderimage)
				<tr>
					<td>{{ $sliderimage->image_id }}</td>
					<td>{{ $sliderimage->title }}</td>
					<td>{{ $sliderimage->description }}</td>
					<td>{{ HTML::image("uploadfiles/$sliderimage->image_name","image-preview",array(
									'width'=>'200px','height'=>'150px')) }}</td>
					<td></td>
				</tr>
				@endforeach
			</table>
	</div>
	<div class="col-md-2"></div>
</div>
</div>


@stop