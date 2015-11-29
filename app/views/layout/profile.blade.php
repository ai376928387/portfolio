<div class="sidebox">
	<div class="sidebar section" id="side-bar">
		<div class="widget" id="profile">
			<h2 class="title">
				About me
			</h2>
			<div class="widget-content">
				<div class="row">
					<div class="col-md-5">
						<div class="profile">
							<header>
								<div class="details">
									<h3> GAO BEINI </h3>
								</div>
							</header>
							<div class="profile-img">
								{{ HTML::image('images/img-profile.png','profile',array(
									'width'=>'120'
								)) }}
							</div>
						</div>
					</div>
					<div class="col-md-7">
						<h3>Web Developer </h3>
						<h3>Mutlimedia Marketing Specialist </h3>
						<p></p>
						<p>HTML/CSS, PHP, JAVASCRIPT, PHOTOSHOP, FLASH, FILM CUT PRO</p>
						<p>Currently live in Auckland </p>
						<button type="button" class="btn btn-primary btn-sm more-info"><a href="{{ URL::route('contact') }}">More</a></button>
					</div>
				</div>
			</div>
		</div>

		<div class="widget" id="labels">
			<h2 class="title">
				Labels
			</h2>
			<div class="widget-content" style="min-height:300px;">
				<ul>
					<li><a href="{{ URL::route('portfolio') }}">Website</a></li>
					<li><a href="{{ URL::route('contact') }}">About Me</a></li>
					<li><a href="{{ URL::route('contact') }}">Contact Me</a></li>
					<li><a href="{{ URL::route('portfolio') }}">Design</a></li>
					<li><a href="{{ URL::route('portfolio') }}">Flash</a></li>
					<li><a href="{{ URL::route('portfolio') }}">Filming</a></li>
					<li><a href="#blog">Blog</a></li>

				</ul>
			</div>
		</div>
	</div>


	<div class="clearfix"></div>
</div>