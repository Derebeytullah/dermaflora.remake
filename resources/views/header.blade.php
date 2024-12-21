<header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between border-bottom">
    <a href="/" class="header-logo d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
      <img src="{{url('images/logo-color.jpg')}}" alt="">
    </a>

    <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
      <li><a href="#" class="nav-link px-2 link-light">Anasayfa</a></li>
      <li><a href="#" class="nav-link px-2 link-light">Hakkımızda</a></li>
      <li><a href="#" class="nav-link px-2 link-light">Ürünler</a></li>
      <li><a href="#" class="nav-link px-2 link-light">İletişim</a></li>

      <a href="{{route('admin')}}"><button type="button" class="btn btn-outline-primary me-2">login</button></a>
      
      <a href="{{route('signup')}}"><button type="button" class="btn btn-primary">Sign-up</button></a>
    </ul>

    {{-- <div class="col-md-3 text-end">
      
    </div> --}}
  </header>