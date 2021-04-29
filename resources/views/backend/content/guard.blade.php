@extends('backend.master')

@section('content')


<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Add new guard
    </button>
    
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add information</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
    
          <form method="post" action={{route('guard.create')}} enctype="multipart/form-data">
    
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
       <div class="form-group">
      <label for="exampleInputDescription"> Age</label>
      <input name="age" type="text" class="form-control" id="exampleInputDescription" placeholder="Enter Your Email Address">
    </div>
    <div class="form-group">
      <label for="exampleInputDescription"> Salary</label>
      <input name="salary" type="number" class="form-control" id="exampleInputDescription" placeholder="Enter guard salary">
    </div>
    

    {{-- relational --}}
    <div class="form-group">
      <label for="exampleInputDescription">Category</label>
      <select name="category_id" id="" type="text" class="form-control">
          @foreach ($category as $item)

          <option value="{{$item->id}}"> {{$item->name}} </option>

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
          <th scope="col">Age</th>
          <th scope="col">Salary</th>
          <th scope="col">Category</th>
          <th scope="col">Image</th>
          <th scope="col">Action</th>
          
        </tr>
      </thead>
      <tbody>
        @foreach ($guard as $key=> $data)
    
      <tr>
        <th scope="row">{{$key+1}}</th>
        <td>{{$data->name}}</td>
        <td>{{$data->address}}</td>
        <td>{{$data->contact}}</td>
        <td>{{$data->nid}}</td>
        <td>{{$data->email}}</td>
        <td>{{$data->age}}</td>
        <td>{{$data->salary}}</td>
        <td>{{$data->category_id}}</td>
        <td>
          <img style="width:120px;" src="{{url('files/photo/'.$data->image)}}"alt="Product Image" style="height:80px">
      </td>
        <td>
            <a class="btn btn-primary" href="">View </a>
           
            <a class="btn btn-success" href="{{route('guard.edit',$data->id)}}">Edit</a>
            <a class="btn btn-danger" href="{{route('guard.delete',$data['id'])}}">Delete </a>
        </td>
      </tr>
      @endforeach
    
    </tbody>
    </table>

{{-- 
    {{$guard->links()}} --}}



@endsection