<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Admin Area</title>
		<link rel="stylesheet" href="https://bootswatch.com/flatly/bootstrap.css">
		<link rel="stylesheet" href="https://bootswatch.com/assets/css/custom.min.css">
	</head>
	<body>
		<div class="container">
			@include('includes.admin-header')
			@yield('content')
			
			<script type="text/javascript">
				var baseUrl = "{{ URL::to('/') }}";
			</script>
			@yield('scripts')
		</div>

		<script type="text/javascript" src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
		<script type="text/javascript" src="https://bootswatch.com/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="https://bootswatch.com/assets/js/custom.js"></script>
	</body>
</html>
