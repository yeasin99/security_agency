@extends('backend.master')

@section('content')


<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Registred Client List</h1>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      
      <form method="post" action={{route('client.create')}}>

        @csrf

      <div class="modal-body">
        <div class="form-group">
          <label for="exampleInputEmail1"> Name</label>
          <input name="name" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Your Name">

      </div>
      <div class="form-group">
          <label for="exampleInputDescription"> Address</label>
          <input name="address" type="text" class="form-control" id="exampleInputDescription" placeholder="Enter Your Address">

      </div>
      <div class="form-group">
        <label for="exampleInputDescription"> Contact Number</label>
        <input name="contact" type="text" class="form-control" id="exampleInputDescription" placeholder="Enter Your Contact number">

      </div>
      <div class="form-group">
        <label for="exampleInputDescription"> NID Number</label>
        <input name="nid" type="text" class="form-control" id="exampleInputDescription" placeholder="Enter Your NID Number">

    </div>
    <div class="form-group">
      <label for="exampleInputDescription"> Email Address</label>
      <input name="email" type="email" class="form-control" id="exampleInputDescription" placeholder="Enter Your Email Address">

  </div>

      </div>


       
      <div class="modal-footer">
       
        <button type="summit" class="btn btn-primary">Save</button>
      </div>
    </form>
    </div>
  </div>
</div>



 {{-- for successfull masage --}}
 @if(session()->has('success'))
 <div class="alert alert-success">
   {{session()->get('success')}} 
 </div>
 @endif

<table class="table">
  <thead>
    <tr>
      <th scope="col">Serial</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Contact</th>
      <th scope="col">NID</th>
      <th scope="col">Email</th>
      {{-- <th scope="col">Action</th> --}}
      
    </tr>
  </thead>
  <tbody>
    @foreach ($client as $key=> $data)

  <tr>
    <th scope="row">{{$key+1}}</th>
    <td>{{$data->clientUser->name}}</td>
    <td>{{$data->address}}</td>
    <td>{{$data->contact}}</td>
    <td>{{$data->nid}}</td>
    <td>{{$data->clientUser->email}}</td>
    <td>
      {{-- <a class="btn btn-warning" href="{{route('client.edit',$data->id)}}">Edit </a> --}}
        {{-- <a class="btn btn-danger" href="{{route('client.delete',$data['id'])}}">Delete </a> --}}
    </td>
  </tr>
  @endforeach

</tbody>
</table>


@endsection