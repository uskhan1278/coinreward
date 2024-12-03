@extends('layouts.main')
@section('title','Login')
@section('content')
	<section id="banner">
		<img src="{{URL::asset('public/site_assets/images/m1.png')}}" class="img-fluid">
		<div class="page_text">
			<div class="container">
				<div class="section-title about">
					<h3 class="title" data-aos="fade-right"  data-aos-delay="500">
						Login
					</h3>

				</div>					
			</div>
		</div>
	</section>
	<!-- Intro Section -->
	
	<section id="login">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<div class="login_page">
						<form action="{{route('logincheck')}}" method="post">
							@include('flash-message')
							{{ csrf_field() }}
							<div class="form-group">
								<label>Enter your Email</label>
								<input type="text" class="form-control fome_career @if(!empty($errors->first('email'))){{'error'}}@endif" id="email" name="email">
								<span style="color:red">{{ $errors->first('email') }}</span>
							</div>
							<div class="form-group">
								<label>Enter your password</label>
								<input type="password" class="form-control fome_career @if(!empty($errors->first('password'))){{'error'}}@endif" id="password" name="password">
								<span style="color:red">{{ $errors->first('password') }}</span>
							</div>
							<div class="form-group form-check"> 
								<input class="form-check-input fome_career" type="checkbox" name="remember"> Remember me  
							</div>
						  <p><a href="#">Forgot username or password?</a></p>
						  <input type="submit" name="submit" class="btn btn_login" id="submit">
						  </form>
						  <div class="or-divider">
							 <div class="or-bubble">
								or
							 </div>
						  </div>
						  <p>Log in with your Office 365, LinkedIn, Facebook, or Google Account</p>
						    <div class="third-party">
								<div class="social-sign-up-container">
									<p class="social-sign-up">
										<a id="hlGoogle" class="social-sign-up-btn google-btn wds-button wds-button--ghost-filled wds-button--md wds-button--stretch" href="/user/third-party/?action=sign_in&amp;third_party=google&amp;sm=l_2FcLDHQV05NapQd5zV4ONQ_3D_3D">
											GOOGLE
										</a>
									</p>
								</div>
								<div class="social-sign-up-container">
									<p class="social-sign-up">
										<a id="hlFacebook" class="social-sign-up-btn facebook-btn wds-button wds-button--ghost-filled wds-button--md wds-button--stretch" href="/user/third-party/?action=sign_in&amp;third_party=facebook&amp;sm=l_2FcLDHQV05NapQd5zV4ONQ_3D_3D">
											FACEBOOK
										</a>
									</p>
								</div>
								<div class="social-sign-up-container">
									<p class="social-sign-up">
										<a id="hlMicrosoft" class="social-sign-up-btn microsoft-btn wds-button wds-button--ghost-filled wds-button--md wds-button--stretch" href="/user/third-party/?action=sign_in&amp;third_party=microsoft&amp;sm=l_2FcLDHQV05NapQd5zV4ONQ_3D_3D">
											OFFICE 365
										</a>
									</p>
								</div>
								<div class="social-sign-up-container">
									<p class="social-sign-up">
										<a id="hlLinkedin" class="social-sign-up-btn linkedin-btn wds-button wds-button--ghost-filled wds-button--md wds-button--stretch" href="/user/third-party/?action=sign_in&amp;third_party=linkedin&amp;sm=l_2FcLDHQV05NapQd5zV4ONQ_3D_3D">
											LINKEDIN
										</a>
									</p>
								</div>
							</div>
					</div>
				</div>
				<div class="col-lg-6 text-lg-right text-center">
					<a href="{{route('register')}}" class="btn btn-theme">Sign Up</a>
					<img src="{{URL::asset('public/site_assets/images/x1.png')}}" class="w-100"/>
				</div>
			</div>	
		</div>
	</section>
@endsection