<header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container box_1620">
          <!-- Brand and toggle get grouped for better mobile display -->
          <a class="navbar-brand logo_h" href="{{route('home')}}"><img src="img/logo.png" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav justify-content-center">
              <li class="nav-item @yield('active-class-index')"><a class="nav-link" href={{route('home')}}>Home</a></li> 
              <li class="nav-item @yield('active-class-categories')"><a class="nav-link" href="{{ route('categories') }}">Categories</a></li>
              <li class="nav-item  @yield('active-class-contact')"><a class="nav-link" href={{ route('contact')}}>Contact</a></li>
            </ul>
            
            <!-- Add new blog -->
            @auth
            <a href="{{route ('blogs.create')}}" class="btn btn-sm btn-primary mr-2">Add New Post</a>
            @endauth
            <!-- End - Add new blog -->

            <ul class="nav navbar-nav navbar-right navbar-social">

    @auth
    <li class="nav-item dropdown user-dropdown">
        <a class="nav-link dropdown-toggle" href="{{route('profile.edit')}}" id="userMenu" role="button">
            Hi, {{ Auth::user()->name }}
        </a>
    </li>
    @else
        <a href="{{ route('register') }}" class="btn btn-sm btn-warning">Register / Login</a>
    @endauth

</ul>

          </div> 
        </div>
      </nav>
    </div>
  </header>