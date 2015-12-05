<div class="nav-container">
	<a id="top"></a>
	<nav class="absolute transparent">
		<div class="nav-bar">
			<div class="module left">
				<ul class="menu">
					<li>
						<a href="{{ URL::route('home') }}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a>
					</li>
					<li>
						<a href="{{ URL::route('home') }}" class="active">Home <span class="sr-only">(current)</span></a>
					</li>
					<li><a href="{{ URL::route('portfolio') }}">Portfolio</a></li>
					<li><a href="{{ URL::route('resume') }}">Resume</a></li>
					<li><a href="{{ URL::route('skills') }}">Skills</a></li>
					<li><a href="{{ URL::route('contact') }}">About & Contact</a></li>
					@if (Auth::check())
					<li><a href="{{ URL::route('admin-home') }}">Admin</a></li>
					<li><a href="{{ URL::route('account-sign-out') }}">Sign out</a></li>
					@endif
				</ul>
			</div>
			<div class="module-group right">
				<div class="social">
					<div class="module widget-handle left facebook">
						<a href="https://www.facebook.com/gao.benny" target="_blank">
							<i class="fa fa-facebook fa-2x"></i>
						</a>
					</div>
					<div class="module widget-handle left twitter">
						<a href="https://twitter.com/BeiniGao"  target="_blank">
							<i class="fa fa-twitter fa-2x"></i>
						</a>
					</div>
					<div class="module widget-handle left linkedin">
						<a href="https://www.linkedin.com/profile/view?id=373946568"  target="_blank">
							<i class="fa fa-linkedin fa-2x"></i>
						</a>
					</div>
					<div class="module widget-handle left github">
						<a href="https://github.com/ai376928387"  target="_blank">
							<i class="fa fa-github fa-2x"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
		<!--end of module group-->
	</div>
</nav>
</div>
</div>