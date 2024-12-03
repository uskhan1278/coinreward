@extends('layouts.main')
	@section('title','About Us')
	@section('content')
	<section id="banner">
		<img src="{{URL::asset('public/site_assets/images/header-bg.png')}}" class="img-fluid">
		<div class="page_text">
			<div class="container">
				<div class="section-title about">
					<h3 class="title" data-aos="fade-right"  data-aos-delay="500">
						{{$data['page_title']}}
					</h3>

				</div>					
			</div>
		</div>
	</section>
	<!-- Intro Section -->
	<section id="intro">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-12">
					<h6 class="item_subtitle" data-aos="fade-right"  data-aos-delay="500"><b>01.</b> overview</h6>
					<h2 class="item_title" data-aos="fade-right"  data-aos-delay="700">{{$data['overview_heading']}}</h2>
					
					<p data-aos="fade-right"  data-aos-delay="900">{!!$data['overview_content']!!}</p>
				</div>
				<div class="col-md-6 col-12" data-aos="fade-left"  data-aos-delay="300">
					<img src="{{URL::asset('public/site_assets/images/'.$data['overview_image'])}}" class="img-fluid">
				</div>				
			</div>
		</div>
	</section>
	<!-- /Intro Section -->
	<!-- benefit Section -->
	<section id="about_us">
		<div class="container">
			<h6 class="item_subtitle text-center" data-aos="fade-up"  ><b>02.</b> details</h6>
			<h2 class="item_title text-center" data-aos="fade-up"  >{!!$data['detail_heading']!!}</h2>
			<p class="network">{!!$data['detail_content']!!}</p>
			<!-- Icons Row -->		
			<div class="row sc_icons sc_icons_modern no-gutters">
				<!-- Icon 1 -->
				<div class="col-sm-6 col-lg-3 col-12" data-aos="fade-up" data-aos-delay="200">
					<div class="speed">
						<a href="http:// Coin Reward.ancorathemes.com/services/ Coin Reward-transactions/" id="sc_services_838785937_icon-09-transaction_1" class="sc_services_item_icon icon-09-transaction"></a>
					</div>
					<div class="lymcoin">
						<h4><a href="#">{!!$data['detail_subheading_1']!!}</a></h4>
						<p>{!!$data['detail_subcontent_1']!!}</p>
						<a href="#" class="btn btn-theme btn-more mt-2" data-aos="fade-up"  data-aos-delay="800">Learn More</a>
					</div>
				</div>
				
				<!-- Icon 2 -->
				<div class="col-sm-6 col-lg-3 col-12" data-aos="fade-up" data-aos-delay="500">
					<div class="speed">
						<a href="http:// Coin Reward.ancorathemes.com/services/safety-reliability/" id="sc_services_1876530885_icon-10-safety_2" class="sc_services_item_icon icon-10-safety"></a>
					</div>
					<div class="lymcoin">
						<h4><a href="#">{!!$data['detail_subheading_2']!!}</a></h4>
						<p>{!!$data['detail_subcontent_2']!!}</p>
						<a href="#" class="btn btn-theme btn-more mt-2" data-aos="fade-up"  data-aos-delay="800">Learn More</a>
					</div>
				</div>
				<!-- Icon 3 -->
				<div class="col-sm-6 col-lg-3 col-12" data-aos="fade-up" data-aos-delay="700">
					<div class="speed">
						<a href="http:// Coin Reward.ancorathemes.com/services/deflation/" id="sc_services_1876530885_icon-11-deflation_3" class="sc_services_item_icon icon-11-deflation"></a>
					</div>
					<div class=" lymcoin">
						<h4><a href="#">{!!$data['detail_subheading_3']!!}</a></h4>
						<p>{!!$data['detail_subcontent_3']!!}</p>
						<a href="#" class="btn btn-theme btn-more mt-2" data-aos="fade-up"  data-aos-delay="800">Learn More</a>
					</div>
				</div>
				<!-- Icon 4 -->
				<div class="col-sm-6 col-lg-3 col-12" data-aos="fade-up" data-aos-delay="900">
					<div class="speed">
						<a href="http:// Coin Reward.ancorathemes.com/services/emission/" id="sc_services_1876530885_icon-12-emission_4" class="sc_services_item_icon icon-12-emission"></a>
					</div>
					<div class="lymcoin">
						<h4><a href="#">{!!$data['detail_subheading_4']!!}</a></h4>
						<p>{!!$data['detail_subcontent_4']!!}</p>
						<a href="#" class="btn btn-theme btn-more mt-2" data-aos="fade-up"  data-aos-delay="800">Learn More</a>
					</div>
				</div>				
			</div><!-- Icons ROW End -->
		</div>
	</section> 
	
	<!-- About Section -->
	<section id="about">
		<div class="container">
			<div class="row flex-row-reverse justify-content-lg-between">
				<div class="col-xl-5 col-lg-6 col-md-6 col-12">
					<h6 class="item_subtitle text-white" data-aos="fade-left"  data-aos-delay="300"><b>03.</b>{!!$data['capitalization_heading']!!}</h6>
					<h2 class="item_title text-white" data-aos="fade-left"  data-aos-delay="500"> Coin Reward Market Value</h2>
					
					{!!$data['capitalization_content']!!}
				</div>
				<div class="col-md-6 col-12 text-center" data-aos="fade-left"  data-aos-delay="100">
					
				</div>
			</div>
		</div>
	</section>
	<!-- /About Section -->
	
	<section id="why_use">
		<div class="container">
			<h6 class="item_subtitle text-center" data-aos="fade-up"  ><b>04.</b>  features</h6>
			<h2 class="item_title text-center mb-5" data-aos="fade-up">{!!$data['features_heading']!!}</h2>
			<div class="row">
				<div class="col-lg-4 ">
					<div class="row">
						<div class="col-lg-3 col-3">
							<a href="http:// Coin Reward.ancorathemes.com/services/completely-anonymous-and-privacy-focused/" id="sc_services_814450265_icon-13-privacy_1" class="sc_services_item_icon icon-13-privacy"></a>
						</div>	
						<div class="col-lg-9 col-9">
							<h4>{!!$data['features_subheading_1']!!}</h4>
							<p>{!!$data['features_subcontent_1']!!}</p>
						</div>	
					</div>
				</div>
				<div class="col-lg-4">
					<div class="row">
						<div class="col-lg-3 col-3">
							<a href="http:// Coin Reward.ancorathemes.com/services/completely-anonymous-and-privacy-focused/" id="sc_services_814450265_icon-13-privacy_1" class="sc_services_item_icon icon-13-privacy"></a>
						</div>	
						<div class="col-lg-9 col-9">
							<h4>{!!$data['features_subheading_2']!!}</h4>
							<p>{!!$data['features_subcontent_2']!!}</p>
						</div>	
					</div>
				</div>
				<div class="col-lg-4">
					<div class="row">
						<div class="col-lg-3 col-3">
							<a href="http:// Coin Reward.ancorathemes.com/services/completely-anonymous-and-privacy-focused/" id="sc_services_814450265_icon-13-privacy_1" class="sc_services_item_icon icon-13-privacy"></a>
						</div>	
						<div class="col-lg-9 col-9">
							<h4>{!!$data['features_subheading_3']!!}</h4>
							<p>{!!$data['features_subcontent_3']!!}</p>
						</div>	
					</div>
				</div>
			
			</div>
		</div>
	</section> 
	
	
	@endsection