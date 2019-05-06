<!DOCTYPE html>
<html>
<head>
	<title>All Flights</title>
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
  <a href="{{route('aindex')}}">Back to List</a> 
@foreach($flight as $f)
<h1 align="center">{{ $f->home }} to {{ $f->away }}</h1>
	<table>
		<tr>
    <th>From</th>
    <th>To</th>
    <th>rate</th>
    <th>Time</th>
    </tr>
    <tr>
      	<td>{{ $f->home }}</td>
      	<td>{{ $f->away }}</td>
      	<td>{{ $f->rate }}</td>
      	<td>{{ $f->time }}</td>
      	
      	<td><a href="/delete/flight/{{ $f->id }}">Delete</a></td>
      	</table>
      </tr>
      <br>
	</table>
	@endforeach
</body>
</html>