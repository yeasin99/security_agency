@extends('frontend.master')

@section('content')
<div style="background-image: url(https://wallpaperaccess.com/full/1876824.jpg);min-height:100vh;background-repeat:no-repeat;background-size:cover">
  <h1 class="text-center">Your Booking</h1>
<div class="container">
    <table class="table">
     <thead class="bg-dark">
       <tr class="fw-bolder" style="color:rgb(253, 252, 252)">
         <th scope="col">Serial</th>
         <th scope="col">Guard ID</th>
         <th scope="col">User ID</th>
         <th scope="col">Booking From</th>
         <th scope="col">Booking To</th>
         <th scope="col">Total Payment</th>
         <th scope="col">Status</th>
         
       </tr>
     </thead>
     <tbody class="table-striped">
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

   <div class="text-center">
     <a class="btn btn-primary" href="{{route('userPayment')}}">Payment</a>
   </div>
    


 
 </div>
</div>

 @endsection
 {{-- linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), --}}