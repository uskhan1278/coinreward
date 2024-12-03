@extends('layouts.main')
@section('title','Affiliates')
@section('content')
	<section id="banner">
		<img src="{{URL::asset('public/site_assets/images/header-bg.png')}}" class="img-fluid">
		<div class="page_text">
			<div class="container">
				<div class="section-title about">
					<h3 class="title" data-aos="fade-right"  data-aos-delay="500">
						Affiliates
					</h3>

				</div>					
			</div>
		</div>
	</section>
	<!-- Intro Section -->
	<section id="affiliates">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="detail">
						<div class="back_icon">
							<a href="http://lymcoin.ancorathemes.com/services/general/" id="sc_services_1705902965_icon-19-general_1" class="sc_services_item_icon icon-19-general icon"></a>
						</div>
						<h4>General</h4>
						<p>Mauris sagittis, tortor vestibulum et fringilla, magna vulputate metus, commodo non facilisis. Vestibulum commodo, metus eget fringilla convallis, augue elit euismod ante fames ac turpis egestas</p>
						<a href="#" class="btn btn-theme mt-2" data-aos="fade-up"  data-aos-delay="800">Learn More</a>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="detail">
						<a href="http://lymcoin.ancorathemes.com/services/privacy/" id="sc_services_1705902965_icon-20-privacy_2" class="sc_services_item_icon icon-20-privacy icon"></a>
						<h4>Privacy</h4>
						<p>Mauris sagittis, tortor vestibulum et fringilla, magna vulputate metus, commodo non facilisis. Vestibulum commodo, metus eget fringilla convallis, augue elit euismod ante fames ac turpis egestas</p>
						<a href="#" class="btn btn-theme mt-2" data-aos="fade-up"  data-aos-delay="800">Learn More</a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<div class="detail">
						<a href="http://lymcoin.ancorathemes.com/services/wallets/" id="sc_services_1782981239_icon-21-wallets_3" class="sc_services_item_icon icon-21-wallets"></a>
						<h4>Wallets</h4>
						<p>Mauris sagittis, tortor vestibulum et fringilla, magna vulputate metus, commodo non facilisis. Vestibulum commodo, metus eget fringilla convallis, augue elit euismod ante fames ac turpis egestas</p>
						<a href="#" class="btn btn-theme mt-2" data-aos="fade-up"  data-aos-delay="800">Learn More</a>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="detail">
						<a href="http://lymcoin.ancorathemes.com/services/recovery/" id="sc_services_1782981239_icon-22-backup_4" class="sc_services_item_icon icon-22-backup"></a>
						<h4>Recovery</h4>
						<p>Mauris sagittis, tortor vestibulum et fringilla, magna vulputate metus, commodo non facilisis. Vestibulum commodo, metus eget fringilla convallis, augue elit euismod ante fames ac turpis egestas</p>
						<a href="#" class="btn btn-theme mt-2" data-aos="fade-up"  data-aos-delay="800">Learn More</a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<div class="detail">
						<a href="http://lymcoin.ancorathemes.com/services/recovery/" id="sc_services_1782981239_icon-22-backup_4" class="sc_services_item_icon icon-22-backup"></a>
						<h4>Mining</h4>
						<p>Mauris sagittis, tortor vestibulum et fringilla, magna vulputate metus, commodo non facilisis. Vestibulum commodo, metus eget fringilla convallis, augue elit euismod ante fames ac turpis egestas</p>
						<a href="#" class="btn btn-theme mt-2" data-aos="fade-up"  data-aos-delay="800">Learn More</a>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="detail">
						<a href="http://lymcoin.ancorathemes.com/services/miscellaneous/" id="sc_services_1782981239_icon-24-misc_6" class="sc_services_item_icon icon-24-misc"></a>
						<h4>Miscellaneous</h4>
						<p>Mauris sagittis, tortor vestibulum et fringilla, magna vulputate metus, commodo non facilisis. Vestibulum commodo, metus eget fringilla convallis, augue elit euismod ante fames ac turpis egestas</p>
						<a href="#" class="btn btn-theme mt-2" data-aos="fade-up"  data-aos-delay="800">Learn More</a>
					</div>
				</div>
			</div>
		</div>	
	</section>
@endsection