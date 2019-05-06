<!DOCTYPE html>
<html>
<head>
	<title>Flight History</title>
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
</head>
<body>
	@foreach($flight as $f)
	<h1 align="center"><b>Flight : {{ $f->home }} to {{ $f->away}}</b></h1>
	<table>
		<tr>
    <th>Username</th>
    <th>From</th>
    <th>To</th>
    <th>Rate</th>
    <th>Date</th>
    <th>Time</th>
    </tr>
    <tr>
      	<td>{{ $f->username }}</td>
      	<td>{{ $f->home }}</td>
      	<td>{{ $f->away }}</td>
      	<td>{{ $f->rate }}</td>
      	<td>{{ $f->date }}</td>
      	<td>{{ $f->time }}</td>
      	<td><a href="/delete/flightinfo/{{ $f->id }}">Delete</a></td>
      	</table>
      </tr>
      <br>
	</table>
	@endforeach
</body>
</html>