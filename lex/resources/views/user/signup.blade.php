<html>
<head>
<script>
/*function chk(){
	var flag = true;
	var fname = document.myform.fname.value.length;
	if(fname == 0){
		alert("Fill the First Name");
		flag = false;
	}
    var lname = document.myform.lname.value.length;
	if(lname == 0){
		alert("Fill the Last Name");
		flag = false;
	}
	/*
	var uname = document.myform.uname.value.length;
	if(fname != uname || lname != uname){
		alert("The User Name must be First name or Last name");
		flag = false;
	}*/
    /*var pass = document.myform.pass.value.length;
    if(pass == 0 || pass < 8){
		alert("Password field is Null or Atleast 8 number or digit");
		flag = false;
	}
	var pass1 = document.myform.pass.value;
	var cpass = document.myform.cpass.value;
    if(pass1 != cpass){
		alert("Password is not matched");
		flag = false;
	}
	
	var phone = document.myform.pnum.value.length;
	var phone1 = document.myform.pnum.value;
	if(phone1.indexOf("+") || phone == 0 || phone < 11){
		alert("Number is Blank or Must input Eleven Digits or Must use (+) sign first");
		flag = false;
	}
	
	var email = document.myform.email.value.length;
	var email1 = document.myform.email.value;
	if(email == 0 || email1.indexOf("@")<1 || email1.indexOf(".")<1 || email1.LastindexOf(".")<email1.indexOf("@")){
		alert("The Email is Blank or Invalid Email");
		flag = false;
	}
	return flag;

}*/
</script>
@if(count($errors)>0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
  @endif
<link rel="stylesheet" type="text/css" href="{{ asset('css/assets/style.css') }}">
</head>
<div class = "box">
<h2>Sign up</h2>
<form id = "form" name = "myform" action = "/signup" method = "POST">
<div class = "inputBox">
<input type = "text" id = "f_name" name = "name" value = '' required="">
<label>Name</label>
</div>
<div class = "inputBox">
<input type = "text" id = "u_name" name = "uname" value = '' required="">
<label>Username</label>
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