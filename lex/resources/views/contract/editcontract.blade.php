<!DOCTYPE html>
<html>
<head>
	<title>Edit Contarct</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/assets/style.css') }}">
</head>
<body>
<div class = "box">
<h2>Add Contract</h2>
<form id = "form" name = "myform" action = "/edit" method = "POST">
<div class = "inputBox">
<input type = "text" id = "f_name" name = "name" value = '{{ $name }}' required="" readonly="">
<label>Name</label>
</div>
<div class = "inputBox">
<input type = "text" id = "u_name" name = "position" value = '' required="">
<label>Position</label>
</div>
<div class = "inputBox">
<input type = "text" id = "pass_word" name = "number" value = '' required="">
<label>Number</label>
</div>
<div class = "inputBox">
<input type = "text" id = "e_mail" name = "email" value = '' required="">
<label>Email</label>
</div>
<input type = "submit" id = "submit1" name = "sub" onclick = "return chk()"  value = "Submit">
</form>
</div>

</body>
</html>