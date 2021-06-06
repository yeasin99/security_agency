@extends('frontend.master')

@section('content')






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <title>Document</title> --}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Pattaya&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>


<div class="row d-flex align-items-center" >
    <h2  class ="text-center" style="font-family: 'Pattaya', sans-serif; color:rgb(47, 179, 231);"></h2>
    <div class="col-md-5 ">
      <div class="container" style="border-bottom:1px solid black">

        <h2>Name:
        @if (auth()) {{auth()->user()->name}}

        @else
        <h1> not found</h1>
        @endif
        </h2>
        </div>
        <img src="https://image.freepik.com/free-vector/businessman-profile-cartoon_18591-58479.jpg" height="450px" alt="">
    </div>
    {{-- <div class="col-md-7">
       <table class="table">
        <thead>
          <tr class="fw-bolder" style="color:black">
            <th scope="col">Serial</th>
            <th scope="col">Guard ID</th>
            <th scope="col">User ID</th>
            <th scope="col">Booking From</th>
            <th scope="col">Booking To</th>
            <th scope="col">Total Payment</th>
            <th scope="col">Status</th>
            
          </tr>
        </thead>
        <tbody>
                @foreach ($bookings as $key=>$data )
    
    
              <tr class='fw-bolder style="color:black'>
                <th scope="row">{{$key+1}}</th>
    
                <td>{{$data->guard_id}}</td>
                <td>{{$data->user_id}}</td>
                <td>{{$data->booking_from}}</td>
                <td>{{$data->booking_to}}</td>
                <td>{{$data->total}}</td>
                <td>{{$data->status}}</td>
            
    
              </tr>
    
         
              @endforeach

              <td colspan="7" class="text-center">Sub-Total : {{$sub_total}}</td>
    
    
    
        </tbody>
      </table>

      <div >
        <a class="btn btn-primary " href="{{route('userPayment')}}">Payment</a>
      </div>
       


    
    </div> --}}
</div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>



</div>





{{-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

            <div class="container">
                <div class="jumbotron">
                  <div class="row">
                      <div class="col-md-4 col-xs-12 col-sm-6 col-lg-4">
                          <img src="https://www.svgimages.com/svg-image/s5/man-passportsize-silhouette-icon-256x256.png" alt="stack photo" class="img">
                      </div>
                      <div class="col-md-8 col-xs-12 col-sm-6 col-lg-8">
                          <div class="container" style="border-bottom:1px solid black">

                        <h2>Name:
                        @if (auth()) {{auth()->user()->name}}

                        @else
                        <h1> not found</h1>
                        @endif
                        </h2>
                        </div>
                            <hr>
                          <ul class="container details">
                            {{-- <li><p><span class="glyphicon glyphicon-earphone one" style="width:50px;"></span> </p></li> --}}
                            {{-- <li><p><span class="glyphicon glyphicon-envelope one" style="width:50px;"></span>@if (auth()) {{auth()->user()->email}} @endif</p></li> --}}
                            {{-- <li><p><span class="glyphicon glyphicon-map-marker one" style="width:50px;"></span>Hyderabad</p></li>
                            <li><p><span class="glyphicon glyphicon-new-window one" style="width:50px;"></span><a href="#">www.example.com</p></a> --}}
                          {{-- </ul>
                      </div>
                  </div>
                </div> --}}
             
@endsection

