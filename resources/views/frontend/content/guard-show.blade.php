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

<div >
   <div style="margin-left:450px;">

    <input type="hidden" value="{{$guard->id}}" name="guard_id" >
    <label for="">Guard Name: {{$guard->name}}</label>
   </div>

   <div style="margin-left:450px; margin-top:10px;">
    <label for="">BDT per month: {{$guard->salary}} BDT</label>
    <input type="hidden" value="{{$guard->salary}}" name="salary" >
</div>
</div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 container w-50 mt-5 m-auto">




            <div class="form-group col-md-6">
                <label for="">From Date:</label>
                <input required name="from_date" value="{{date('Y-m')}}" min="{{date('Y-m')}}" type="month" class="form-control">
            </div>


            <div class="form-group col-md-6">
                <label for="">To Date:</label>
                <input required name="to_date" value="{{date('Y-m')}}" min="{{date('Y-m')}}" type="month" class="form-control">
            </div>


        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 container w-75 m-auto">
        <div class="form-group m-auto mt-4">
            <label for="">Details:</label>
            <textarea  name="details" id="" class="form-control"></textarea>
        </div>


    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary" style="margin-left:520px; margin-top:20px;">Submit</button>
        {{-- <a class="btn btn-primary" href="{{route('payment.guard',$guard->id)}}">Submit</a> --}}
    </div>
        </form>
    </div>
</div>
</div>


@endsection