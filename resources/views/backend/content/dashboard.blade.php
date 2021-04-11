@extends('backend.master')

@section('content')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
    </div>
    <div class="row">
        <div class="col-md-3 ">
            <div class="card bg-success text-white shadow" style="width: 15rem;height:10rem;">
                <div class="card-body">
                    <h5> <small>Total Product Quantity</small></h5>
                    <h1>5000</h1>
                </div>
            </div>
        </div>
        <div class="col-md-3 ">
            <div class="card bg-warning text-white shadow" style="width: 15rem; height:10rem">
                <div class="card-body">
                    <h5> <small>Total selling Product </small> </h5>
                    <h1>1000</h1>
                </div>
            </div>
        </div>
        <div class="col-md-3 ">
            <div class="card bg-primary text-white shadow" style="width: 15rem;height:10rem;">
                <div class="card-body">
                    <h5> <small>Total Price Amount</small> </h5>
                   <h1>15000Tk</h1>
                </div>
            </div>
        </div>
        <div class="col-md-3 ">
            <div class="card bg-secondary text-white shadow" style="width: 15rem;height:10rem;">
                <div class="card-body">
                    <h5> <small>Total Active Employee</small> </h5>
                    <h1>200</h1>
                </div>
            </div>
        </div>
    </div>


@endsection