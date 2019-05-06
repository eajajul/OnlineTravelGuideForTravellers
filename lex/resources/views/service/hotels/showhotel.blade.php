<!DOCTYPE html>
<html>
<head>
	<title>Hotels</title>
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
	<h1 align="center"><b> Hotel in </b></h1>
	<table>
	<tr>
    <th>Name</th>
    <th>Address</th>
    <th>******</th>
    </tr>
    @foreach($hotels as $hotel)
             <tr>
               <td>{{ $hotel->name }}</th>
               <td>{{ $hotel->address }}</th>
               <td><a href="{{ url('hotelbooking', $hotel->name) }}">Booking</a></th>
             </tr>
    @endforeach
    </table>
</body>
</html>