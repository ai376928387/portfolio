<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	{{ HTML::style('css/bootstrap.min.css') }}
	{{ HTML::style('css/bootstrap-social.css') }}
	{{ HTML::style('css/style.css') }}
	<title>Gao Beini 柳条高 Profolio</title>
</head>
<body>
		@if (Session::has('global'))
		<p class="global">{{ Session::get('global') }}</p>
		@endif

		@include('layout.nav')
		
		<div class="container">
			@yield('content')
		</div>
		
		{{ HTML::script('js/jquery-1.11.2.min.js') }}
		{{ HTML::script('js/bootstrap.min.js') }}			
		{{ HTML::script('js/script.js') }}
		
		


</body>
</html>