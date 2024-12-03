@extends('NewView')

	@section('nf')
		
		<form action="@if(isset($e)){{ route('update') }}@else{{ route('insertdata') }}@endif" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}
			<input type="hidden" name="id" value="@if(isset($e)){{$e->id}}@endif">
			<input type="text" name="name" value="@if(isset($e)){{$e->name}}@endif"><br><br>
			<input type="email" name="email" value="@if(isset($e)){{$e->email}}@endif"><br><br>
			<input type="password" name="password" value="@if(isset($e)){{$e->password}}@endif"><br><br>
			<input type="submit" name="submit" value="@if(isset($e)){{'update'}}@else{{'submit'}}@endif">
		</form>

	@endsection