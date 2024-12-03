@extends('layouts.main')
@section('title','News')
@section('content')
	<section id="banner">
		<img src="{{URL::asset('public/site_assets/images/header-bg.png')}}" class="img-fluid">
		<div class="page_text">
			<div class="container">
				<div class="section-title about">
					<h3 class="title" data-aos="fade-right"  data-aos-delay="500">
						News
					</h3>
				</div>					
			</div>
		</div>
	</section>
	<section id="news">
		<div class="container">
			<div class="news_page">
				<h2>News & Features</h2>
				<hr><br>	
				<img src="{{URL::asset('public/site_assets/images/team-1-copyright-370x370.jpg')}}"/>
				<h3>No Choice But to Be a Pioneer: The Story of Margaret Hamilton</h3>
				<p>July 17, 2019 Electronics & Test Aerospace, Government/Defense, Electronics & Test Chris Wiltz<br>You may be familiar with the famous image of Margaret Hamilton standing next to the Apollo Guidance Computer source code. What you may not know is her true importance to the Apollo program and the field of software engineering in general.</p><br>	
				<hr><br>	
				<div class="clearboth"></div>
					<img src="{{URL::asset('public/site_assets/images/team-1-copyright-370x370.jpg')}}"/>
						<h3>Beyond the Right Stuff: Why the First Man on the Moon Had to Be an Engineer</h3>
					<p>July 17, 2019 Electronics & Test Aerospace, Government/Defense, Electronics & Test Chris Wiltz<br>You may be familiar with the famous image of Margaret Hamilton standing next to the Apollo Guidance Computer source code. What you may not know is her true importance to the Apollo program and the field of software engineering in general.</p><br>		
			
				<div class="clearboth"></div>
				<hr><br>	
				<img src="{{URL::asset('public/site_assets/images/team-1-copyright-370x370.jpg')}}"/>
				<h3>Apollo 11: Day Two in Space</h3>
				<p>
					July 17, 2019
					Aerospace
					Aerospace
					Kevin Clemens
					The second day of the Apollo 11 mission saw the spacecraft on course for the moon.
					</p><br>	
				<hr><br>	
				<div class="clearboth"></div>
					
						<img src="{{URL::asset('public/site_assets/images/team-1-copyright-370x370.jpg')}}"/>
						<h3>Nanoemulsion Gels Are New Way to Deliver Drugs Through the Skin</h3>
					<p>
					July 17, 2019
					Materials & Assembly
					Materials, Medical
					Elizabeth Montalbano
					Researchers at MIT have developed a novel way to deliver medication through the skin using nanoemulsions, or mixtures of liquids suspended within each other.
					</p><br>		
				<hr>
				<div class="clearboth"></div>
			</div>
		</div>
	</section>
@endsection