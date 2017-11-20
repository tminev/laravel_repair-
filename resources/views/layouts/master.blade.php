
<!DOCTYPE html>
<html>
<head>
	<title>
		@yield('title')
	</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
	<script type="text/javascript" src="js/app.js"></script>
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
	
</head>
<body>
	<ul>
		<li> <a href="{{route('home')}}"> login </a> </li>
		<li> <a href="{{route('autors.index')}}"> autors </a></li>
		<li> <a href="{{route('books.index')}}"> books</a></li>
	</ul>

	

	@yield('content')

</body>
</html>