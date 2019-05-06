<!DOCTYPE html>
<html>
<head>
	<title>Flights</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/assets/style.css') }}">
</head>
<body>
<div class = "box">
<h2>Check Flight</h2>
<form id = "form" name = "myform" action = "/flight" method = "POST">
<h1 color='white'><b>FROM : </b></h1>
<div class = "inputBox">
	<select name="from">
  <option value="Dhaka">Dhaka</option>
  <option value="Chittagong">Chittagong</option>
  <option value="Syleth">Sylhet</option>
  <option value="Cox's Bazar">Cox's Bazar</option>
</select>
<label></label>
</div>
<h1><b>TO : </b></h1>
<div class = "inputBox">
	<select name="to">
  <option value="Dhaka">Dhaka</option>
  <option value="Chittagong">Chittagong</option>
  <option value="Syleth">Sylhet</option>
  <option value="Cox's Bazar">Cox's Bazar</option>
</select>
<label></label>
</div>
<input type = "submit" id = "submit1" name = "sub" onclick = "return chk()"  value = "Submit">
</form>
</div>

</body>
</html>