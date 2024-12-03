@extends('layouts.main')
@section('title','Get Help')
@section('content')
	<section id="banner">
		<img src="{{URL::asset('public/site_assets/images/header-bg.png')}}" class="img-fluid">
		<div class="page_text">
			<div class="container">
				<div class="section-title about">
					<h3 class="title" data-aos="fade-right"  data-aos-delay="500">
						Get Help
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
						<h2>Get in Touch</h2>
						<form action="/action_page.php">
							<div class="form-group">						 
							  <input type="text" class="form-control" placeholder="Name" id="usr" name="username">
							</div>
							<div class="form-group">							  
							  <input type="email" class="form-control" placeholder="E-mail" id="mail" name="email">
							</div>
							<div class="form-group">
								<textarea class="form-control" rows="10" placeholder="Message" ></textarea>
							</div>	
							<div class="custom-control custom-checkbox mt-2" >
								<input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
								<label class="custom-control-label" for="customCheck">I agree that my submitted data is being collected and stored.</label>
							</div>
							<button type="submit" class="btn btn-theme mt-3">Send Message</button>
						 </form>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="customer">
						<h4>Customer Support</h4>
						<p class="sc_icons_icon sc_icon_type_ icon-mail"><span> info@example.com</span></p>
						<p class="sc_icons_icon sc_icon_type_ icon-phone"><span> (800) 123-4567</span></p>
						<h4>Stay Connected</h4>
						<p class="sc_icons_icon sc_icon_type_ icon-twitter"><span> Twitter</span></p>
						<p class="sc_icons_icon sc_icon_type_ icon-facebook"><span> Facebook</span></p>
						<p class="sc_icons_icon sc_icon_type_ icon-youtube"><span> YouTube</span></p>
						<p class="sc_icons_icon sc_icon_type_ icon-reddit"><span> Reddit</span></p>
					</div>
				</div>
			</div>	
		</div>
	</section>
	
@endsection