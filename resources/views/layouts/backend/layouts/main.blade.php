<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>{{env('APP_NAME')}}</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.7 -->
	<link rel="stylesheet" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="{{asset('vendor/font-awesome/css/font-awesome.min.css')}}">
	<!-- Theme style -->
	<link rel="stylesheet" href="{{asset('vendor/AdminLTE/css/AdminLTE.min.css')}}">
  	<link rel="stylesheet" href="{{asset('vendor/AdminLTE/css/_all-skins.min.css')}}">
  	<link rel="stylesheet" href="{{asset('css/backend/style.css')}}">
  	<!--[if lt IE 9]>
  		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<!-- Google Font -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
	@stack('tag_headers')
</head>
<body class="hold-transition skin-red sidebar-mini">
	<div class="wrapper">
		@include('layouts.backend.layouts.header')

		@include('layouts.backend.layouts.sidebar')

		<div class="content-wrapper">
			@yield('content')
		</div>
		@include('layouts.backend.layouts.footer')
   </div>	

	<!-- jQuery 3 -->
	<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
	<!-- Bootstrap 3.3.7 -->
	<script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<!-- AdminLTE App -->
	<script src="{{asset('vendor/AdminLTE/js/adminlte.min.js')}}"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="{{asset('vendor/AdminLTE/js/demo.js')}}"></script>
	<script src="{{asset('js/backend/system.js')}}"></script>
	@stack('scripts')
</body>
</html>