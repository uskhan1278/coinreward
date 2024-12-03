<!DOCTYPE html>
<html lang="en">
<head>
	<title>Coin Reward - @yield('title')</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" href="{{URL::asset('public/site_assets/css/bootstrap.min.css')}}">
	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Hind:300,400,600|Rubik:400,500,700&display=swap" rel="stylesheet"/> 
	<link rel="stylesheet" href="{{URL::asset('public/site_assets/css/fontawesome.min.css')}}">
	<link rel="stylesheet" href="{{URL::asset('public/site_assets/css/fontello-embedded.css')}}">
	<!-- Plugin -->
	<link rel="stylesheet" type="text/css" href="{{URL::asset('public/site_assets/css/aos.css')}}">
	<!-- Style -->	
	<link rel="stylesheet" type="text/css" href="{{URL::asset('public/site_assets/css/style.css')}}">

	<script src="{{URL::asset('public/site_assets/js/jquery.min.js')}}"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style type="text/css">
		.error:focus{
			    border-color: red;
			    outline: 0;
			    box-shadow: 0 0 0 0.2rem rgba(255,0,0,.25);
 			}
		.error{
			    border-color: red;
			    outline: 0;
			    box-shadow: 0 0 0 0.2rem rgba(255,0,0,.25);
			}
		.success:focus{
				 border-color: green;
			    outline: 0;
			    box-shadow: 0 0 0 0.2rem rgba(0,255,0,.25);
		}
		.success{
				 border-color: green;
			    outline: 0;
			    box-shadow: 0 0 0 0.2rem rgba(0,255,0,.25);
		}
	</style>
</head>
<body>
	@include('header')
	@yield('content')
	@yield('about')
	@yield('affiliates')
	@yield('blog')
	@yield('howitworks')
	@yield('profile')
	@yield('gethelp')
	@yield('faq')
	@yield('news')
	@yield('login')
	@yield('register')
	@include('footer')
<script src="{{URL::asset('public/site_assets/js/popper.min.js')}}"></script>
  <script src="{{URL::asset('public/site_assets/js/bootstrap.min.js')}}"></script>
  <!-- Plugins -->
  <script src="{{URL::asset('public/site_assets/js/aos.js')}}"></script>
  <script src="{{URL::asset('public/site_assets/js/custom.js')}}"></script>
  <script>
  		$(document).ready(function(){
  			setTimeout(function(){
  				$('.timeout').fadeOut('fast');
  			},5000);
  		});
  </script>
</body>
</html>