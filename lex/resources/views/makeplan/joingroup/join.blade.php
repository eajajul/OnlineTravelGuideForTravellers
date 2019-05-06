
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Join</title>
	<link rel="stylesheet" href="{{ asset('css/assets/style.css') }}">
</head>
<body>
     <div class="box">
           <h2>Join</h2>

           <h3 class="error">
           </h3>
           <form method="POST" action="/makeplan/joingroup/join/{{$id}}">
           	   <div class="inputBox">
           	   	<input type="text" name="joinname" value="" required="">
           	   	<label>Joiner Name</label>
           	   </div> 
           	   	<input type="submit" name="" value="Join">
           </form>
     </div>
</body>
</html>