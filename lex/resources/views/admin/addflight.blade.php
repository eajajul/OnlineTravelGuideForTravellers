<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/assets/style.css') }}">
	<title>Add Flight</title>
</head>
<body>
<div class = "box">
<h2>Add Flight</h2>
<a href="{{route('aindex')}}">Back to List</a> 

<h2>Places should be : Dhaka, Chittagong, Syleth, Cox's Bazar</h2>
<form id = "form" name = "addhotelform" action = "/addflight" method = "POST">
    <div class = "inputBox">
    <input type = "text" id = "id" name = "from" value = '' required="">
    <label>From</label>
    </div>
    <div class = "inputBox">
    <input type = "text" id = "name" name = "to" value = '' required="">
    <label>To</label>
    </div>
    <div class = "inputBox">
    <input type = "text" id = "location" name = "rate" value = '' required="">
    <label>Rate</label>
    </div>
    <div class = "inputBox">
    <input type = "text" id = "address" name = "time" value = '' required="">
    <label>Time</label>
    </div>
    <input type = "submit" id = "submit1" name = "sub" onclick = "return chk()"  value = "Add">
</form>
</div>
</body>
</html>