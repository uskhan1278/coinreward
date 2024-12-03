@extends("layouts.main")
@section("title","Profile")
@section("content")
		<section id="banner">
			<img src="{{asset('public/site_assets/images/header-bg2.jpg')}}" class="img-fluid">
		</section>
	<div class="container">
		<section id="profile" class="m-5">
		<div class="container">
		<div class="row">
				<div class="col-lg-3 pt-4"><!--left col-->
				  <div class="text-center">
				  	<form class="form_profile" method="post" enctype="multipart/form-data" action="{{route('edit')}}">
				  		{{ csrf_field() }}
					<img src="@if(!empty($data['profile_image'])){{asset('public/site_assets/images/profile/'.$data['profile_image'])}}@else{{'http://ssl.gstatic.com/accounts/ui/avatar_2x.png'}} @endif" class="avatar rounded-circle img-thumbnail likes" alt="avatar">
					<p>Upload a different photo...</p>
					<input type="file" class="text-center center-block file-upload" name="profile_image" id="profile_image">
					<span style="color:red">{{ $errors->first('profile_image') }}</span>
				  </div></hr><br>
				  <ul class="list-group mb-4">
					<li class="list-group-item text-muted"><h6>Activity </h6><i class="fa fa-dashboard fa-1x"></i></li>
					<li class="list-group-item text-right"><span class="float-left"><h6>Shares</h6></span> 125</li>
					<li class="list-group-item text-right"><span class="float-left"><h6>Likes</h6></span> 13</li>
					<li class="list-group-item text-right"><span class="float-left"><h6>Posts</h6></span> 37</li>
					<li class="list-group-item text-right"><span class="float-left"><h6>Followers</h6></span> 78</li>
				  </ul> 
				</div><!--/col-3-->
			
	
			<div class="col-lg-9">
				@include('flash-message')
					<div class="row">
						<div class="col-lg-6">
							<div class="form-group">
								<input type="hidden" name="id" id="id" value="{{$data['id']}}">
								 <label for="first_name"><p class="mb-0">First name</p></label>
                              <input type="text" class="form-control @if(!empty($errors->first('first_name'))){{'error'}}@endif" name="first_name" id="first_name" placeholder="First name" title="enter your first name if any." value="{{$data['fname']}}">
                              <span style="color:red;">{{ $errors->first('first_name')}}</span>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group">
								 <label for="last_name"><p class="mb-0">Last name</p></label>
                              <input type="text" class="form-control @if(!empty($errors->first('last_name'))){{'error'}}@endif" name="last_name" id="last_name" placeholder="Last name" title="enter your last name if any." value="{{$data['lname']}}">
                              <span style="color:red;">{{ $errors->first('last_name')}}</span>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<div class="form-group">
								  <label for="phone"><p class="mb-0">Phone number</p></label>
                              <input type="text" class="form-control @if(!empty($errors->first('phone_number'))){{'error'}}@endif" name="phone_number" id="phone_number" placeholder="Enter phone number" title="enter your phone number if any." value="{{$data['phone']}}">
                              <span style="color:red;">{{ $errors->first('phone_number')}}</span>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group">
								  <label for="mobile"><p class="mb-0">Mobile number</p></label>
                              <input type="text" class="form-control @if(!empty($errors->first('mobile_number'))){{'error'}}@endif" name="mobile_number" id="mobile_number" placeholder="Enter mobile number" title="enter your mobile number if any." value="{{$data['mobile']}}">
                              <span style="color:red;">{{ $errors->first('mobile_number')}}</span>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<div class="form-group">
								   <label for="email"><p class="mb-0">Email</p></label>
                              <input type="email" class="form-control @if(!empty($errors->first('email'))){{'error'}}@endif" name="email" id="email" placeholder="you@email.com" title="enter your email." value="{{$data['email']}}">
                              <span style="color:red;">{{ $errors->first('email')}}</span>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group">
								   <label for="email"><p class="mb-0">Location</p></label>
                              <input type="text" class="form-control" name="location" id="location" placeholder="Somewhere" title="enter a location" value="{{$data['location']}}">
							</div>
						</div>
					</div>
					
					<div class="row">
						 <div class="col-lg-12">
                            <button class="btn btn-theme" type="submit" name="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                            <button class="btn btn-theme ml-3" type="reset" name="reset" value="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                         </div>
					</div>
					
				</form>
			</div>
				
		</div>
		</section>
	</div>
@endsection