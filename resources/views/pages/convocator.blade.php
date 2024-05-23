@extends('pages.template')

@section('content')
<div class="col col-lg-7">
   @foreach($entitati as $entitate)
   <small class="d-inline-flex mb-3 px-2 py-1 fw-semibold text-success-emphasis bg-success-subtle border border-success-subtle rounded-2">
      {{$entitate->nume}}
   </small>
   
   <table id="mesaje" style="width:100%"  class="table table-bordered table-striped table-hover">
    <thead><th>Username</th><th>Convoaca suplimentar</th></thead>
   @foreach($entitate->users as $user)
   <tr>
   <td width='25%'>{{$user->username}}</td><td>

   <button type="button"  id='{{ $user->id}}' class="btn btn-primary trimite_email" data-bs-toggle="modal" data-bs-target="#convoacaUser"   onclick="convoacaUser('" . $user_id . "');return ;">
           Convoaca user</button>
   </td>

</tr>
   @endforeach
</table>


   @endforeach

</div>
@endsection