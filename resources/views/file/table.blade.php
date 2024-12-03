<!DOCTYPE html>
<html>
<head>
	<title>table</title>
	<style>
	table {
	  border-collapse: collapse;
	  border-spacing: 0;
	  width: 100%;
	  border: 1px solid #ddd;
	}

	th, td {
	  text-align: left;
	  padding: 8px;
	}

tr:nth-child(even){background-color: #f2f2f2}
</style>
</head>
<body>
	<table border=2>
		<tr>
			<th>Name</th>
			<th>Email</th>
			<th>Date</th>
			<th>Country</th>
			<th>Gender</th>
			<th>Meal</th>
			<th colspan="2">Action</th>
		</tr>
		@foreach($t as $v)	
		<tr>
			<td>  {{$v->name}}    </td>
			<td>  {{$v->email}}   </td>
			<td>  {{$v->date}}    </td>
			<td>  {{$v->country}} </td>
			<td>  {{$v->gender}}  </td>
			<td>  {{$v->meal}}    </td>
			<td><a href="/laravel_first/public/editc/{{$v->id}}">Edit</a></td>
			<td><a href="/laravel_first/public/deletec/{{$v->id}}">Delete</a></td>
		</tr>
		@endforeach
	</table>
</body>
</html>