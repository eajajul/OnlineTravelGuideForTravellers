<!DOCTYPE html>
<html>
<head>
	<title>Hotel History</title>
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
	@foreach($hotel as $h)
	<h1 align="center"><b>{{ $h->hotel }}</b></h1>
	<table>
	<tr>
    <th>Username</th>
    <th>Hotel</th>
    <th>Rate</th>
    <th>Date</th>
    <th>Email</th>
    </tr>
      <tr>
      	<td>{{ $h->username }}</td>
      	<td>{{ $h->hotel }}</td>
      	<td>{{ $h->rate }}</td>
      	<td>{{ $h->date }}</td>
      	<td>{{ $h->email }}</td>
      	
        <td><a href="/delete/hotelinfo/{{ $h->id }}">Delete</a></td>
      </tr>
      <br>
</table>
@endforeach
</body>
</html>