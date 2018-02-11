<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">

	    <!-- CSRF Token -->
	    <meta name="csrf-token" content="{{ csrf_token() }}">

	    <title>{{ config('app.name', 'ParkHere') }}</title>

	    <!-- Styles -->
	    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

	    <!-- Bootstrap 3.3.7 -->
	    <link rel="stylesheet" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
	    <!-- Font Awesome -->
	    <link rel="stylesheet" href="{{asset('bower_components/font-awesome/css/font-awesome.min.css')}}">
	    <!-- Ionicons -->
	    <link rel="stylesheet" href="{{asset('bower_components/Ionicons/css/ionicons.min.css')}}">
	    <!-- Theme style -->
	    <link rel="stylesheet" href="{{asset('bower_components/admin-lte/dist/css/AdminLTE.min.css')}}">
	    <!-- iCheck -->
    	<link rel="stylesheet" href="{{asset('bower_components/admin-lte/plugins/iCheck/square/blue.css')}}">
	</head>
    <body class="hold-transition login-page">
        <div class="login-box">
			<div class="login-logo">
		    	<a href="index2.html"><b>Park</b>Here</a>
		  	</div>
		  	<!-- /.login-logo -->
		  	<div class="login-box-body">
		    	<p class="login-box-msg">Sign in to start your session</p>

		    	<!-- <form action="{{url('/dashboard')}}" method="post"> -->
		      		<div class="form-group has-feedback">
		        		<input type="email" class="form-control" placeholder="Email">
		        		<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
		      		</div>
		      		<div class="form-group has-feedback">
		        		<input type="password" class="form-control" placeholder="Password">
		        		<span class="glyphicon glyphicon-lock form-control-feedback"></span>
		      		</div>
			      	<div class="row">
			        	<div class="col-xs-8">
			          		<div class="checkbox icheck">
			            		<label>
			              			<input type="checkbox"> Remember Me
			            		</label>
			          		</div>
			        	</div>
			        	<!-- /.col -->
			        	<div class="col-xs-4">
			          		<a href="{{Route('dashboard')}}"><button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button></a>
			        	</div>
			        	<!-- /.col -->
			      	</div>
		    	<!-- </form> -->
		    	
		        <a href="#">I forgot my password</a><br>

		    </div>
		    <!-- /.login-box-body -->
		</div>
		<!-- /.login-box -->

	    <!-- jQuery 3 -->
	    <script src="{{asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
	    <!-- Bootstrap 3.3.7 -->
	    <script src="{{asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
	    <!-- iCheck -->
	    <script src="{{asset('bower_components/admin-lte/plugins/iCheck/icheck.min.js')}}"></script>
	    <script>
	      $(function () {
	        $('input').iCheck({
	          checkboxClass: 'icheckbox_square-blue',
	          radioClass: 'iradio_square-blue',
	          increaseArea: '20%' /* optional */
	        });
	      });
	    </script>
    </body>
</html>
