<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>

<form method="post" >
		<!--
			1. @csrf
			2. {{@csrf_field()}} 
		-->

		<input type="hidden" name="_token" value="{{ csrf_token() }}">

		Username: <input type="text" name="username"><br>
		Password: <input type="password" name="password"><br>
		<input type="submit" name="submit" value="Submit">
	</form>
    
</body>
</html>