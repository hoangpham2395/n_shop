<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>{{env('APP_NAME')}}</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.7 -->
	<link rel="stylesheet" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="{{asset('vendor/font-awesome/css/font-awesome.min.css')}}">
	<!-- Theme style -->
	<link rel="stylesheet" href="{{asset('vendor/AdminLTE/css/AdminLTE.min.css')}}">
	<!-- iCheck -->
	<link rel="stylesheet" href="{{asset('vendor/iCheck/css/red.css')}}">

  	<!--[if lt IE 9]>
  		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<!-- Google Font -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
	<div class="login-box">
		<div class="login-logo">
			<a href="#"><b>Brown</b>store</a>
		</div>
		<!-- /.login-logo -->
		<div class="login-box-body">
			<p class="login-box-msg">{{ getMessage('login_box_message') }}</p>

			@if ($errors->any())
				<div class="alert alert-danger">
					<ul>
						@foreach ($errors->all() as $error)
							<li>{{$error}}</li>
						@endforeach
					</ul>
				</div>
			@endif

			{!! Form::open(['route' => 'backend.login.post']) !!}
				<div class="form-group has-feedback">
					{!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => transm('admin.email')]) !!}
					<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
				</div>
				<div class="form-group has-feedback">
					{!! Form::password('password', ['class' => 'form-control', 'placeholder' => transm('admin.password')]) !!}
					<span class="glyphicon glyphicon-lock form-control-feedback"></span>
				</div>
				<div class="row">
					<div class="col-xs-8"></div>
					<div class="col-xs-4">
						<button type="submit" class="btn btn-primary btn-block btn-flat">{{ transa('login') }}</button>
					</div>
				</div>
			{!! Form::close() !!}
		</div>
		<!-- /.login-box-body -->
	</div>
	<!-- /.login-box -->

	<!-- jQuery 3 -->
	<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
	<!-- Bootstrap 3.3.7 -->
	<script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<!-- iCheck -->
	<script src="{{asset('vendor/iCheck/js/icheck.min.js')}}"></script>
	<script>
		$(function () {
			$('input').iCheck({
				checkboxClass: 'icheckbox_square-red',
				radioClass: 'iradio_square-red',
				increaseArea: '20%' /* optional */
			});
		});
	</script>
</body>
</html>
