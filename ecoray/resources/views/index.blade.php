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
              <img class="card-img rounded-0" src="{{$blog->image}}" alt="">
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
                <img class="img-fluid" src="{{$blog->image}}" alt="">
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
          <div class="col-lg-4 sidebar-widgets">
              <div class="widget-wrap">
                <div class="single-sidebar-widget newsletter-widget">
                  <h4 class="single-sidebar-widget__title">Newsletter</h4>
                  <div class="form-group mt-30">
                    <div class="col-autos">
                      <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Enter email" onfocus="this.placeholder = ''"
                        onblur="this.placeholder = 'Enter email'">
                    </div>
                  </div>
                  <button class="bbtns d-block mt-20 w-100">Subcribe</button>
                </div>

                <div class="single-sidebar-widget post-category-widget">
                  <h4 class="single-sidebar-widget__title">Catgory</h4>
                  <ul class="cat-list mt-20">
                    <li>
                      <a href="#" class="d-flex justify-content-between">
                        <p>Technology</p>
                        <p>(03)</p>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="d-flex justify-content-between">
                        <p>Software</p>
                        <p>(09)</p>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="d-flex justify-content-between">
                        <p>Lifestyle</p>
                        <p>(12)</p>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="d-flex justify-content-between">
                        <p>Shopping</p>
                        <p>(02)</p>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="d-flex justify-content-between">
                        <p>Food</p>
                        <p>(10)</p>
                      </a>
                    </li>
                  </ul>
                </div>

                <div class="single-sidebar-widget popular-post-widget">
                  <h4 class="single-sidebar-widget__title">Recent Post</h4>
                  <div class="popular-post-list">

              @foreach ($latestBlogs as $blog)

                    <div class="single-post-list">
                      <div class="thumb">
                        <img class="card-img rounded-0" src="{{$blog->image}}" alt="">
                        <ul class="thumb-info">
                          <li><a href="#">{{$blog->user->name}}</a></li>
                          <li><a href="#">Dec 15</a></li>
                        </ul>
                      </div>
                      <div class="details mt-20">
                        <a href="blog-single.html">
                          <h6>{{$blog->name}}</h6>
                        </a>
                      </div>
                    </div>
                    {{-- <div class="single-post-list">
                      <div class="thumb">
                        <img class="card-img rounded-0" src="img/blog/thumb/thumb2.png" alt="">
                        <ul class="thumb-info">
                          <li><a href="#">Adam Colinge</a></li>
                          <li><a href="#">Dec 15</a></li>
                        </ul>
                      </div>
                      <div class="details mt-20">
                        <a href="blog-single.html">
                          <h6>Tennessee outback steakhouse the
                            worker diagnosed</h6>
                        </a>
                      </div>
                    </div>
                    <div class="single-post-list">
                      <div class="thumb">
                        <img class="card-img rounded-0" src="img/blog/thumb/thumb3.png" alt="">
                        <ul class="thumb-info">
                          <li><a href="#">Adam Colinge</a></li>
                          <li><a href="#">Dec 15</a></li>
                        </ul>
                      </div>
                      <div class="details mt-20">
                        <a href="blog-single.html">
                          <h6>Tennessee outback steakhouse the
                            worker diagnosed</h6>
                        </a>
                      </div>
                    </div> --}}
                    @endforeach
                  </div>
                </div>

                

              </div>
          </div>
          <!-- End Blog Post Siddebar -->
        </div>
    </section>
    <!--================ End Blog Post Area =================-->
@endsection