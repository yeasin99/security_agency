@extends('frontend.master')

@section('content')
<div class="container">
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
    


 
 </div>
 @endsection