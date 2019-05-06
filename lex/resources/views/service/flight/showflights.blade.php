<!DOCTYPE html>
<html>
<head>
	<title>Flights</title>
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
	<h1 align="center"><b>Flights</b></h1>

	<table>
	<tr>
    <th>From</th>
    <th>To</th>
    <th>Rate</th>
    <th>Time</th>
    <th>****</th>
    </tr>
@foreach($flight as $f)
      <tr>
      	<td>{{ $f->home }}</td>
      	<td>{{ $f->away }}</td>
      	<td>{{ $f->rate }}</td>
      	<td>{{ $f->time }}</td>
      	<td><a href="{{ url('/flight/'.$f->home.'/'.$f->away.'') }}">Booking</a></td>
      </tr>
      <br>
@endforeach
</table>
</body>
</html>