
<!DOCTYPE html>
<html lang="en">
    <head> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
		<!------ Include the above in your HEAD tag ---------->

		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
		<title>Admin-login</title>
	</head>
	<body>
<div class="container">
		<br>  
		<hr>

		<div class="row">
			<aside class="col-sm-4">
			
				<div class="card">
				<article class="card-body">
				<a href="{{url('/register')}}" class="float-right btn btn-outline-primary">Sign up</a>
				<h4 class="card-title mb-4 mt-1">Sign in</h4>
                                {!! Form::open(array('url' => '/login','enctype'=>'multipart/form-data','role'=>'form','method'=>'post'))!!}
                                    <input type="hidden"  name="_token"  value="{{csrf_token()}}"/>
					<div class="form-group">
						<label>Your email</label>
						<input name="enail" class="form-control" placeholder="Email" type="email">
					</div> <!-- form-group// -->
					<div class="form-group">
						<a class="float-right" href="#">Forgot?</a>
						<label>Your password</label>
                                                <input  name="password" class="form-control" placeholder="******" type="password">
					</div> <!-- form-group// --> 
					<div class="form-group"> 
					<div class="checkbox">
					  <label> <input type="checkbox"> Save password </label>
					</div> <!-- checkbox .// -->
					</div> <!-- form-group// -->  
					<div class="form-group">
                                            <input type="submit" class="btn btn-primary btn-block" value="Login" />
					</div> <!-- form-group// -->                                                           
                                        {!! form::close !!}
				</article>
				</div> <!-- card.// -->

					</aside> <!-- col.// -->
					
				</div> 
				</div> 
				<!--container end.//-->


	</body>
</html>