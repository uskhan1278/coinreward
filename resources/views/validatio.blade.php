<script type="text/javascript">
	$('document').ready(function(){

		var $error=[];
		//Validation of Username



		$('#username').blur(function(){
			var username = $('#username').val();
			var _token = $('input[name="_token"]').val();

			if(username == "")
			{
				$('#username_error').text("Field is required").attr("style","color:red");
				$('#username').addClass('error');
				$('#username').removeClass("success");
			}
			else
			{

				$.ajax({
					url : "{{route('validation')}}",
					method : "POST",
					data : { username : username, _token : _token },
					success : function(data)
					{
						if(data != "unique_username")
						{
							$('#username').removeClass('success');
							$('#username').addClass('error');
							$('#username_error').text("Username is already taken").attr("style","color:red");
						}
						else
						{
							$('#username').removeClass('error');
							$('#username').addClass('success');
							$('#username_error').text("");
							$error[0]=null;
							$error[1]=null;
						}
					}
				});
			}
		});




		//Validation of Email



		$('#email').on("blur",function(){
			var email = $('#email').val();
			var _token = $('input[name="_token"]').val();
			var filter = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
			if(email == ""){
				$('#email').removeClass('success');
				$('#email_error').text('Field is required').attr('style','color:red');
				$('#email').addClass('error');
			}
			else{
				if(!filter.test(email))
				{
					$('#email').removeClass('success');
					$('#email_error').text('Email is not valid').attr('style','color:red');
					$('#email').addClass('error');
				}
				else{
					$.ajax({
						url: "{{route('validation')}}",
						method: "POST",
						data: {email : email, _token : _token},
						success : function(result)
						{
							if(result != 'unique')
							{
								$('#email').removeClass('success');
								$('#email_error').text("Email is already taken").attr('style','color:red');
								$('#email').addClass('error');
							}
							else
							{
								$('#email').removeClass('error');
								$('#email_error').text("");
								$('#email').addClass('success');
							}
						}
					});
					
				}
			}
		});

		if($error == null)
		{
			$('#submit').removeAttr('disabled');
		}
	});
</script> 

