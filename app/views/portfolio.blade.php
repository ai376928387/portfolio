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

					<a href="*">Website</a>
					<a href="*">Graphic/Web design</a>
					<a href="*">Flash/Video</a>
					<a href="*">Photography</a>
			</header>

				<div class="section active">
					<div class="row">
						<div class="col-md-4 col-sm-6">
							<div class="portfolioListItem">
								<img src="images/portfolio-healthplus.png" alt="healthplus">
								<a class="portfolioItemAnchor" data-url="*" data-identifier="70" href="#"></a>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
							<div class="portfolioListItem">
								<img src="images/portfolio-pawnstar.png" alt="healthplus">
								<a class="portfolioItemAnchor" data-url="*" data-identifier="70" href="#"></a>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
							<div class="portfolioListItem">
								<img src="images/portfolio-sellmyapple.png" alt="healthplus">
								<a class="portfolioItemAnchor" data-url="*" data-identifier="70" href="#"></a>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4 col-sm-6">
							<div class="portfolioListItem">
								<img src="images/portfolio-prideprejudice.png" alt="healthplus">
								<a class="portfolioItemAnchor" data-url="*" data-identifier="70" href="#"></a>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
							<div class="portfolioListItem">
								<img src="images/portfolio-t5.png" alt="healthplus">
								<a class="portfolioItemAnchor" data-url="*" data-identifier="70" href="#"></a>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
							<div class="portfolioListItem">
								
							</div>
						</div>
					</div>
				</div>
				<div class="section">Graphic/Web design</div>
				<div class="section">Flash/Video</div>
				<div class="section">Photography</div>
			</div>
			
			
		</div>
	</div>
</div>


@stop