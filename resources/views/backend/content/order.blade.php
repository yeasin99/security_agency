@extends('backend.master')

@section('content')

<table class="table">
    <thead>
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