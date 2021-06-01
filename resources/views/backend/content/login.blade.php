









<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <title>Document</title> --}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Pattaya&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>



@if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
@endif
@if ($errors->any())
@foreach ($errors->all() as $error)
    <div class="alert alert-danger">{{$error}}</div>
@endforeach
@endif


<div class="row d-flex align-items-center">
    <h2  class ="text-center" style="font-family: 'Pattaya', sans-serif; color:rgb(47, 179, 231);">Secuirity Agency Management Login</h2>
    <div class="col-md-5 ">
        <img src="https://thumbs.dreamstime.com/b/vector-cartoon-security-guard-policeman-police-guard-dog-vector-cartoon-security-guard-policeman-police-guard-dog-129643771.jpg" class="img-fluid w-100 mx-5" alt="">
    </div>
    <div class="col-md-7">



        <form action="{{route('admin.doLogin')}}"  method="POST" class="container w-50 p-5 border shadow p-3 mb-5 rounded-3" style="background: linear-gradient(to right, #619fdd 0%, #a1d8f1 100%); margin-top:100px">


            @csrf
  

            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label fs-5 text-light"><b>Email</b></label>
              <input name="email" type="email" class="form-control" style="height: 50px" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Email Address">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label fs-5 text-light"><b>Password</b></label>
              <input name="password" type="password" class="form-control" style="height: 50px" id="exampleInputPassword1" placeholder="Type Your Password Here">
            </div>
          
            <button class="btn btn-primary fs-5"><b>Login</b></button>
          </form>
    </div>
</div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>


