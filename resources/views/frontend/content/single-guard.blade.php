@extends('frontend.master')

@section('content')
<div style="background-image: url(https://wallpapercave.com/wp/wp2486418.jpg);min-height:100vh;background-repeat:no-repeat;background-size:cover">
  <div class="container pt-5 pb-5 text-center d-flex justify-content-center">



  <div class="card shadow-sm" >
  <h5 class="modal-title pb-2" >{{$guard->name}}</h5>
  
      <img style=" height:350px; width:350px" src="{{url('files/photo/'.$guard->image)}}" alt="Product Image" >
      <div class="card-body">
        <p class="text-muted fw-bolder"> Name : {{$guard->name}} </p>
        <p class="text-muted fw-bolder"> Age : {{$guard->age}} </p>
        <p class="text-muted fw-bolder"> Salary : {{$guard->salary}} </p>
        <p class="text-muted fw-bolder"> Experience :  {{$guard->experience}} </p>
        <div class="d-flex justify-content-between align-items-center">
  
        </div>
      </div>
    <a href="{{route('show.guard',$guard->id)}}" class="btn btn-sm btn-warning">Book guard</a>
  
    </div>
  </div>
</div>



@endsection