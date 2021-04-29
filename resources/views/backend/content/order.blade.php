@extends('backend.master')

@section('content')

<table class="table">
    <thead>
      <tr class="fw-bolder" style="color:black">
        <th scope="col">#</th>
        <th scope="col">guard_id</th>
        <th scope="col">user_id</th>
        <th scope="col">booking_from</th>
        <th scope="col">booking_to</th>
        <th scope="col">total</th>
        
      </tr>
    </thead>
    <tbody>
            @foreach ($booking as $key=>$data )


          <tr class='fw-bolder style="color:black'>
            <th scope="row">{{$key+1}}</th>

            <td>{{$data->guard_id}}</td>
            <td>{{$data->user_id}}</td>
            <td>{{$data->booking_from}}</td>
            <td>{{$data->booking_to}}</td>
            <td>{{$data->total}}</td>
        

          </tr>

     
          @endforeach



    </tbody>
  </table>
 
@endsection