@extends('participants.layout')
@section('content')
<!DOCTYPE html>
<html>

<head>
    <title>Participants Data</title>
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
</head>

<body>

<center>
		<h5>PARTICIPANT NAME TAG</h4>
		<h6><a target="_blank" href="https://sasanadigital.com/">sasanadigital.com</a></h5>
</center>

<table class='table table-bordered'>
    <thead>
        <tr>
            <th>Full Name</th>
            <th>Business Name</th>
            <th>Email</th>
            <th>Phone Number</th>
        </tr>
    </thead>
    <tbody>
            <tr>
                <td>{{ $participant->fullName }}</td>
                <td>{{ $participant->businessName }}</td>
                <td>{{ $participant->email }}</td>
                <td>{{ $participant->phoneNumber }}</td>
            </tr>
    </tbody>
</table>
</body>
</html>
@endsection