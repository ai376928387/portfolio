<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	{{ HTML::script('js/jquery-1.11.2.min.js') }}
	{{ HTML::script('js/bootstrap.min.js') }}			
	{{ HTML::script('js/script.js') }}
	{{ HTML::style('css/bootstrap.min.css') }}
	{{ HTML::style('css/bootstrap-social.css') }}
	{{ HTML::style('css/style.css') }}
	<title>Gao Beini 柳条高 Profolio</title>
</head>
<body>
	<!-- Create a div which will be the canvasloader wrapper -->	
	<div id="canvasloader-container" class="wrapper"></div>
		
	<!-- This script creates a new CanvasLoader instance and places it in the wrapper div -->
	<script type="text/javascript">
		var cl = new CanvasLoader('canvasloader-container');
		cl.setColor('#005f74'); // default is '#000000'
		cl.setShape('spiral'); // default is 'oval'
		cl.show(); // Hidden by default
		
		// This bit is only for positioning - not necessary
		  var loaderObj = document.getElementById("canvasLoader");
  		loaderObj.style.position = "absolute";
  		loaderObj.style["top"] = cl.getDiameter() * -0.5 + "px";
  		loaderObj.style["left"] = cl.getDiameter() * -0.5 + "px";
    </script>

		@if (Session::has('global'))
		<p class="global">{{ Session::get('global') }}</p>
		@endif

		@include('layout.nav')
		
		<div class="container">
			@yield('content')
		</div>
		

		@include('layout.foot')


		
		


</body>
</html>