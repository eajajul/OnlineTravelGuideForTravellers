<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<a href="{{route('aindex')}}">Back to List</a> 
	<h1 align="center"><b>Here is the Local User</b></h1>
	@foreach($users as $user)
	     <h1 align="center"><b>{{ $user }}</b></h1>
	     <h1 align="center"><a href="{{ url('profile', $user)}}">Profile</a></h1>
	     <h1 align="center"><a href="{{ url('delete', $user)}}">Delete</a><h1>
	     <br>
	@endforeach
	<br>
</body>
</html>