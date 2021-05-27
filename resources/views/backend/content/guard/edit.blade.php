@extends('backend.master')

@section('content')


{{-- @dd($guard) --}}
    <form method="post" action={{route('guard.update',$guard->id)}} enctype="multipart/form-data">
    
        @csrf
        @method('PUT')
      <div class="modal-body">
        <div class="form-group">
          <label for="exampleInputEmail1"> Name</label>
          <input value="{{$guard->name}}" name="guard_name" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Your Name">

      </div>
      <div class="form-group">
          <label for="exampleInputDescription"> Address</label>
          <input value="{{$guard->address}}" name="guard_address" type="text" class="form-control" id="exampleInputDescription" placeholder="Enter Your Address">

      </div>
      <div class="form-group">
        <label for="exampleInputDescription"> Contact Number</label>
        <input value="{{$guard->contact}}" name="guard_contact" type="text" class="form-control" id="exampleInputDescription" placeholder="Enter Your Contact number">

      </div>
      <div class="form-group">
        <label for="exampleInputDescription"> NID Number</label>
        <input value="{{$guard->nid}}" name="guard_nid" type="text" class="form-control" id="exampleInputDescription" placeholder="Enter Your NID Number">

    </div>
    <div class="form-group">
      <label for="exampleInputDescription"> Email Address</label>
      <input value="{{$guard->email}}" name="guard_email" type="email" class="form-control" id="exampleInputDescription" placeholder="Enter Your Email Address">

  </div>
   <div class="form-group">
  <label for="exampleInputDescription"> Age</label>
  <input value="{{$guard->age}}" name="guard_age" type="text" class="form-control" id="exampleInputDescription" placeholder="Enter Your Email Address">
</div>
<div class="form-group">
  <label for="exampleInputDescription"> Salary</label>
  <input value="{{$guard->salary}}" name="guard_salary" type="text" class="form-control" id="exampleInputDescription" placeholder="Enter Your Email Address">
</div>

{{-- relational --}}
<div class="form-group">
  <label for="exampleInputDescription">Category</label>
  <select name="category_id" id="" type="text" class="form-control">
      @foreach ($categories as $data)

      <option @if($guard->categories_id==$data->id) selected @endif value="{{$data->id}}">{{$data->name}}</option>

      @endforeach
  </select>
</div>

<div class="form-group">
    <label for="exampleInputDescription"> Image </label>
    <input name="image" type="file" class="form-control" id="exampleInputDescription" placeholder="Enter Your Email Address">
  
  </div>
</div>
  <div class="modal-footer">
       
    <button type="summit" class="btn btn-primary">Save</button>
  </div>



@endsection