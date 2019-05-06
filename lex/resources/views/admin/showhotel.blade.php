<!DOCTYPE html>
<html>
<head>
	<title>All Hotels</title>
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
@foreach($hotel as $h)
<h1 align="center">{{ $h->name }} , {{ $h->location }}</h1>
	<table>
		<tr>
    <th>ID</th>
    <th>Location</th>
    <th>Address</th>
    <th>Rate</th>
    </tr>
    <tr>
      	<td>{{ $h->id }}</td>
      	<td>{{ $h->location }}</td>
      	<td>{{ $h->address }}</td>
      	<td>{{ $h->rate }}</td>
      	<td><a href="/edit/hotel/{{ $h->name }}">Edit</a></td>
      	<td><a href="/delete/hotel/{{ $h->name }}">Delete</a></td>
      	</table>
      </tr>
      <br>
	</table>
	@endforeach
</body>
</html>