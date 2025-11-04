<!DOCTYPE html>
<html lang="en">

@include('layouts.partials.head')

<body>
  <!--================Header/NAV Menu Area =================-->
  @include('layouts.partials.nav')
  <!--================Header/Nav Menu Area =================-->
  
  <main class="site-main">

    <!--================Hero Banner start =================-->  
    @include('layouts.partials.hero')
    <!--================Hero Banner end =================-->  

    <!--================ Blog slider/Post start =================-->  
    @yield('content')    
    <!--================ End Blog slider/Post Area =================-->

  </main>

    <!--================ Start Footer Area =================-->
     @include('layouts.partials.footer')
    <!--================ End Footer Area =================-->

    @include('layouts.partials.scripts')

 
</body>
</html>