<div class="header">	
	<div class="container">
		<nav class="navbar-header">
			<ul class="nav navbar-nav">	
		        <li>
					<a href="#"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a>
		        </li>
		        <li>
		        	<a href="#" class="active">Home <span class="sr-only">(current)</span></a>
		        </li>
		        <li><a href="#">Portfolio</a></li>
		     	<li><a href="#">Resume</a></li>
		     	<li><a href="#">Skills</a></li>
		     	<li><a href="#">About& Contact</a></li>
		      </ul>

			<ul class="nav nav-pills navbar-right">
				<li><a href="https://www.facebook.com/gao.benny"><i class="fa fa-facebook"></i></a></li>
				<li><a href="https://www.linkedin.com/profile/view?id=373946568"><i class="fa fa-linkedin"></i></a></a></li>
				<li><a href="https://twitter.com/followers"> <i class="fa fa-twitter"></i></a></li>

			</ul>
		</nav>	
	</div>
</div>	

<div class="clearfix"></div>

<div class="container">
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