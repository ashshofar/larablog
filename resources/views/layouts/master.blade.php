<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>@yield('title')</title>
		<link rel="stylesheet" href="https://bootswatch.com/flatly/bootstrap.css">
		<link rel="stylesheet" href="https://bootswatch.com/assets/css/custom.min.css">
	</head>
	<body>
		<div class="container">
			@include('includes.header')
				@yield('content')
			@include('includes.footer')
		</div>

		<script type="text/javascript" src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
		<script type="text/javascript" src="https://bootswatch.com/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="https://bootswatch.com/assets/js/custom.js"></script>
	</body>
</html>
