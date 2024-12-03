@extends('layouts.main')
@section('title','How it works')
@section('content')
	<section id="banner">
		<img src="{{URL::asset('public/site_assets/images/header-bg.png')}}" class="img-fluid">
		<div class="page_text">
			<div class="container">
				<div class="section-title about">
					<h3 class="title" data-aos="fade-right"  data-aos-delay="500">
						How It Works
					</h3>
				</div>					
			</div>
		</div>
	</section>
	<!-- Intro Section -->
	<section id="how_it">
		<div class="container">
			<div class="work">
				<h3 class="text-center mb-5">Our Support Policy</h3>
				<div class="row">
					<div class="col-lg-6">
						<p>To get a pre-purchase advice, you may post in the theme’s forum.<br>
							To get a response more promptly, you are recommended to use our Ticket-system.<br>
							We try to answer your questions within 12-24 hours. However, if any delay occurs, it doesn’t mean that we forgot about you. Some of the issues require testing and analyzing, so we can resolve it effectively.<br>
							Support time schedule is Monday – Friday: -10.00 – 19.00 CET
							</p>
					</div>
					<div class="col-lg-6">
						<p>Please note! We do not provide support, if you do not have the purchase code.<br>
							Item support does not include:<br>
							   1. Customization and installation.<br>
							   2. Support for third party software and plugins.
						</p>
					</div>
				</div>
			</div>
			<hr>
			<div class="work">
				<h3 class="text-center mb-5">How to use our Support System</h3>
				<div class="row">
					<div class="col-lg-6">
						<img src="{{URL::asset('public/site_assets/images/7_supportA.png')}}"/>
					</div>
					<div class="col-lg-6">
						<p>
						   1. In the ‘Item Details’ there is a clickable banner “Support Sys”, which leads you to tickets.<br>
							2. Or you may simply follow this link: ancorathemes.ticksy.com.<br>
							3. Enter your purchase key and register in the system.<br>
							4. To avoid a confusion, please use your own ThemeForest login in Support System.<br>
							5. Fill out the ticket form.
						</p>
					</div>
				</div>
			</div>
			<hr>
			<div class="work">
				<h3 class="text-center mb-5">Recommended Hosting</h3>
				<p class="text-center">Ancora offers only the best products and services and recommends them to their customers. One of the most important services is HOSTING. Unlike any cheap hostings that usually have limited resources which causes many problems to the site owners, quality hosting gives a client a fair amount of resources sufficient for any website and any task. By using quality hosting you can rest assured that your site will work smoothly. If you happen to use such hosting with limited resources (e.g. GoDaddy!), you may experience issues with “one-click install” feature. In that case, you are always welcome to contact our support team to get qualified help.</p>
			</div>
		</div>
	
	
	</section>
	<!-- footer -->	
@endsection