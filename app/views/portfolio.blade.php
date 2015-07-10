@extends('layout.main')

@section('content')


    
<div class="container">
	<div class="widget" id="portfolio">
		<h2 class="title">
			Portfolio
		</h2>
		<div class="widget-content">
			<header class="sort_by">
				<span>Show:</span>
					<a href="#website">Website</a>
					<a href="#photoshop">Graphic/ Web Design</a>
					<a href="#film">Flash/ Video</a>
			</header>
			<div class="section" id="website">
				<h3>Website</h3>
				<div class="row">
					<div class="col-md-4 col-sm-6">
						<div class="portfolioListItem">
							<img src="images/portfolio-healthplus.png" alt="healthplus">
							<a class="portfolioItemAnchor thumbnail" data-toggle="lightbox" href="{{ URL::route('healthplus')}}">Health Plus</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="portfolioListItem">
							<img src="images/portfolio-pawnstar.png" alt="pawnstar">
							<a class="portfolioItemAnchor" data-url="*" data-identifier="70" href="{{ URL::route('pawnstar')}}">Pawn Star</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="portfolioListItem">
							<img src="images/portfolio-sellmyapple.png" alt="sellmyapple">
							<a class="portfolioItemAnchor" data-url="*" data-identifier="70" href="{{ URL::route('sellmyapple')}}">Sell My Apple</a>
						</div>
					</div>
				</div>
				<!-- <div class="row">
					<div class="col-md-4 col-sm-6">
						<div class="portfolioListItem">
							<img src="images/portfolio-prideprejudice.png" alt="prideandprejudice">
							<a class="portfolioItemAnchor" data-url="*" data-identifier="70" href="#">Pride & Prejudice</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="portfolioListItem">
							<img src="images/portfolio-t5.png" alt="T5 Hair Salon">
							<a class="portfolioItemAnchor" data-url="*" data-identifier="70" href="#">T5 Hair Salon</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
					</div>
				</div> -->
			</div>

			<div class="section" id="photoshop">
				<h3>Graphic/ Web Design</h3>
				<div class="row">
					<div class="col-md-4 col-sm-6">
						<div class="portfolioListItem">
							<img src="images/magazine-small.png" alt="magazine">
							<a class="portfolioItemAnchor" data-url="*" data-identifier="70" href="{{ URL::route('magazine')}}">magazine</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="portfolioListItem">

						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="portfolioListItem">
						</div>
					</div>
				</div>	
			</div>

			<div class="section" id="film">
				<h3>Flash/ Video</h3>
				<div class="row">
					<div class="col-md-4 col-sm-6">
						<div class="portfolioListItem">
							<img src="images/flash.png" alt="flash">
							<a class="portfolioItemAnchor" data-url="*" data-identifier="70" href="{{ URL::route('flash')}}">Flash</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="portfolioListItem">
							<img src="images/movie.png" alt="flash">
							<a class="portfolioItemAnchor" data-url="*" data-identifier="70" href="{{ URL::route('movie')}}">Movie</a>

						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="portfolioListItem">
						</div>
					</div>
				</div>	
			</div>
		</div>
		
		</div>
	</div>
</div>


@stop