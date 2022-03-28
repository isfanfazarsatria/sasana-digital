@extends('participants.layout')
@section('content')
<div style=" padding:20px; text-align:center; border: 10px solid #787878">
<div style=" padding:20px; text-align:center; border: 5px solid #787878">
       <span style="font-size:50px; font-weight:bold">Certificate of Completion</span>
       <br><br>
       <span style="font-size:25px"><i>This is to certify that</i></span>
       <br><br>
       <span style="font-size:30px"><b>{{ $participant->fullName }}</b></span><br/><br/>
       <span style="font-size:25px"><i>with business name</i></span> <br/><br/>
       <span style="font-size:30px">{{ $participant->fullName }}</span> <br/><br/>
</div>
</div>
@endsection