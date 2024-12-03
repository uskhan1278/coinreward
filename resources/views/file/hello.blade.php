@extends('new')

	@section('n')
        <form method="post" action="{{ route('contact')}}" enctype="multipart/form-data">
        	{{ csrf_field() }}
        	<input type="text" name="name"><br><br>
        	<input type="password" name="password"><br><br>
        	<input type="submit" name="submit"><br><br>
        	
        </form>
        
    @endsection
 