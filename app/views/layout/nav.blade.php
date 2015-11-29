<div class="header">	
	<div class="row">
		<div class="col-md-8">
			<nav class="navbar navbar-default">
	  			<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>

					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">	
					        <li>
								<a href="{{ URL::route('home') }}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a>
					        </li>
					        <li>
					        	<a href="{{ URL::route('home') }}" class="active">Home <span class="sr-only">(current)</span></a>
					        </li>
					        <li><a href="{{ URL::route('portfolio') }}">Portfolio</a></li>
					     	<li><a href="{{ URL::route('resume') }}">Resume</a></li>
					     	<li><a href="{{ URL::route('skills') }}">Skills</a></li>
					     	<li><a href="{{ URL::route('contact') }}">About& Contact</a></li>
					     	@if (Auth::check())
							<li><a href="{{ URL::route('admin-home') }}">Admin</a></li>
							<li><a href="{{ URL::route('account-sign-out') }}">Sign out</a></li>
							@endif
					    </ul>
					</div>
				</div>
			</nav>
		</div>
		<div class="col-md-4">
			<div class="search-bar-box">
				<form action="/search" class="navbar-form search-bar" method="get" role="search">
					<div class="form-group">
						<input class="form-control form-main-search" name="q" placeholder="Search" type="text">
					</div>
					<button class="btn btn-def" type="submit">
					              Submit
		            </button>
				</form>
			</div>
			<div class="social">
				<ul class="nav nav-pills navbar-right">
					<li class="facebook">
						<a href="https://www.facebook.com/gao.benny" target="_blank">
							<i class="fa fa-facebook fa-2x"></i>
						</a>
					</li>
					<li class="twitter">
						<a href="https://twitter.com/BeiniGao"  target="_blank"> 
							<i class="fa fa-twitter fa-2x"></i>
						</a>
					</li>
					<li class="linkedin">
						<a href="https://www.linkedin.com/profile/view?id=373946568"  target="_blank"> 
							<i class="fa fa-linkedin fa-2x"></i>
						</a>
					</li>
					<li class="github">
						<a href="https://github.com/ai376928387"  target="_blank"> 
							<i class="fa fa-github fa-2x"></i>
						</a>
					</li>
				</ul>
			</div>	
		</div>
	</div>
</div>	


<div class="container">
	<div class="logo">
		<a href="{{ URL::route('home') }}">
			{{ HTML::image('images/logo.png','logo',array(
				'class'=>'logo-img',
				'width'=>'105'
			)) }}
		</a>
	</div>
</div>