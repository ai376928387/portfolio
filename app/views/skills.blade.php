@extends('layout.main')

@section('content')


    
<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
			<div class="widget" id="skill-left">
				<h2 class="title">Skills</h2>
				<div class="widget-content language">
					<h3>Languages and Frameworks</h3>
					
					<div class="row">
						<div class="col-md-3">
							<h5>PHP</h5>
						</div>
						<div class="col-md-9">
							<div id="php_goal"></div>
							<script>
							$(document).ready(function(){$('#php_goal').goalProgress({
							        goalAmount: 100,currentAmount: 80,textBefore: '',textAfter: '%'
							    });
							});
							</script>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<h5>Laravel</h5>
						</div>
						<div class="col-md-9">
							<div id="laravel_goal"></div>
							<script>
							$(document).ready(function(){$('#laravel_goal').goalProgress({
							        goalAmount: 100,currentAmount: 80,textBefore: '',textAfter: '%'
							    });
							});
							</script>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<h5>Joomla</h5>
						</div>
						<div class="col-md-9">
							<div id="Joomla_goal"></div>
							<script>
							$(document).ready(function(){$('#Joomla_goal').goalProgress({
							        goalAmount: 100,currentAmount: 70,textBefore: '',textAfter: '%'
							    });
							});
							</script>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<h5>Magento</h5>
						</div>
						<div class="col-md-9">
							<div id="Magento_goal"></div>
							<script>
							$(document).ready(function(){$('#Magento_goal').goalProgress({
							        goalAmount: 100,currentAmount: 60,textBefore: '',textAfter: '%'
							    });
							});
							</script>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<h5>HTML/CSS</h5>
						</div>
						<div class="col-md-9">
							<div id="HTML_goal"></div>
							<script>
							$(document).ready(function(){$('#HTML_goal').goalProgress({
							        goalAmount: 100,currentAmount: 90,textBefore: '',textAfter: '%'
							    });
							});
							</script>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<h5>Bootstrap</h5>
						</div>
						<div class="col-md-9">
							<div id="bootstrap_goal"></div>
							<script>
							$(document).ready(function(){$('#bootstrap_goal').goalProgress({
							        goalAmount: 100,currentAmount: 90,textBefore: '',textAfter: '%'
							    });
							});
							</script>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<h5>Javascript/Jquery</h5>
						</div>
						<div class="col-md-9">
							<div id="js_goal"></div>
							<script>
							$(document).ready(function(){$('#js_goal').goalProgress({
							        goalAmount: 100,currentAmount: 80,textBefore: '',textAfter: '%'
							    });
							});
							</script>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<h5>SQL</h5>
						</div>
						<div class="col-md-9">
							<div id="SQL_goal"></div>
							<script>
							$(document).ready(function(){$('#SQL_goal').goalProgress({
							        goalAmount: 100,currentAmount: 70,textBefore: '',textAfter: '%'
							    });
							});
							</script>
						</div>
					</div>
				</div>
			
				<div class="widget-content design">
					<h3>Design</h3>
					<div class="row">
						<div class="col-md-3">
							<h5>Photoshop</h5>
						</div>
						<div class="col-md-9">
							<div id="Photoshop_goal"></div>
							<script>
							$(document).ready(function(){$('#Photoshop_goal').goalProgress({
							        goalAmount: 100,currentAmount: 80,textBefore: '',textAfter: '%'
							    });
							});
							</script>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<h5>Illustrator</h5>
						</div>
						<div class="col-md-9">
							<div id="Illustrator_goal"></div>
							<script>
							$(document).ready(function(){$('#Illustrator_goal').goalProgress({
							        goalAmount: 100,currentAmount: 60,textBefore: '',textAfter: '%'
							    });
							});
							</script>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<h5>Flash</h5>
						</div>
						<div class="col-md-9">
							<div id="Flash_goal"></div>
							<script>
							$(document).ready(function(){$('#Flash_goal').goalProgress({
							        goalAmount: 100,currentAmount: 70,textBefore: '',textAfter: '%'
							    });
							});
							</script>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<h5>Film Cut Pro</h5>
						</div>
						<div class="col-md-9">
							<div id="film_goal"></div>
							<script>
							$(document).ready(function(){$('#film_goal').goalProgress({
							        goalAmount: 100,currentAmount: 70,textBefore: '',textAfter: '%'
							    });
							});
							</script>
						</div>
					</div>
				</div>
				
				<div class="widget-content tools">
					<h3>Development Tools</h3>
					<div class="row">
						<div class="col-md-3">
							<h5>Sublime Text</h5>
						</div>
						<div class="col-md-9">
							<div id="sublime_goal"></div>
							<script>
							$(document).ready(function(){$('#sublime_goal').goalProgress({
							        goalAmount: 100,currentAmount: 80,textBefore: '',textAfter: '%'
							    });
							});
							</script>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<h5>GIT</h5>
						</div>
						<div class="col-md-9">
							<div id="GIT_goal"></div>
							<script>
							$(document).ready(function(){$('#GIT_goal').goalProgress({
							        goalAmount: 100,currentAmount: 70,textBefore: '',textAfter: '%'
							    });
							});
							</script>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<h5>COMMAND/TERMINAL</h5>
						</div>
						<div class="col-md-9">
							<div id="cmd_goal"></div>
							<script>
							$(document).ready(function(){$('#cmd_goal').goalProgress({
							        goalAmount: 100,currentAmount: 70,textBefore: '',textAfter: '%'
							    });
							});
							</script>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<h5>XAMMP/MAMP</h5>
						</div>
						<div class="col-md-9">
							<div id="xammp_goal"></div>
							<script>
							$(document).ready(function(){$('#xammp_goal').goalProgress({
							        goalAmount: 100,currentAmount: 60,textBefore: '',textAfter: '%'
							    });
							});
							</script>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 hide-home-sidebar">
			@include('layout.profile')
		</div>
	</div>
</div>


@stop