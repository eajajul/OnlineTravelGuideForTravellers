<!DOCTYPE html>
<html>
<head>
	<title>Makeplan History</title>
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

@foreach($history as $his)
<table>
      <h1 align="center">TourPlace: {{ $his->place }}</h1>
      <tr>
    <th>Username</th>
    <th>Number Of Member</th>
    <th>First Member</th>
    <th>Second Member</th>
    <th>Third Member</th>
    <th>Fourth Member</th>
    <th>Days</th>
    <th>Place</th>
    <th>Date</th>
    <th>Email</th>
    </tr>
      <tr>
      	<td>{{ $his->username }}</td>
      	<td>{{ $his->member }}</td>
      	<td> {{ $his->firstmember }}</td>
      	<td>{{ $his->secondmember }}</td>
      	<td>{{ $his->thirdmember }}</td>
      	<td>{{ $his->fourthmember }}</td>
      	<td>{{ $his->days }}</td>
        <td>{{ $his->place }}</td>
      	<td>{{ $his->date }}</td>
      	<td>{{ $his->email }}</td>
      	<td><a href="">Edit</a></td>
      	</table>
      </tr>
      <br>
@endforeach
</body>
</html>