<html>
@section('content')
    <head>
<title>first</title>
<body>
{{form::open(array('url'=>'index1','method'='post')) }}
<table border="5">
<tr>
<td>Name</td>
<tr><td><input type="text" /></td></tr>
<tr><td>Email</td>
<tr><td><input type="text" /></td></tr>
<tr><td>mobile</td>
<tr><td><input type="text" /></td></tr>
<tr><td>Password</td>
<tr><td><input type="text" /></td></tr>
<tr><td><input type="submit" value="insert" />
<input type="submit" value="update" />
<input type="submit" value="Delete" /></td></tr>
</tr>
</table>
{{form::close()}}@stop
</body>
</head>
</html>