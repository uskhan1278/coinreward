<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<style>
		body {
    		background-color: #eee;
		}

		*[role="form"] {
		    max-width: 530px;
		    padding: 15px;
		    margin: 0 auto;
		    background-color: #fff;
		    border-radius: 0.3em;
		}

		*[role="form"] h2 {
		    margin-left: 5em;
		    margin-bottom: 1em;
		}

	</style>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
            <form class="form-horizontal" role="form" action="@if(isset($data)){{route('tupdate')}}@else{{route('insert')}}@endif" method="post" enctype="multipart/form-data">
                <h2>Registration Form</h2>
                {{ csrf_field() }}
                <input type="hidden" name="id" value="@if(isset($data)){{$data->id}}@endif">


		        @if ($message = Session::get('success'))
		        <div class="alert alert-success alert-block">
		            <button type="button" class="close" data-dismiss="alert">×</button> 
		                <strong>{{ $message }}</strong>
		        </div>
		        @endif  

                <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label">Full Name</label>
                    <div class="col-sm-9">
                        <input type="text" name="name" id="firstName" value="@if(isset($data)){{$data->name}}@endif" placeholder="Full Name" class="form-control" autofocus>
                        <span class="help-block">Last Name, First Name, eg.: Smith, Harry</span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-9">
                        <input type="email" name="email" value="@if(isset($data)){{$data->email}}@endif" id="email" placeholder="Email" class="form-control">
                    </div>
                </div>
                <?php if(!isset($data)){?>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password</label>
                    <div class="col-sm-9">
                        <input type="password" name="password" @if(isset($data)){{'disabled'}}@endif id="password" placeholder="Password" class="form-control" >
                    </div>
                </div>
                <?php }?>
                <div class="form-group">
                    <label for="birthDate" class="col-sm-3 control-label">Date of Birth</label>
                    <div class="col-sm-9">
                        <input type="date" name="date" value="@if(isset($data)){{$data->date}}@endif" id="birthDate" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="country" class="col-sm-3 control-label">Country</label>
                    <div class="col-sm-9">
                        <select name="country" id="country" class="form-control">
                            <option @if(isset($data) && $data['country'] == "India"){{'selected'}}@endif>India</option>
                            <option @if(isset($data) && $data['country'] == "Afghanistan"){{'selected'}}@endif>Afghanistan</option>
                            <option @if(isset($data) && $data['country'] == "Bahamas"){{'selected'}}@endif>Bahamas</option>
                            <option @if(isset($data) && $data['country'] == "Cambodia"){{'selected'}}@endif>Cambodia</option>
                            <option @if(isset($data) && $data['country'] == "Denmark"){{'selected'}}@endif>Denmark</option>
                            <option @if(isset($data) && $data['country'] == "Ecuador"){{'selected'}}@endif>Ecuador</option>
                            <option @if(isset($data) && $data['country'] == "Fiji"){{'selected'}}@endif>Fiji</option>
                            <option @if(isset($data) && $data['country'] == "Gabon"){{'selected'}}@endif>Gabon</option>
                            <option @if(isset($data) && $data['country'] == "Haiti"){{'selected'}}@endif>Haiti</option>
                        </select>
                    </div>
                </div> <!-- /.form-group -->
                <div class="form-group">
                    <label class="control-label col-sm-3">Gender</label>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="radio-inline">
                  					<input type="radio" name="gender" @if(isset($data) && $data['gender'] == "Female"){{"checked"}}@endif id="femaleRadio" value="Female">Female
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" name="gender" @if(isset($data) && $data['gender'] == "Male"){{"checked"}}@endif id="maleRadio" value="Male">Male
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" name="gender" @if(isset($data) && $data['gender'] == "Unknown"){{"checked"}}@endif id="uncknownRadio" value="Unknown">Unknown
                                </label>
                            </div>
                        </div>
                    </div>
                </div> <!-- /.form-group -->
                <div class="form-group">
                    <label class="control-label col-sm-3">Meal Preference</label>
                    <div class="col-sm-9">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="meal[]" @if(isset($data) && in_array("Low calorie",explode(',',$data['meal']))){{"checked"}}@endif id="calorieCheckbox" value="Low calorie">Low calorie
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" @if(isset($data) && in_array("Low salt",explode(',',$data['meal']))){{"checked"}}@endif name="meal[]" id="saltCheckbox" value="Low salt">Low salt
                            </label>
                        </div>
                    </div>
                </div> <!-- /.form-group -->
                <?php if(!isset($data)){?>
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="agree" >I accept <a href="#">terms</a>
                            </label>
                        </div>
                    </div>
                </div> <!-- /.form-group -->
                <?php }?>
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <input type="submit" value="@if(isset($data)){{'update'}}@else{{'submit'}}@endif" class="btn btn-primary btn-block">
                    </div>
                </div>
            </form> <!-- /form -->
        </div> <!-- ./container -->
</body>
</html>