<!DOCTYPE html>
<html>
<head>
	<title>contract</title>
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
	<h1 align="center"><b>Contract</b></h1>

	<table>
	<tr>
    <th>Name</th>
    <th>Position</th>
    <th>Number</th>
    <th>Email</th>
    <th>****</th>
    </tr>
@foreach($infos as $info)
      <tr>
      	<td>{{ $info->name }}</td>
      	<td>{{ $info->position }}</td>
      	<td>{{ $info->number }}</td>
      	<td>{{ $info->email }}</td>
      	<td><a href="{{ url('contract', $info->name) }}">Edit</a></td>
      </tr>
      <br>
@endforeach
</table>
<h1 align="center"><a href="/addcontract">Add Contract</a></h1>
</body>
</html>