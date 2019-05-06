<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css\assets\stylehome.css') }}">
	<script type="text/javascript">
		function pass(str){
			if(str.length == 0){
				document.getElementById("searchresult").innerHTML = "";
				return;
			}
			else{
				var x = new XMLHttpRequest();
				x.onreadystatechange = function(){
					if(this.readyState == 4 && this.status == 200){
						document.getElementById("searchresult").innerHTML = this.responseText;
					}
				};
				x.open("GET","searchdb.php?q=" + str,true);
				x.send();
			}
		}
	</script>
</head>
<body>
<header>
	<div class="row">
	<nav>
		<ul class="main-nav">
		    <li>
				<a class ="login" href="/admin_login">Admin</a>
			</li>
			<li class="active">
				<a href="">Home</a>
			</li>
			<li>
				<a href="/about">About</a>
			</li>
			<li>
				<a href="">Services</a>
				<ul>
					<li>
					<a href="/flight">Flight</a>
					<li>
				</ul>
				<ul>
					<li>
					<a href="/hotel">Hotel</a>
					<li>
				</ul>
			</li>
			<li>
				<a href="/contract">Contact</a>
			</li>
			<li>
				<a href="">Make Plan</a>
				<ul>
				<li>
					<a href="/makeplan/group">Group</a>
				</li>
				</ul>
				<ul>
				<li>
					<a href="/makeplan/joingroup">Join a Group</a>
				</li>
				</ul>
			</li>
			<li>
				<a class ="login" href="/login">Login</a>
			</li>
			<li>
				<a class ="login" href="/signup">SignUp</a>
			</li>
			<li>
				
				 <ul>
					<li>

					</li>
				</ul>
			</li>
			<li>
				<h3>
					@if(session('user'))
					{{ session('user') }}
					@endif
				</h3>
				<ul>
					<li>
						<a href="/index">Profile</a>
					</li>
				</ul>
				<ul>
					<li>
						<a href="/logout" onclick="">Logout</a>
					</li>
				</ul>
			</li>
		</ul>
		</nav>
	</div>	
</header>
</body>
<section></section>
</html>