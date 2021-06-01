@extends('backend.master')

@section('content')





<div class="row mt-4">
    <div class="col-md-12 col-sm-12">
        <form action="{{route('report')}}" method="GET">
            <div class="row">

                <div class="col-md-4">
                    <label for="from_date">From Date</label>
                    <input type="date" name="from_date" class="form-control" value="{{date('Y-m-d')}}">
                </div>
                <div class="col-md-4">
                    <label for="from_date ">To Date</label>
                    <input type="date" name="to_date" class="form-control" value="{{date('Y-m-d')}}">
                </div>
                <div class="col-md-4">
                    <button type="submit" class="btn btn-primary position-right">Search</button>
                    <a class="btn btn-warning" onclick="printDiv()"href="#">Print</a>

                </div>
            </div>
        </form>
    </div>
 </div>

<br>

<div id="printArea">

<table class="table">
    <thead>
      <tr>
        <th scope="col">Serial</th>
        <th scope="col">Client Name</th>
        <th scope="col">Payment ID</th>
        <th scope="col">Contact Number</th>
        <th scope="col">Payment Method</th>
        <th scope="col">Transaction ID</th>
        <th scope="col">Payment Amount</th>
        <th scope="col">Booking_Date</th>
       
      </tr>
    </thead>
    {{-- @dd($payment) --}}
    <tbody>
@if ($payment->count() > 0)

        @foreach ($payment as $key=> $data)

        <tr>
          <th scope="row">{{$key+1}}</th>
          <td>{{$data->user->name}}</td>
          <td>{{$data->id}}</td>
          <td>{{$data->phone_number}}</td>
          <td>{{$data->payment_method}}</td>
          <td>{{$data->transaction_id}}</td>
          <td>{{$data->amount}}</td>
          <td>{{$data->created_at}}</td>
        
        </tr>
        @endforeach

        @else

        <td colspan="5" class="text-center">
            <h4>No Data Found!</h4>
        </td>

        @endif
    </tbody>
  </table>
</div>

<script type="text/javascript">
    function printDiv() {
        var printContents = document.getElementById("printArea").innerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;

        window.print();

        document.body.innerHTML = originalContents;
    }

</script>













@endsection
