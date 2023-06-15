    <header class="p-3 bg-dark mb-3">
    <div class="container" style="height: 40px">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">


            @if(!Auth::check())
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="#" class="nav-link px-2 text-light fs-3 text-light spectrum" style="font-family:sans-serif;">CloudSCH</a></li>
        </ul>
            <a class="btn btn-outline-primary me-2" href="{{ url('login') }}">Login</a>
            <a class="btn btn-outline-primary me-2" href="{{ url('register') }}">Register</a>
            @else()
                        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="#" class="nav-link px-2 text-light fs-3 text-light" style="font-family:sans-serif;"><span class="Data"><h5 class="typing-text d-flex justify-content-center"></h5></span></a></li>
        </ul>
            <a class="btn btn-outline-light me-2" href='#' class="btn btn-outline-light me-2" >{{ Auth::user()->name }}</a>
            <a class="btn btn-outline-primary me-2" href="{{ url('logout') }}">Logout</a>
            @endif

</div>

    </div>
  </header>
