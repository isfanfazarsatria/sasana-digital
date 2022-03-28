@extends('participants.layout')
@section('content')
<div class="card">
  <div class="card-header">Edit Participant</div>
  <div class="card-body">
      
      <form action="{{route('updateParticipant', $participant->id)}}" method="post">
        {!! csrf_field() !!}
        <input type="hidden" name="id" id="id" value="{{$participant->id}}" id="id" />
        <label>Full Name</label></br>
        <input type="text" name="fullName" id="fullName" value="{{$participant->fullName}}" class="form-control"></br>
        <label>businessName</label></br>
        <input type="text" name="businessName" id="businessName" value="{{$participant->businessName}}" class="form-control"></br>
        <label>Email</label></br>
        <input type="email" name="email" id="email" value="{{$participant->email}}" class="form-control"></br>
        <label>phoneNumber</label></br>
        <input type="text" name="phoneNumber" id="phoneNumber" value="{{$participant->phoneNumber}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop