@extends('backend.master')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Booking Information</h1>
</div>

<table class="table">
    <thead >
      <tr class="fw-bolder" style="color:black">
        <th scope="col">#</th>
        <th scope="col">Guard Name</th>
        <th scope="col">User Name</th>
        <th scope="col">Booking From</th>
        <th scope="col">Booking To</th>
        <th scope="col">Total Payment</th>
        
      </tr>
    </thead>

    
    <tbody>
            @foreach ($booking as $key=>$data )


          <tr class='fw-bolder style="color:black'>
            <th scope="row">{{$key+1}}</th>
            <td>{{$data->orderGuard->name}}</td>
            <td>{{$data->orderUser->name}}</td>
            <td>{{$data->booking_from}}</td>
            <td>{{$data->booking_to}}</td>
            <td>{{$data->total}}</td>
        

          </tr>

     
          @endforeach



    </tbody>
  </table>
 
@endsection