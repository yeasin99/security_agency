@extends('frontend.master')

@section('content')


<section class="bg">
  <div>
    
  </div>
<div class="album py-5 bg-light">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
@foreach($guards as $data)
<div class="col " >
    <div class="card cardDesign" >
      <img style="250px" src="{{url('files/photo/'.$data->image)}}" alt="Product Image" >
      <div class="card-body">
        <p class="card-text fs-5 fw-bolder text-dark">{{$data->name}}</p>
        <p class="text-muted fw-bolder"> Age  {{$data->age}} </p>
        <div class="d-flex justify-content-between align-items-center">
          <div class="btn-group">
            <a  class="btn btn-sm btn-warning" href="{{ route('showGuard.book', $data->id) }}">
              View
            </a>
            
        </div>
          <small class="text-muted fw-bolder">{{$data->price}}</small>
        </div>
      </div>
    </div>
  </div>

                    @endforeach
        </div>
    </div>
</div>
</section>



@include('frontend.content.footerdesign')
@endsection