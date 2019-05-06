<!DOCTYPE html>
<html>
<head>
	<title>Data</title>
</head>
<body>
<form action="/index" method="post" enctype="multipart/form-data">
	Select your profile Picture
	<br>
	<input type="file" name="fileupload">
	<br>
	<input type="submit" name="submit" value="Add">
</form>	
<h1 align="center">Welcome {{ session('user') }}</h1>
<h1 align="center"><b><a href="/hotel">Hotel Booking</a></b></h1>
<h1 align="center"><b><a href="/hotelhistory">Hotel Booking History</a></b></h1>
<h1 align="center"><b><a href="/flight">Flight Booking</a></b></h1>
<h1 align="center"><b><a href="/flighthistory">Flight Booking History</a></b></h1>
<h1 align="center"><b><a href="/makeplan/group">Make Group</a></b></h1>
<h1 align="center"><b><a href="/makeplan/joingroup">Join a Group</a></b></h1>
<h1 align="center"><b><a href="/userProfile/update">Update Profile</a></b></h1>
<h1 align="center"><b><a href="/makeplan/history">MakePlan History</a></b></h1>
<h1 align="center"><b><a href="/">Home</a></b></h1>
<h1 align="center"><b><a href="/logout">Logout</a></b></h1>
</body>
</html>