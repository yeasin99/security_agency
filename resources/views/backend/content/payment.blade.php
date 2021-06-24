
@extends('backend.master')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Payments</h1>
</div>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Payment ID</th>
            <th scope="col">User ID</th>
            <th scope="col">Phone NO</th>
            <th scope="col">Payment Method</th>
            <th scope="col">Transaction ID</th>
            <th scope="col">Amount</th>
            <th scope="col">Action</th>
          </tr>
    </thead>
    <tbody>
      {{-- @dd($payment) --}}
        @foreach ($payment as $key=> $data)

        <tr>
          <th scope="row">{{$key+1}}</th>
          <td>{{$data->user_id}}</td>
          <td>{{$data->phone_number}}</td>
          <td>{{$data->payment_method}}</td>
          <td>{{$data->transaction_id}}</td>
          <td>{{$data->amount}}</td>
          <td>
              <a class="btn btn-success" href="{{route('statusUpdate',$data->booking_id)}}">Confirm </a>
              <a class="btn btn-danger" href="{{route('statusCancel',$data->booking_id)}}">Cancel </a>
          </td>
        </tr>
        @endforeach
    </tbody>
  </table>

@endsection
