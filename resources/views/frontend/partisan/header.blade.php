<header>
  <div class="collapse bg-dark" id="navbarHeader">
      <div class="container">

      </div>
  </div>
  <div class="navbar navbar-dark bg-dark shadow-sm">
      <div class="container">
          <a href="{{route('homepage')}}" class="navbar-brand d-flex align-items-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>
              <strong>Secuirity Agency</strong>
          </a>
          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
              Select Category
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                @foreach($categories as $category)
                <a class="dropdown-item" href="{{route('product.under.category',$category->id)}}">{{$category->name}}</a>
               @endforeach
            </div>
          </div>
        
          @auth()
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           {{ucfirst(auth()->user()->name)}}
           {{-- {{auth()->user()->name}} --}}
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="{{route('profile.show')}}"><i class="fas fa-user-alt ms-5"></i></a>
             <a class="dropdown-item" href="{{route('logout')}}"> <i class="fas fa-sign-out-alt ms-5"></i></a>
             <a class="dropdown-item" href="#"> <i class="fas fa-cart-plus ms-5"></i></a>


            </div>
          </li>

              {{-- <span style="color:white;">{{auth()->user()->name}}</span> <a href="{{route('admin.logout')}}"> Logout</a> --}}
          @else
              <a href="{{route('login.registration.form')}}">Login / Registration</a>
          @endauth
      </div>
  </div>
</header>