<!DOCTYPE html>
<html>
<head>
	<title>BookFlight</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/assets/style.css') }}">
</head>
<body>
<div class = "box">
<h2>Sign up</h2>
<form id = "form" name = "myform" action = "/flightbookdata" method = "POST">
<div class = "inputBox">
<input type = "text" id = "u_name" name = "uname" value = "{{ session('user') }}" readonly required="">
<label></label>
</div>
<div class = "inputBox">
<input type = "text" id = "pass_word" name = "from" value = "{{ $info->home }}" readonly>
<label></label>
</div>
<div class = "inputBox">
<input type = "text" id = "c_pass" name = "to" value = "{{ $info->away }}" readonly>
<label></label>
</div>
<div class = "inputBox">
<input type = "text" id = "e_mail" name = "rate" value = '{{ $info->rate }}' readonly>
<label></label>
</div>
<div class = "inputBox">
<input type = "date" id = "e_mail" name = "date" value = ''>
<label></label>
</div>
<div class = "inputBox">
<input type = "text" id = "e_mail" name = "time" value = '{{ $info->time }}' readonly>
<label></label>
</div>
<input type = "submit" id = "submit1" name = "sub" onclick = "return chk()"  value = "Submit">
</form>
</div>

</body>
</html>