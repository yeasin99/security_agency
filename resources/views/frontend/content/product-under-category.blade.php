@extends('frontend.master')

@section('content')



<div class="album py-5 bg-light">
    <div class="container">

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
@foreach($guards as $data)
<div class="col">
    <div class="card shadow-sm">
        <img src="{{url('files/photo/'.$data->image)}}" alt="Product Image" style=" height:220px">
        <div class="card-body">
            <p class="card-text">{{$data->name}}</p>
            <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-primary">Add to cart</button>
                    <a href="{{route('product.show',$data->id)}}" class="btn btn-sm btn-warning">View</a>
                </div>
                <small class="text-muted">{{$data->price}} BDT</small>
            </div>
        </div>
    </div>
</div>
                    @endforeach
        </div>
    </div>
</div>




@endsection