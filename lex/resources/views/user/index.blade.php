
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet" href="{{ asset('css/assets/style.css') }}">
</head>
<body>
     <div class="box">
           <h2>LOGIN</h2>

           <h3 class="error">
           </h3>
           <form method="POST" action="/index">
              @if (count($errors) > 0)
                <div class = "alert alert-danger">
                  <ul>
                    @foreach ($errors->all() as $error)
                     <li><span style="color:red"> {{ $error }} </span></li>
                    @endforeach
                  </ul>
                </div>
              @endif

              

           	   <div class="inputBox">
           	   	<input type="text" name="username" value="">
           	   	<label>Username</label>
           	   </div>
           	   <div class="inputBox">
           	   	<input type="password" name="password" value="">
           	   	<label>Password</label>
               </div> 
                <input type="checkbox" checked="checked" name="remember" > Remember Me
                <br>
           	   	<input type="submit" name="" value="Login">
                <a class="signup" href="/signup">Sign Up</a></div>
           </form>
     </div>
</body>
</html>