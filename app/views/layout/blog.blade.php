
	<div class="sidebar section" id="">
		@foreach($posts as $post)
		<div class="widget" id="blog">
		<h2 class="title">
				{{ $post->title }}
			</h2>
			<div class="created_by">
				<span class="glyphicon glyphicon-user" aria-hidden="true"></span>Created by Wicky. 
			</div>
			@if ( $post->image_name )
			<div class="row">
				<div class="col-md-3">
					{{ HTML::image("uploadfiles/$post->image_name"," $post->title ",array(
									'width'=>'200px','height'=>'150px')) }}
				</div>
				<div class="col-md-9">
					<div class="widget-content">
						<p>{{ $post->content }}</p>
					</div>
				</div>
			</div>
			@else
			<div class="widget-content">
				<p>{{ $post->content }}</p>
			</div>
			<div class="widget-footer">
				<span class="glyphicon glyphicon-time" aria-hidden="true"></span> {{ $post->created_at }}
			</div>
			@endif
		</div>
		@endforeach
	</div>


	<div class="clearfix"></div>
