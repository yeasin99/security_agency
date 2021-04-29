@extends('backend.master')

@section('content')



<form method="post" action={{route('category.update',$category->id)}} enctype="multipart/form-data">

    @csrf
    @method('PUT')

    <div class="modal-body">
        <div class="form-group">
            <label for="exampleInputEmail1">Category Name</label>
            <input value="{{$category->name}}" name="name" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Category Name ">

        </div>
        <div class="form-group">
            <label for="exampleInputDescription">Category Details</label>
            <input value="{{$category->details}}" name="details" type="text" class="form-control" id="exampleInputDescription" placeholder="Enter Category Details">

        </div>

    </div>

<div class="modal-footer">

  <button type="submit" class="btn btn-success">Save</button>
</div>
</form> 


@endsection