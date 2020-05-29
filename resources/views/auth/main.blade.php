
<!DOCTYPE html>
<html lang="en">
<head>
	<title>PPM NH - @yield('title')</title>
	<link rel="icon" type="image/png" href="{{ url('download.png') }}">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{ url('images/icons/favicon.ico') }}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ url('vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ url('theme-sbadmin/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ url('theme-sbadmin/fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ url('vendor/animate/animate.css') }}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ url('vendor/css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ url('vendor/animsition/css/animsition.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ url('vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ url('vendor/daterangepicker/daterangepicker.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ url('theme-sbadmin/css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ url('theme-sbadmin/css/main1.css') }}">
	<link rel="shortcut icon" href="{{ url('main/images/download.png') }}">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		@yield('content')
	</div>
	
<!--===============================================================================================-->
	<script src="{{ url('vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ url('vendor/animsition/js/animsition.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ url('vendor/bootstrap/js/popper.js') }}"></script>
	<script src="{{ url('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ url('vendor/select2/select2.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ url('vendor/daterangepicker/moment.min.js') }}"></script>
	<script src="{{ url('vendor/daterangepicker/daterangepicker.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ url('vendor/countdowntime/countdowntime.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ url('theme-sbadmin/js/main.js') }}"></script>

</body>
</html>