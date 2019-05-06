<!DOCTYPE html>
<html>
<head>
	<title>AboutEdit</title>
	<style type="text/css">
		.inputBox input[type="submit"]{
			align-items: left;
	background: transparent;
	border: none;
	outline: none;
	color: #fff;
	background: #03a9f4;
	padding: 20px 30px;
	
	border-radius: 10px;
}
	</style>
</head>
<body>
<form method="post" action="/about/edit">
	<div class="inputBox">
    <textarea rows="30" cols="100" name="about">
    	@foreach($infos as $info)
    	{{ $info }}
    	@endforeach
    </textarea>
    <input type="submit" name="" value="EDIT">
    </div>
</form>
</body>
</html>