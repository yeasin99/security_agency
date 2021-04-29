@extends('backend.master')

@section('content')

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Add new Category
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add A New Admin</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="post" action={{route('category.create')}}>

            @csrf

            <div class="modal-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Category Name</label>
                    <input name="name" type="string" class="form-control" id="exampleInputEmail1" placeholder="Enter Category Name ">

                </div>
                <div class="form-group">
                    <label for="exampleInputDescription">Category Details</label>
                    <input name="details" type="string" class="form-control" id="exampleInputDescription" placeholder="Enter Category Details">

                </div>

            </div>

        <div class="modal-footer">

          <button type="submit" class="btn btn-success">Save</button>
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
        <th scope="col">Details</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($category as $key=> $data)

      <tr>
        <th scope="row">{{$key+1}}</th>
        <td>{{$data->name}}</td>
        <td>{{$data->details}}</td>
        <td>
            <a class="btn btn-warning" href="{{route('category.edit',$data->id)}}">Edit </a>
            <a class="btn btn-danger" href="{{route('category.delete',$data['id'])}}">Delete </a>
        </td>
      </tr>
      @endforeach

    </tbody>
  </table>
 


@endsection