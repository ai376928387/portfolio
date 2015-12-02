<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge,chrome=1">
	<meta name="viewport" content="width=device-width,initial-scale=1">	
	{{ HTML::script('js/dev/main.js') }}
	{{ HTML::style('css/style.css') }}
	<title>Gao Beini 柳条高 Portfolio</title>
</head>
<body>


		@include('layout.nav')


		@if (Session::has('global'))
		<div class="container">
			<p class="global">{{ Session::get('global') }}</p>
		</div>
		@endif
		
		@yield('content')
		

		@include('layout.foot')


		
		


</body>
</html>