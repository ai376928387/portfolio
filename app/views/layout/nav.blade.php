<div class="header">	
	<div class="container">
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<nav class="navbar-header">
				<ul class="nav navbar-nav">	
			        <li>
						<a href="{{ URL::route('home') }}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a>
			        </li>
			        <li>
			        	<a href="{{ URL::route('home') }}" class="active">Home <span class="sr-only">(current)</span></a>
			        </li>
			        <li><a href="#">Portfolio</a></li>
			     	<li><a href="{{ URL::route('resume') }}">Resume</a></li>
			     	<li><a href="{{ URL::route('skills') }}">Skills</a></li>
			     	<li><a href="#">About& Contact</a></li>
			    </ul>
			</nav>	

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

				<div class="clearfix"></div>

			</div>


			<form action="/search" class="navbar-form navbar-right search-bar" method="get" role="search">
				<div class="form-group">
					<input class="form-control form-main-search" name="q" placeholder="Search" type="text">
				</div>
				<button class="btn btn-def" type="submit">
				              Submit
	            </button>
			</form>

		</div>
	</div>
</div>	

<div class="clearfix"></div>

<div class="container logo">
	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 head-col">
		<div class="navbar-header">
			<a href="{{ URL::route('home') }}">
				{{ HTML::image('images/logo.png','logo',array(
					'class'=>'logo',
					'width'=>'105'
				)) }}
			</a>
		</div>
	</div>
</div>