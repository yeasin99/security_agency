@extends('frontend.master')

@section('content')
@if(session()->has('success'))
<div class="alert alert-success">
    {{ session()->get('success') }}
</div>
@endif





   
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
                      <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        View
                      </button>

                      <!-- Modal -->
                      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">{{$data->name}}</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <div class="col " >
                                <div class="card shadow-sm" >
                                  <img style=" height:350px; width:350px" src="{{url('files/photo/'.$data->image)}}" alt="Product Image" >
                                  <div class="card-body">
                                    <p class="text-muted fw-bolder"> Age  {{$data->age}} </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                      <small class="text-muted fw-bolder">{{$data->price}}12,000tk BDT per month</small>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            
                              

                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <a href="{{route('show.guard',$data->id)}}" class="btn btn-sm btn-warning">Book Now</a>
                            </div>
                          </div>
                        </div>
                      </div>
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