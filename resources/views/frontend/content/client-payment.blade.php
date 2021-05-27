@extends('frontend.master')

@section('content')

@if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif

    <br>
    <br>
    <div>
        <p>Pay Total Amount BDT </p>
    <p>Bkash Number is 01982635544 </p>
    <p>Rocket Number is 01982635544 </p>
    <p>Nagad Number is 01982635544 </p>
    </div>
    
    
    
    <form class="container w-50" method="post" action={{route('payment.create')}}>
    
        @csrf
    
        <div class="modal-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Enter The Phone Number</label>
                <input required name="phone_number" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Phone Account Number">
    
            </div>
            <div class="dropdown form-group">
                <label for="exampleInputDescription">Paymnet Method</label>
                <select required class="form-control" name="payment_method" id="inlineFormCustomSelect">
                    <option selected>Select Paymnet Method</option>
                    <option value="Bkash">Bkash</option>
                    <option value="Bkash">Rocket</option>
                    <option value="Bkash">Nagad</option>
                  </select>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Transaction Number</label>
                <input required name="transaction_id" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Transection Number">
    
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Enter Amount</label>
                <input required name="amount" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Amount">
    
            </div>
        </div>
    
    <div class="modal-footer">
    
      <button type="submit" class="btn btn-success">Send</button>
    </div>
    </form>

@endsection