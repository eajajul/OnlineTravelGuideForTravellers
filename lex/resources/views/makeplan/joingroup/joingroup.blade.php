<!DOCTYPE html>
<html>
<head>
	<title>Join Group</title>
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
  <h1 align="center"><b>Join a Group</b></h1>
@foreach($group as $his)
@if($his->firstmember=='' || $his->secondmember=='' || $his->thirdmember=='' || $his->fourthmember=='')
<table>
      <h1 align="center">TourPlace: {{ $his->place }}</h1>
      <tr>
    <td>ID</td>
    <th>Number Of Member</th>
    <th>Days</th>
    <th>Place</th>
    <th>Date</th>
    </tr>
      <tr>
        <td>{{ $his->id }}</td>
      	<td>{{ $his->member }}</td>
      	<td>{{ $his->days }}</td>
        <td>{{ $his->place }}</td>
      	<td>{{ $his->date }}</td>
      	<td><a href="joingroup/join/{{ $his->id }}">Join</a></td>
      	</table>
      </tr>
      <br>
  @endif
@endforeach
</body>
</html>