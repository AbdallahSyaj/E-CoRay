<div class="col-lg-4 sidebar-widgets">
                <div class="widget-wrap">

                    <!-- Search -->
<div class="single-sidebar-widget newsletter-widget">
    <h4 class="single-sidebar-widget__title">Search Box</h4>
    <form action="{{ route('blogs.search') }}" method="GET">
        <div class="form-group mt-30">
            <input type="text" class="form-control" placeholder="Search Here" name="search">
        </div>
        <button type="submit" class="bbtns d-block mt-20 w-100">Search Now</button>
    </form>
</div>

                    

                    <!-- Categories -->
                    <div class="single-sidebar-widget post-category-widget">
                        <h4 class="single-sidebar-widget__title">Category</h4>
                        <ul class="cat-list mt-20">
                            @foreach ($categories as $categorie)
                            <li>
                                <a href="{{ route('categories.show', $categorie->id) }}" class="d-flex justify-content-between">
                                    <p>{{ $categorie->name }}</p>
                                    <p>({{ $categorie->blogs_count }})</p>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>

                    <!-- Latest Posts -->
                    <div class="single-sidebar-widget popular-post-widget">
                        <h4 class="single-sidebar-widget__title">Recent Post</h4>
                        <div class="popular-post-list">
                            @foreach ($latestBlogs as $blog)
                            <div class="single-post-list">
                                <div class="thumb">
                                    <img class="card-img rounded-0" src="{{asset('storage/' . $blog->image)}}" alt="">
                                    <ul class="thumb-info">
                                        <li><a href="#">{{ $blog->user->name }}</a></li>
                                        <li><a href="#">{{ $blog->comments->count() }} Comments</a></li>
                                    </ul>
                                </div>
                                <div class="details mt-20">
                                    <a href="blog-single.html">
                                        <h6>{{ $blog->name }}</h6>
                                    </a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>