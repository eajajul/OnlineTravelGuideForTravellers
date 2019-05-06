<!DOCTYPE html>
<html>
<head>
	<title>BookFlight</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/assets/style.css') }}">
</head>
<body>
<div class = "box">
<h2>Hotel Booking</h2>
<form id = "form" name = "myform" action = "/hotelbookdata" method = "POST">
<div class = "inputBox">
<input type = "text" id = "u_name" name = "uname" value = '{{ session("user") }}' readonly="" required="">
<label></label>
</div>
<div class = "inputBox">
<input type = text id = "pass_word" name = "hotelname" value = '{{ $info->name }}' readonly="" required="">
<label></label>
</div>
<div class = "inputBox">
<input type = "text" id = "c_pass" name = "rate" value = '{{ $info->rate }}' readonly="" required="">
<label></label>
</div>
<div class = "inputBox">
<input type = "date" id = "e_mail" name = "date" value = '' required="">
<label></label>
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