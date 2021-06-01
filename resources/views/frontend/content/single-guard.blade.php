@extends('frontend.master')

@section('content')
<div class="container  mt-3 text-center d-flex justify-content-center">



<div class="card shadow-sm" >
<h5 class="modal-title" >{{$guard->name}}</h5>

    <img style=" height:350px; width:350px" src="{{url('files/photo/'.$guard->image)}}" alt="Product Image" >
    <div class="card-body">
      <p class="text-muted fw-bolder"> Name : {{$guard->name}} </p>
      <p class="text-muted fw-bolder"> Age : {{$guard->age}} </p>
      <p class="text-muted fw-bolder"> Salary : {{$guard->salary}} </p>
      <p class="text-muted fw-bolder"> Experience :  {{$guard->experience}} </p>
      <div class="d-flex justify-content-between align-items-center">

      </div>
    </div>
  <a href="{{route('show.guard',$guard->id)}}" class="btn btn-sm btn-warning">Booking guard</a>

  </div>
</div>


@endsection