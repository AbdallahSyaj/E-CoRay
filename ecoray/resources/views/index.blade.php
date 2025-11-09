@extends('layouts.main')

@section('hero')
  <h3>Tour & Travels</h3>
  <h1>Amazing Places on earth</h1>
  <h4>December 12, 2018</h4> 
@endsection

@section('active-class-index')
active
@endsection


@section('content')
    <!--================ Blog slider start =================-->  
    <section>
      <div class="container">
        <div class="owl-carousel owl-theme blog-slider">

          @foreach ($sliderBlogs as $blog)

          <div class="card blog__slide text-center">
            <div class="blog__slide__img">
              <img class="card-img rounded-0" src="{{asset('storage/' . $blog->image)}}" alt="">
            </div>
            <div class="blog__slide__content">
              <a class="blog__slide__label" href="#">{{ $blog->category->name}}</a>
              <h3><a href="#">{{$blog->name}}</a></h3>
              <p>2 days ago</p>
            </div>
          </div>

          @endforeach
        </div>
      </div>
    </section>
    <!--================ Blog slider end =================-->  

    <!--================ Start Blog Post Area =================-->
    <section class="blog-post-area section-margin mt-4">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">

            @foreach ($pageBlogs as $blog)
            
            
            <div class="single-recent-blog-post">
              <div class="thumb">
                <img class="img-fluid" src="{{asset('storage/' . $blog->image)}}" alt="">
                <ul class="thumb-info">
                  <li><a href="#"><i class="ti-user"></i>{{$blog->user->name}}</a></li>
                  <li><a href="#"><i class="ti-notepad"></i>January 12,2019</a></li>
                  <li><a href="#"><i class="ti-themify-favicon"></i>2 Comments</a></li>
                </ul>
              </div>
              <div class="details mt-20">
                <a href="blog-single.html">
                  <h3>{{ $blog->name }}</h3>
                </a>
                <p>{{ $blog->description }}</p>
                <a class="button" href="#">Read More <i class="ti-arrow-right"></i></a>
              </div>
            </div>

            @endforeach
            <div class="d-flex justify-content-end
            ">
            {{ $pageBlogs->links() }}
</div>
          </div>

          <!-- Start Blog Post Siddebar -->
@include('layouts.partials.siddebar')
          <!-- End Blog Post Siddebar -->
        </div>
    </section>
    <!--================ End Blog Post Area =================-->
@endsection