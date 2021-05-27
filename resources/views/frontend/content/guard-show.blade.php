@extends('frontend.master')

@section('content')

@if(session()->has('success'))
<div class="alert alert-success">
    {{ session()->get('success') }}
</div>
@endif

<div class="album py-5 bg-light">
    <div class="container">

        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif

        <form action="{{route('guard.booking')}}" method="post">
            @csrf
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <input type="hidden" value="{{$guard->id}}" name="guard_id">
            <label for="">Guard Name: {{$guard->name}}</label>
           
            <label for="">BDT per month: {{$guard->salary}} BDT</label>
            <input type="hidden" value="{{$guard->salary}}" name="salary">



            <div class="form-group">
                <label for="">From Date:</label>
                <input required name="from_date" type="month" class="form-control">
            </div>

            <div class="form-group">
                <label for="">To Date:</label>
                <input required name="to_date" type="month" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Details:</label>
                <textarea  name="details" id="" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
                {{-- <a class="btn btn-primary" href="{{route('payment.guard',$guard->id)}}">Submit</a> --}}
            </div>

        </div>
        </form>
    </div>
</div>
         

@endsection