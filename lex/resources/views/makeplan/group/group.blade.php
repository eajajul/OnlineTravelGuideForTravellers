<!DOCTYPE html>
<html>
<head>
	<title>MakeGroup</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/assets/style.css') }}">
</head>
<body>
<div class = "box">
<h2>Make My Group</h2>
<form id = "form" name = "myform" action = "/addgroup" method = "POST">
<div class = "inputBox">
<input type = "text" id = "f_name" name = "uname" value = "{{ session('user')}}" required="" readonly="">
<label></label>
</div>
<div class = "inputBox">
<input type = "text" id = "u_name" name = "member" value = '' required="">
<label>Number Of Member(Max:4)</label>
</div>
<div class = "inputBox">
<input type = "text" id = "u_name" name = "firstmember" value = ''>
<label>First Member Name</label>
</div>
<div class = "inputBox">
<input type = "text" id = "u_name" name = "secondmember" value = ''>
<label>Second Member Name</label>
</div>
<div class = "inputBox">
<input type = "text" id = "u_name" name = "thirdmember" value = ''>
<label>Third Member Name</label>
</div>
<div class = "inputBox">
<input type = "text" id = "u_name" name = "fourthmember" value = ''>
<label>Fourth Member Name</label>
</div>
<div class = "inputBox">
<input type = "text" id = "e_mail" name = "day" value = '' required="">
<label>Days</label>
</div>
<div class = "inputBox">
	<select name="place">
  <option value="Dhaka">Dhaka</option>
  <option value="Chittagang">Chittagang</option>
  <option value="Sylhet">Sylhet</option>
  <option value="Cox's Bazar">Cox's Bazar</option>
</select>
<label></label>
</div>
<div class = "inputBox">
<input type = "date" id = "pass_word" name = "date" value = '' required="">
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