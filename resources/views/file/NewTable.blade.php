@extends('NewView')

	@section('nf')
		<table border="2">
			<tr>
				<th>name</th>
				<th>email</th>
				<th colspan="2">action</th>
			</tr>
			@foreach($data as $fetch)
				<tr>
					<td>{{$fetch->name}}</td>
					<td>{{$fetch->email}}</td>
					<td><a href="/laravel_first/public/edit/{{$fetch->id}}">Edit</a></td>
					<td><a href="/laravel_first/public/delete/{{$fetch->id}}">Delete</a></td>
				</tr>
			@endforeach
		</table>
	@endsection