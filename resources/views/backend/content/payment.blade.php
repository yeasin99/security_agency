
@extends('backend.master')

@section('content')

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
        @foreach ($payment as $key=> $data)

        <tr>
          <th scope="row">{{$key+1}}</th>
          <td>{{$data->user_id}}</td>
          <td>{{$data->phone_number}}</td>
          <td>{{$data->payment_method}}</td>
          <td>{{$data->transaction_id}}</td>
          <td>{{$data->amount}}</td>
          <td>
              <a class="btn btn-success" href="">Confirm </a>
              <a class="btn btn-danger" href="">Cancel </a>
          </td>
        </tr>
        @endforeach
    </tbody>
  </table>

@endsection
