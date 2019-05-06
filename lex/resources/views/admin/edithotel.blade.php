<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/assets/style.css') }}">
	<title>Edit Hotels</title>
</head>
<body>
<div class = "box">
    <a href="{{route('aindex')}}">Back to List</a> 
<h2>Edit Hotels</h2>
<h4 align="center">ID[Dhaka:101, Chittagong:201, Sylhet:301]</h4>
<form id = "form" name = "addhotelform" action = "/edit/hotel/{{ $hotel->name }}" method = "POST">
    <div class = "inputBox">
    <input type = "text" id = "id" name = "id" value = '{{ $hotel->id }}' required="" readonly="">
    <label></label>
    </div>
    <div class = "inputBox">
    <input type = "text" id = "name" name = "name" value = '{{ $hotel->name }}' required="" readonly="">
    <label></label>
    </div>
    <div class = "inputBox">
    <input type = "text" id = "location" name = "location" value = '{{ $hotel->location }}' required="" readonly="">
    <label></label>
    </div>
    <div class = "inputBox">
    <input type = "text" id = "address" name = "address" value = '' required="">
    <label>Address</label>
    </div>
    <div class = "inputBox">
    <input type = "text" id = "address" name = "rate" value = '' required="">
    <label>Rate</label>
    </div>
    <input type = "submit" id = "submit1" name = "sub" onclick = "return chk()"  value = "Edit">
</form>
</div>
</body>
</html>