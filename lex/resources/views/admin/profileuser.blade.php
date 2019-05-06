<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
</head>
<body>
	<a href="{{route('aindex')}}">Back to List</a> 

	ID: {{ $profile->id }}<br>
	Name: {{ $profile->name }}<br>
	User Name: {{ $profile->uname }}<br>
	Email: {{ $profile->email }}<br>
  
	
   
</body>
</html>