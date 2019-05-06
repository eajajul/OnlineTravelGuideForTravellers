<html>
<head>
<script>
</script>
<link rel="stylesheet" type="text/css" href="{{ asset('css/assets/style.css') }}">
</head>
<div class = "box">
<h2>Sign up</h2>
@if(count($errors)>0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
  @endif
<form id = "form" name = "myform" action = "/userProfile/update" method = "POST">
<div class = "inputBox">
<input type = "text" id = "f_name" name = "name" value = '' required="">
<label>Name</label>
</div>
<div class = "inputBox">
<input type = "text" id = "u_name" name = "uname" value = '{{ session("user") }}' required="" readonly="">
<label></label>
</div>
<div class = "inputBox">
<input type = "password" id = "pass_word" name = "pass" value = '' required="">
<label>Password</label>
</div>
<div class = "inputBox">
<input type = "password" id = "c_pass" name = "cpass" value = '' required="">
<label>Confirm Password</label>
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