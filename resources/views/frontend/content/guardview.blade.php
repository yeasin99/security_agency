@extends('frontend.master')

@section('content')
         
   
  <section class=" text-center container bg-clear">
    <div class="row ">
      <div class="col-lg-6 col-md-8 mx-auto">
        <div>
        <h1 class="fw-bolder text-dark"></h1>
        </div>
      </div>
    </div>
  </section>

  <div style="padding: 100px" class="album py-5 bg-clear">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">


          @foreach ($guard as $data )
          <div class="col " >
              <div class="card shadow-sm" >
                <img style=" height:350px; width:350px" src="{{url('files/photo/'.$data->image)}}" alt="Product Image" >
                <div class="card-body">
                  <p class="card-text fs-5 fw-bolder text-dark">{{$data->name}}</p>
                  <p class="text-muted fw-bolder"> Age  {{$data->age}} </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a href="{{route('show.guard',$data->id)}}" class="btn btn-sm btn-warning">Book Now</a>
                      <a href="{{route('product.show',$data->id)}}" class="btn btn-sm btn-warning">View</a>
                  </div>
                    <small class="text-muted fw-bolder">{{$data->price}}12,000tk BDT per month</small>
                  </div>
                </div>
              </div>
            </div>
            @endforeach


      </div>
      </div>
  </div>


@endsection