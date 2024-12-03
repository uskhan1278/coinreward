<script type="text/javascript">
	$('document').ready(function(){
		$('#submit').click(function(e){
			e.preventDefault();
			var email = $('#email').val();
			var password = $('#password').val();
			var _token = $('input[name="_token"]').val();
			
			$.ajax({
				url : '{{route("logincheck")}}',
				method : "post",
				data : {email : email, password : password, _token : _token},
				success : function(data)
				{
					alert('hello');
				}
			});
		});
	});
</script>