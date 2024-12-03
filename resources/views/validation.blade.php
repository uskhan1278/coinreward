<script type="text/javascript">
	$('document').ready(function(){

		$('#submit').click(function(e){
			e.preventDefault();
			var username = $('#username').val();
			var email = $('#email').val();
			var password = $('#password').val();
			var fname = $('#fname').val();
			var lname = $('#lname').val();
			var _token = $('input[name="_token"]').val();

			$.ajax({
				url : "{{route('validation')}}",
				method : "post",
				data : {username : username, _token : _token, email : email, password : password, fname : fname, lname : lname},
				success : function(data)
				{
					alert(data);
				}
			});
		});
	});
</script> 