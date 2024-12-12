    <!-- blog starts -->
    <section class="blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="listing-inner">
                        <div class="list-results d-flex align-items-center justify-content-between">
                            <div class="list-results-sort">
                                <p class="m-0">Showing {{ $posts->currentPage() }} of {{ $posts->total() }} Pages</p>
                            </div>                 

                        </div>
                        @forelse ($posts as $post)
                            <div class="blog-full d-flex mb-4 border-b pb-4">
                                <div class="row">
                                    <div class="col-lg-5 col-md-4 blog-height">
                                        <div class="blog-image">
                                            <img src="{{ $post->postImage() }}" alt="{{ $post->title }}">

                                        </div>
                                    </div>
                                    <div class="col-lg-7 col-md-8">
                                        <div class="blog-content">
                                            @foreach ($post->categories as $category)
                                                <span class="theme mb-2">
                                                    {{ $category->title }}
                                                </span>
                                            @endforeach

                                            <h3 class="mb-2">
                                                <a href="{{ route('blog.details', $post->slug) }}" class="">
                                                    {{ $post->title }}
                                                </a>
                                            </h3>
                                            <p class="date-cats mb-2">
                                                @foreach ($post->categories as $item)
                                                    <a href="#" class="me-2"><i class="fa fa-file"></i>

                                                        {{ $item->title }}
                                                    </a>
                                                @endforeach

                                                <a href="post-grid-2.html" class="me-2"><i
                                                        class="fa fa-calendar-alt"></i>
                                                     
                                                    {{ $post->getFormattedDate() }}</a>
                                                <a href="" class=""><i class="fa fa-user"></i> By
                                                    {{ $post->user->name }}</a>
                                            </p>
                                            <p class="mb-0"> {{ $post->shortBody() }}.</p>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        @empty
                        <div class="blog-full d-flex mb-4 border-b pb-4">
                            <div class="row">
                                <div class="col-lg-12">
                                    <p> No Post</p>
                                </div>
                            </div>
                        </div>
                           
                        @endforelse
                        <div class="pagination-main text-center">
                            {{ $posts->links() }}
                        
                        </div>
                    </div>
                </div>

                <!-- sidebar starts -->
                <div class="col-lg-4 col-md-12">
                    <div class="sidebar-sticky">
                        <div class="list-sidebar">
                            {{-- 
                                     <div class="author-news mb-4 box-shadow p-5 text-center">
                                <div class="author-news-content">
                                    <div class="author-thumb mb-1">
                                        <img src="{{ asset('images/team/img2.jpg') }}" alt="author">
                                    </div>
                                    <div class="author-content">
                                        <h3 class="title mb-1"><a href="#">Relson Dulux</a></h3>
                                        <p class="mb-2">Hello, We’re content writer who is fascinated by content
                                            fashion, celebrity and lifestyle. We helps clients bring the right content
                                            to the right people.</p>
                                        <div class="header-social">
                                            <ul>
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
 --}}

                            <div class="sidebar-item mb-4">
                                <h4 class="">All Categories</h4>
                                <ul class="sidebar-category">
                                    @foreach ($categories as $category)
                                        <li><a href="{{ route('bycategory', $category) }}">{{ $category->title }}</a>
                                        </li>
                                    @endforeach


                                </ul>
                            </div>
{{-- 
                            <div class="popular-post sidebar-item mb-4">
                                <div class="sidebar-tabs">
                                    <div class="post-tabs">
                                        <!-- tab navs -->
                                        <ul class="nav nav-tabs nav-pills nav-fill" id="postsTab1" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button aria-controls="popular" aria-selected="false"
                                                    class="nav-link active" data-bs-target="#popular"
                                                    data-bs-toggle="tab" id="popular-tab" role="tab"
                                                    type="button">Popular</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button aria-controls="recent" aria-selected="true" class="nav-link"
                                                    data-bs-target="#recent" data-bs-toggle="tab" id="recent-tab"
                                                    role="tab" type="button">Recent</button>
                                            </li>
                                        </ul>
                                        <!-- tab contents -->
                                        <div class="tab-content" id="postsTabContent1">
                                            <!-- popular posts -->
                                            <div aria-labelledby="popular-tab" class="tab-pane fade active show"
                                                id="popular" role="tabpanel">
                                                <article class="post mb-3 border-b pb-3">
                                                    <div
                                                        class="s-content d-flex align-items-center justify-space-between">
                                                        <div class="sidebar-image w-25 me-3">
                                                            <a href="detail-1.html"><img
                                                                    src="images/trending/trending1.jpg"
                                                                    alt=""></a>
                                                        </div>
                                                        <div class="content-list w-75">
                                                            <h5 class="mb-1"><a href="detail-1.html">An Incredibly
                                                                    Easy Method That Works For All</a></h5>
                                                            <div class="date">10 Apr 2021</div>
                                                        </div>
                                                    </div>
                                                </article>

                                                <article class="post border-b pb-3 mb-3">
                                                    <div
                                                        class="s-content d-flex align-items-center justify-space-between">
                                                        <div class="sidebar-image w-25 me-3">
                                                            <a href="detail-1.html"><img
                                                                    src="images/trending/trending2.jpg"
                                                                    alt=""></a>
                                                        </div>
                                                        <div class="content-list w-75">
                                                            <h5 class="mb-1"><a href="detail-1.html">15 Unheard Ways
                                                                    To Achieve Greater Walker</a></h5>
                                                            <div class="date">29 Mar 2021</div>
                                                        </div>
                                                    </div>
                                                </article>

                                                <article class="post border-b pb-3">
                                                    <div
                                                        class="s-content d-flex align-items-center justify-space-between">
                                                        <div class="sidebar-image w-25 me-3">
                                                            <a href="detail-1.html"><img
                                                                    src="images/trending/trending4.jpg"
                                                                    alt=""></a>
                                                        </div>
                                                        <div class="content-list w-75">
                                                            <h5 class="mb-1"><a href="detail-1.html">15 Unheard Ways
                                                                    To Achieve Greater Walker</a></h5>
                                                            <div class="date">21 Feb 2021</div>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                            <!-- Recent posts -->
                                            <div aria-labelledby="recent-tab" class="tab-pane fade" id="recent"
                                                role="tabpanel">
                                                <article class="post mb-3 border-b pb-3">
                                                    <div
                                                        class="s-content d-flex align-items-center justify-space-between">
                                                        <div class="sidebar-image w-25 me-3">
                                                            <a href="detail-1.html"><img
                                                                    src="images/trending/trending5.jpg"
                                                                    alt=""></a>
                                                        </div>
                                                        <div class="content-list w-75">
                                                            <h5 class="mb-1"><a href="detail-1.html">10 Ways To
                                                                    Immediately Start Selling Furniture</a></h5>
                                                            <div class="date">08 Mar 2021</div>
                                                        </div>
                                                    </div>
                                                </article>

                                                <article class="post border-b pb-3 mb-3">
                                                    <div
                                                        class="s-content d-flex align-items-center justify-space-between">
                                                        <div class="sidebar-image w-25 me-3">
                                                            <a href="detail-1.html"><img
                                                                    src="images/trending/trending6.jpg"
                                                                    alt=""></a>
                                                        </div>
                                                        <div class="content-list w-75">
                                                            <h5 class="mb-1"><a href="detail-1.html">Photography
                                                                    Photo modify and Beautiful Walker</a></h5>
                                                            <div class="date">18 Jan 2021</div>
                                                        </div>
                                                    </div>
                                                </article>

                                                <article class="post border-b pb-3">
                                                    <div
                                                        class="s-content d-flex align-items-center justify-space-between">
                                                        <div class="sidebar-image w-25 me-3">
                                                            <a href="detail-1.html"><img
                                                                    src="images/trending/trending3.jpg"
                                                                    alt=""></a>
                                                        </div>
                                                        <div class="content-list w-75">
                                                            <h5 class="mb-1"><a href="detail-1.html">1Certified
                                                                    Graphic Design with Free Project Course</a></h5>
                                                            <div class="date">12 Feb 2021</div>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                           <div class="sidebar-item mb-4">
                                <h4 class="">Tags</h4>
                                <ul class="sidebar-tags">
                                    <li><a href="#">Tour</a></li>
                                    <li><a href="#">Rental</a></li>
                                    <li><a href="#">City</a></li>
                                    <li><a href="#">Yatch</a></li>
                                    <li><a href="#">Activity</a></li>
                                    <li><a href="#">Museum</a></li>
                                    <li><a href="#">Beauty</a></li>
                                    <li><a href="#">Classic</a></li>
                                    <li><a href="#">Creative</a></li>
                                    <li><a href="#">Designs</a></li>
                                    <li><a href="#">Featured</a></li>
                                    <li><a href="#">Free Style</a></li>
                                    <li><a href="#">Programs</a></li>
                                    <li><a href="#">Travel</a></li>
                                </ul>
                            </div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog Ends -->

  
