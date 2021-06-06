@extends('frontend.master')

@section('content')
@if(session()->has('success'))
<div class="alert alert-success">
    {{ session()->get('success') }}
</div>
@endif
<div class=" alert-warning bg-warning alert-dismissible" role="alert" >
  <button  type="button" onclick="this.parentNode.parentNode.removeChild(this.parentNode);" class="close btn btn-info" data-dismiss="alert">Not Interested</button>
  <strong><i class="fa fa-warning"></i> </strong> 
  <marquee>
  <p style="font-family: Impact; font-size: 18pt">Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor!</p>
  </marquee>
</div>

@include('frontend.content.carosol');


   <section class="bg">
  <section class=" text-center container bg-clear">
    <div class="row ">
      <div class="col-lg-6 col-md-8 mx-auto">
        <div>
        <h1 class="fw-bolder text-dark"></h1>
        </div>
      </div>
    </div>
  </section>

  <div  class="album py-5 bg-clear">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">


          @foreach ($guard as $data )
          <div class="col " >
              <div class="card  cardDesign " >
                <img src="{{url('files/photo/'.$data->image)}}" alt="Product Image" style="height: 250px" >
                <div class="card-body">
                  <p class="card-text fs-5 fw-bolder text-dark">{{$data->name}}</p>
                  <p class="text-muted fw-bolder"> Age : {{$data->age}} </p>
                                    <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a  class="btn btn-sm btn-warning" href="{{ route('showGuard.book', $data->id) }}">
                        View
                      </a>

                      <!-- Modal -->
                      
                      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <div class="col " >
                                
                              </div>
                            
                              

                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>
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

@include('frontend.content.footerdesign');
@endsection