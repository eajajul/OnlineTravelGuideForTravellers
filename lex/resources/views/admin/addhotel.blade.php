<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/assets/style.css') }}">
	<title>Add Hotels</title>
</head>
<body>
<div class = "box">
    <a href="{{route('aindex')}}">Back to List</a> 
<h2>Add Hotels</h2>

<h4 align="center">ID[Dhaka:101, Chittagong:201, Sylhet:301]</h4>
 @if(count($errors)>0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
  @endif
<form id = "form" name = "addhotelform" action = "/addhotel" method = "POST">
    <div class = "inputBox">
    <input type = "text" id = "id" name = "id" value = '' required="">
    <label>ID</label>
    </div>
    <div class = "inputBox">
    <input type = "text" id = "name" name = "name" value = '' required="">
    <label>Name</label>
    </div>
    <div class = "inputBox">
    <input type = "text" id = "location" name = "location" value = '' required="">
    <label>Location</label>
    </div>
    <div class = "inputBox">
    <input type = "text" id = "address" name = "address" value = '' required="">
    <label>Address</label>
    </div>
    <div class = "inputBox">
    <input type = "text" id = "address" name = "rate" value = '' required="">
    <label>Rate</label>
    </div>
    <input type = "submit" id = "submit1" name = "sub" onclick = "return chk()"  value = "Add">
</form>
</div>
</body>
</html>