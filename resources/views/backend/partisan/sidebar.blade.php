<div class="container-fluid">
    <div class="row">
      <nav class="col-md-2 d-none d-md-block bg-success sidebar">
        <div class="sidebar-sticky">
          <ul class="nav flex-column">

            <li class="nav-item p-2">
              <a class="nav-link active text-white" href="{{route('dashboard')}}">
                <span data-feather="home"></span>
                Dashboard <span class="sr-only">(current)</span>
              </a>
            </li>
            
            {{-- </li>
            <li class="nav-item p-2">
              <a class="nav-link active text-white" href="{{route('admin')}}">
                <span data-feather="bar-chart-2"></span>
                Admin
              </a>
            </li> --}}
            <li class="nav-item p-2">
              <a class="nav-link active text-white" href="{{route('client')}}">
                <span data-feather="layers"></span>
                Client
              </a>
            </li>
            <li class="nav-item p-2">
                <a class="nav-link active text-white" href="{{route('guard')}}">
                  <span data-feather="layers"></span>
                  Security Gaurd
                </a>
              </li>
              <li class="nav-item p-2">
                <a class="nav-link active text-white" href="{{route('category')}}">
                  <span data-feather="layers"></span>
                  Categories
                </a>
              </li>
              <li class="nav-item p-2">
                <a class="nav-link active text-white" href="{{route('order')}}">
                  <span data-feather="layers"></span>
                  Bookings
                </a>
              </li>
              <li class="nav-item p-2">
                <a class="nav-link active text-white" href="{{route('payment')}}">
                  <span data-feather="layers"></span>
                  Payment
                </a>
              </li>
              <li class="nav-item p-2">
                <a class="nav-link active text-white" href="{{route('report')}}">
                  <span data-feather="layers"></span>
                  Reports
                </a>
              </li>


          </ul>
        </div>
      </nav>
    </div>
  </div>