<!DOCTYPE html>
<html>
<head>
	<title>Groups</title>
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
@foreach($group as $g)
<h1 align="center">{{ $g->username }}</h1>
	<table>
		<tr>
    <th>ID</th>
    <th>Username</th>
    <th>Member</th>
    <th>Member:1</th>
    <th>Member:2</th>
    <th>Member:3</th>
    <th>Member:4</th>
    <th>Days</th>
    <th>Place</th>
    <th>Date</th>
    <th>Email</th>
    </tr>
    <tr>
      	<td>{{ $g->id }}</td>
      	<td>{{ $g->username }}</td>
      	<td>{{ $g->member }}</td>
      	<td>{{ $g->firstmember }}</td>
        <td>{{ $g->secondmember }}</td>
        <td>{{ $g->thirdmember }}</td>
        <td>{{ $g->fourthmember }}</td>
        <td>{{ $g->days }}</td>
        <td>{{ $g->place }}</td>
        <td>{{ $g->date }}</td>
        <td>{{ $g->email }}</td>
      	<td><a href="/delete/group/{{ $g->id }}">Delete</a></td>
      	</table>
      </tr>
      <br>
	</table>
	@endforeach
</body>
</html>