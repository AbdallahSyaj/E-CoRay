@extends('layouts.main')

@section('hero')
<h1>Category Page</h1>
<h4>Home - Category Page</h4>
@endsection

@section('active-class-categories')
active
@endsection

@section('content')
<section class="blog-post-area section-margin">
    <div class="container">
        <div class="row">
            <!-- Main Blogs Area -->
            <div class="col-lg-8">
                <div class="row">
                    @foreach (isset($blogs) ? $blogs : $pageBlogs as $blog)
                    <div class="col-md-6">
                        <div class="single-recent-blog-post card-view">
                            <div class="thumb">
                                <img class="card-img rounded-0" src="{{ asset($blog->image) }}" alt="">
                                <ul class="thumb-info">
                                    <li><a href="#"><i class="ti-user"></i> {{ $blog->user->name }}</a></li>
                                    <li><a href="#"><i class="ti-themify-favicon"></i> {{ $blog->comments->count() }} Comments</a></li>
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
                    </div>
                    @endforeach
                </div>

                <!-- Pagination -->
                {{ isset($blogs) ? $blogs->links() : $pageBlogs->links() }}
            </div>

            <!-- Sidebar Area -->
            @include('layouts.partials.siddebar')
            <!-- End Sidebar Area -->
        </div>
    </div>
</section>
@endsection
