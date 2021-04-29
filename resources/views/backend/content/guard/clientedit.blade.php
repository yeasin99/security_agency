@extends('backend.master')

@section('content')




<form method="post" action={{route('client.update',$client->id)}} enctype="multipart/form-data">

    @csrf
    @method('PUT')

  <div class="modal-body">
    <div class="form-group">
      <label for="exampleInputEmail1"> Name</label>
      <input value="{{$client->name}}" name="name" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Your Name">

  </div>
  <div class="form-group">
      <label for="exampleInputDescription"> Address</label>
      <input value="{{$client->address}}" name="address" type="text" class="form-control" id="exampleInputDescription" placeholder="Enter Your Address">

  </div>
  <div class="form-group">
    <label for="exampleInputDescription"> Contact Number</label>
    <input value="{{$client->contact}}" name="contact" type="text" class="form-control" id="exampleInputDescription" placeholder="Enter Your Contact number">

  </div>
  <div class="form-group">
    <label for="exampleInputDescription"> NID Number</label>
    <input value="{{$client->nid}}" name="nid" type="text" class="form-control" id="exampleInputDescription" placeholder="Enter Your NID Number">

</div>
<div class="form-group">
  <label for="exampleInputDescription"> Email Address</label>
  <input value="{{$client->email}}" name="email" type="email" class="form-control" id="exampleInputDescription" placeholder="Enter Your Email Address">

</div>

  </div>


   
  <div class="modal-footer">
   
    <button type="summit" class="btn btn-primary">Save</button>
  </div>
</form>


@endsection