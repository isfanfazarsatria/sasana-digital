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
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <div class="pull-right" style="margin-top: 20px;">
                <a class="btn btn-success" href="{{ route('create') }}"> Create New Participant</a>
            </div>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Full Name</th>
                                <th>Business Name</th>
                                <th>Email</th>
                                <th>Phone Number</th>
                                <th>Print</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $dt)
                                <tr>
                                    <td>{{ $dt->fullName }}</td>
                                    <td>{{ $dt->businessName }}</td>
                                    <td>{{ $dt->email }}</td>
                                    <td>{{ $dt->phoneNumber }}</td>
                                    <td>
                                        <a class="btn btn-info" href="{{ route('print.pdf', $dt->id) }}">Name Tag</a>
                                        <a class="btn btn-secondary" href="{{ route('cf.pdf', $dt->id) }}">Certificate</a>
                                    </td>
                                    <td>
                                        <a class="btn btn-success" href="{{ route('editPaticipant',  $dt->id) }}">edit</a>
                                        <a class="btn btn-danger" href="{{ route('deleteParticipant', $dt->id) }}" onclick="return confirm(&quot;Confirm delete?&quot;)">deleted</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"></script>
</body>

</html>
@endsection