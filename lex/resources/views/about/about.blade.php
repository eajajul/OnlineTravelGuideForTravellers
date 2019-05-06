<!DOCTYPE html>
<html>
<head>
	<title>about</title>
	<style type="">
			<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
	</style>
</head>
<body>
<h1 align="center"><b>About</b></h1>
<table>
	<tr>
		<td>
			@foreach($infos as $info)
            {{ $info }}
            @endforeach
            <br>
		</td>
	</tr>
</table>
<h1 align="center"><a href="/about/edit">Edit</a></h1>
</body>
</html>