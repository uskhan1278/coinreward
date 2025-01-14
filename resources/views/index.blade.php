@extends('layouts.main')

@section('title','Home')
@section('content')
	<!-- banner -->
	<section id="banner">
		<img src="{{URL::asset('public/site_assets/images/x0.jpg')}}" class="img-fluid">
		<div class="banner_text">
			<div class="container">
				<div class="section-title">
					<h3 class="title" data-aos="fade-right"  data-aos-delay="500">
						Coin Rewards Chips<br/>
						Cryptocurrency
					</h3>

					<p data-aos="fade-right"  data-aos-delay="1000">Coin Rewards website will sell Coin Rewards Chips<br/> that is fully open source</p>
					<a href="#" class="btn btn-theme" data-aos="fade-right"  data-aos-delay="1400">Get started</a>
				</div>					
			</div>
		</div>
		<img src="{{URL::asset('public/site_assets/images/x2.png')}}" class="img-fluid bg-img parallax-img" data-aos="fade-up">	
		<img src="{{URL::asset('public/site_assets/images/x1.png')}}" class="img-fluid mobile-img parallax-img" data-aos="fade-down"  data-aos-delay="200">
		<img src="{{URL::asset('public/site_assets/images/x3.png')}}" class="img-fluid bottom-img parallax-img">
	</section>
	<!-- /banner -->
	
	<!-- Intro Section -->
	<section id="intro">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-12" data-aos="fade-right"  data-aos-delay="300">
					<img src="{{URL::asset('public/site_assets/images/bg-home-573x447.png')}}" class="img-fluid">
				</div>
				<div class="col-md-6 col-12">
					<h6 class="item_subtitle" data-aos="fade-left"  data-aos-delay="500"><b>01.</b> welcome</h6>
					<h2 class="item_title" data-aos="fade-left"  data-aos-delay="700">Coin Reward website will sell Coin Reward Chips. <br>Anywhere</h2>
					
					<p data-aos="fade-left"  data-aos-delay="900">Member of this website will called as a “Investor”. They will create a free account to purchase Coin Reward Chips. After they will purchase Coin Reward Chips then everyday they will get some reward (profit) from their current Coin Reward Chips Balance that they have in their account.</p>
				</div>
			</div>
		</div>
	</section>
	<!-- /Intro Section -->
	
	<!-- benefit Section -->
	<section id="benefit">
		<div class="container">
			<h6 class="item_subtitle" data-aos="fade-up"  ><b>02.</b> benefits</h6>
			<h2 class="item_title" data-aos="fade-up"  >Coin Reward Chips Benefits</h2>
			
			<!-- Icons Row -->		
			<div class="row sc_icons sc_icons_modern no-gutters">
				<!-- Icon 1 -->
				<div class="col-sm-6 col-lg-3 col-12" data-aos="fade-up" data-aos-delay="200">
					<div class="sc_icons_item">
						<div class="sc_icons_icon sc_icon_type_ icon-icon-1"><span class="sc_icon_type_ icon-icon-1"></span></div>
						<h4 class="sc_icons_item_title"><span>Access</span></h4>
						<div class="sc_icons_item_description">
							<span>Connectivity across </span>
							<span></span>
							<span>payment networks</span>
						</div>
						<a href="#" class="sc_icons_item_link"></a>
						<span class="icon-number">01.</span>
					</div>
				</div>
				
				<!-- Icon 2 -->
				<div class="col-sm-6 col-lg-3 col-12" data-aos="fade-up" data-aos-delay="500">
					<div class="sc_icons_item">
						<div class="sc_icons_icon sc_icon_type_ icon-icon-2"><span class="sc_icon_type_ icon-icon-2"></span></div>
						<h4 class="sc_icons_item_title"><span>Speed</span></h4>
						<div class="sc_icons_item_description">
							<span>Connectivity across </span>
							<span></span>
							<span>payment networks</span>
						</div>
						<a href="#" class="sc_icons_item_link"></a>
						<span class="icon-number">02.</span>
					</div>
				</div>
				<!-- Icon 3 -->
				<div class="col-sm-6 col-lg-3 col-12" data-aos="fade-up" data-aos-delay="700">
					<div class="sc_icons_item">
						<div class="sc_icons_icon sc_icon_type_ icon-icon-3"><span class="sc_icon_type_ icon-icon-3"></span></div>
						<h4 class="sc_icons_item_title"><span>Certainity</span></h4>
						<div class="sc_icons_item_description">
							<span>Connectivity across </span>
							<span></span>
							<span>payment networks</span>
						</div>
						<a href="#" class="sc_icons_item_link"></a>
						<span class="icon-number">03.</span>
					</div>
				</div>
				<!-- Icon 4 -->
				<div class="col-sm-6 col-lg-3 col-12" data-aos="fade-up" data-aos-delay="900">
					<div class="sc_icons_item">
						<div class="sc_icons_icon sc_icon_type_ icon-icon-4"><span class="sc_icon_type_ icon-icon-4"></span></div>
						<h4 class="sc_icons_item_title"><span>Cost</span></h4>
						<div class="sc_icons_item_description">
							<span>Connectivity across </span>
							<span></span>
							<span>payment networks</span>
						</div>
						<a href="#" class="sc_icons_item_link"></a>
						<span class="icon-number">04.</span>
					</div>
				</div>				
			</div><!-- Icons ROW End -->
		</div>
		<div class="container">
			<div class="row justify-content-md-end">				
				<div class="col-md-6 col-12">
					<h6 class="item_subtitle" data-aos="fade-left"  data-aos-delay="200"><b>03.</b> evolution</h6>
					<h2 class="item_title" data-aos="fade-left"  data-aos-delay="500">Investing should be <br>Intelligent</h2>
					
					<p data-aos="fade-left"  data-aos-delay="700">When member will click on Make Deposit then he will get a page where he can find out the payment method name and some of the other boxes. He will select payment method and enter the amount as he wanna make deposit and then he will continue. When he will make deposit successfully then that balance will add with the same payment method balance.</p>
					<a href="#" class="btn btn-theme mt-4" data-aos="fade-left"  data-aos-delay="800">Learn More</a>
				</div>
			</div>
		</div>
	</section>
	<!-- /benefit Section -->
	
	<!-- Works Section -->
	<section id="works">
		<div class="container">
			<div class="row align-items-center justify-content-xl-between">
				<div class="col-lg-5 col-md-6 col-12" data-aos="fade-right"  data-aos-delay="100">
					<img src="{{URL::asset('public/site_assets/images/bg-home-3-559x477.png')}}" class="img-fluid">
				</div>
				<div class="col-md-6 col-12">
					<h6 class="item_subtitle" data-aos="fade-left"  data-aos-delay="200"><b>04.</b> How it works</h6>
					<h2 class="item_title" data-aos="fade-left"  data-aos-delay="500">Coin Reward Chips.</h2>
					
					<ul class="nav nav-tabs" role="tablist" data-aos="fade-up"  data-aos-delay="600">
						<li class="nav-item">
						  <a class="nav-link active" data-toggle="tab" href="#home">Make Deposit</a>
						</li>
						<li class="nav-item">
						  <a class="nav-link" data-toggle="tab" href="#menu1">Purchase coin reward chips</a>
						</li>
						<li class="nav-item">
						  <a class="nav-link" data-toggle="tab" href="#menu2">Exchange Chips</a>
						</li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content" data-aos="fade-up"  data-aos-delay="800">
						<div id="home" class="container tab-pane active"><br>
							<h6>Make a deposit wallet</h6>
							<p>Member of this website will called as a “Investor”. They will create a free account to purchase Coin Reward Chips. After they will purchase Coin Reward Chips then everyday they will get some reward (profit) from their current Coin Reward Chips Balance that they have in their account.</p>
						</div>
						<div id="menu1" class="container tab-pane fade"><br>
							<h6>Make a deposit wallet</h6>
							<p>Member of this website will called as a “Investor”. They will create a free account to purchase Coin Reward Chips. After they will purchase Coin Reward Chips then everyday they will get some reward (profit) from their current Coin Reward Chips Balance that they have in their account.</p>
						</div>
						<div id="menu2" class="container tab-pane fade"><br>
							<h6>Make a deposit wallet</h6>
							<p>Member of this website will called as a “Investor”. They will create a free account to purchase Coin Reward Chips. After they will purchase Coin Reward Chips then everyday they will get some reward (profit) from their current Coin Reward Chips Balance that they have in their account.</p>
						</div>
					</div>					
				</div>
			</div>
		</div>
	</section>
	<!-- /Works Section -->
	
	<!-- About Section -->
	<section id="about">
		<div class="container">
			<div class="row flex-row-reverse justify-content-lg-between">
				<div class="col-md-6 col-12 text-center" data-aos="fade-left"  data-aos-delay="100">
					<img src="{{URL::asset('public/site_assets/images/p2.png')}}" class="img-fluid">
				</div>
				<div class="col-xl-5 col-lg-6 col-md-6 col-12">
					<h6 class="item_subtitle text-white" data-aos="fade-right"  data-aos-delay="300"><b>05.</b> investor</h6>
					<h2 class="item_title text-white" data-aos="fade-right"  data-aos-delay="500">Member will be called <br>as a “Investor”</h2>
					
					<p data-aos="fade-right"  data-aos-delay="500">Create a free account to purchase a Coin Reward Chips.</p>
					<a href="#" class="btn btn-theme btn-blue btn-lg with_icon" data-aos="fade-right"  data-aos-delay="600">
						<span class="button_icon">
							<span class="icon-linux"></span>
						</span>
						<span class="button_text">
							<span class="button_title">Purchase Coin Reward Chips</span>
							<span class="button_subtitle">Get Reward Now</span>
						</span>
					</a>
					<div class="row mt-4">
						<div class="col" data-aos="fade-up"  data-aos-delay="700">
							<h3 class="text-white m-0">87 374</h3>
							<p class="mt-0">Total Investor</p>
						</div>
						<div class="col" data-aos="fade-up"  data-aos-delay="800">
							<h3 class="text-white m-0">2.45M+</h3>
							<p class="mt-0">Total Reward Chips</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /About Section -->
	
	<!-- Additional Section -->
	<section id="support">
		<div class="container">
			<div class="row justify-content-lg-between">
				<div class="col-md-6 col-12 text-center" data-aos="fade-right"  data-aos-delay="200">
					<img src="{{URL::asset('public/site_assets/images/bg-10-597x521.png')}}" class="img-fluid">
				</div>
				<div class="col-xl-4 col-lg-5 col-md-6 col-12">
					<h6 class="item_subtitle" data-aos="fade-left"  data-aos-delay="100"><b>05.</b> additional resources</h6>
					<h2 class="item_title" data-aos="fade-left"  data-aos-delay="400">Need More Help?</h2>
					
					<p data-aos="fade-left"  data-aos-delay="500">It is a digital asset designed to work as a medium of exchange that uses cryptography to secure its transactions, to control the creation of additional units, and to verify the transfer of assets.</p>
					<a href="#" class="btn btn-theme my-3" data-aos="fade-left"  data-aos-delay="600">
						<span class="icon-04-play-button"></span> view video tutorials
					</a>
					<a href="#" class="btn btn-theme btn-blue my-2" data-aos="fade-left"  data-aos-delay="650">
						<span class="icon-25-info"></span> ask the community
					</a>
					
				</div>
			</div>
		</div>
	</section>
	<!-- /About Section -->
	
@endsection	
