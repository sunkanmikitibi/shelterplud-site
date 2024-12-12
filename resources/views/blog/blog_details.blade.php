<!-- blog starts -->
<section class="blog blog-left pt-10">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 col-sm-12">
                <div class="blog-single">

                    <div class="blog-single-in d-md-flex align-items-center mb-4 text-center text-md-start">
                        <div class="blog-date me-4">
                            <div class="date text-center bg-theme p-5 py-4">
                                <h2 class="day mb-0 white">{{ date_format($post->published_at, 'd') }}</h2>
                                <div class="month white">{{ date_format($post->published_at, 'M') }}</div>
                            </div>
                        </div>
                        <div class="blog-single-in-cont w-75">
                            <div class="blog-content">
                                <h2 class="blog-title mb-0"><a href="#" class="">{{ $post->title }}
                                    </a></h2>
                            </div>
                        </div>
                    </div>

                    <div class="blog-wrapper">
                        <div class="blog-content">
                            <div class="blog-imagelist mb-3">
                                {{-- <img src="images/bg/bg3.jpg"alt="image"> --}}
                                <img src="{{ $post->postImage() }}" width="1600px" alt="{{ $post->title }}">

                            </div>
                            <p class="mb-3">
                                {!! $post->body !!}
                            </p>
                        </div>



                        {{-- <div class="blog-imagelist mb-4">
                                <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <img src="images/trending/trending4.jpg" alt="image">
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <img src="images/trending/trending2.jpg" alt="image">
                                </div>
                                </div>
                            </div> --}}


                        <!-- blog share -->
                        <div class="blog-share d-flex justify-content-between align-items-center mb-4 bg-lgrey border">
                            <div class="blog-share-tag">
                                <ul class="inline">
                                    <li><strong>Posted In:</strong></li>
                                    @foreach ($post->categories as $category)
                                        <li><a href="#">{{ $category->title }},</a></li>
                                    @endforeach


                                </ul>
                            </div>
                            <div class="header-social">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- author detail<div class="blog-author mb-4 bg-grey border">
                                <div class="blog-author-item">
                                    <div class="row d-flex justify-content-between align-items-center">
                                        <div class="col-md-3 col-sm-3 col-xs-12">
                                            <div class="blog-thumb text-center position-relative">
                                                <img src="images/reviewer/1.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <h3 class="title pink"><a href="#">About Author <span>Graphic Designer</span></a></h3>
                                            <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sceler neque in euismod. Nam vitae urnasodales neque in faucibus.</p>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div> -->


                        <!-- blog next prev -->
                        <div class="blog-next mb-4 d-sm-flex align-items-center">
                            @if ($prev)
                                <a href="{{ route('blog.details', $prev) }}" class="d-block bg-theme">
                                    <div class="prev ps-4">
                                        <i class="fa fa-arrow-left white"></i>
                                        <p class="m-0 white">Previous Post</p>
                                        <p class="m-0 white">{{ $prev->title }}</p>
                                    </div>
                                </a>
                            @endif
                            @if ($next)
                                <a href="{{ route('blog.details', $next) }}" class="d-block bg-grey">
                                    <div class="next pr-4 text-right">
                                        <i class="fa fa-arrow-right"></i>
                                        <p class="m-0">Previous Post</p>
                                        <p class="m-0">{{ $next->title }}</p>
                                    </div>
                                </a>
                            @endif

                        </div>

                        <!-- blog comment list -->
                        
                             <div class="single-comments single-box mb-4">
                            <h4 class="mb-4">Showing {{ $post->comments->count() }} verified guest comments</h4>

                            @foreach ($post->comments as $comment)
                            <div class="comment-box">
                                <div class="comment-image mt-2">
                                    <img src="{{ asset('images/reviewer/1.jpg') }}" alt="image">
                                </div>
                                <div class="comment-content">
                                    <h4 class="mb-1 Soldman Kell">{{ $comment->name }}</h4>
                                    <p class="comment-date">{{ date_format($comment->created_at, 'd, M Y') }}</p>
                                    
                                    
                                    <p class="comment">
                                        {!! $comment->comment !!}
                                    </p>
                                    <div class="comment-like">
                                        <div class="like-title float-left">
                                            <a href="#" class="nir-btn mr-2">Reply</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            @endforeach
                       
                        </div>
                         
                        
                       

                        <!-- blog review -->
                        <div class="single-add-review">
                            <h4 class="">Write a Comment</h4>
                            <form action="{{ route('comments.store', $post) }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group mb-2">
                                            <input type="text" name="name" class="form-control"
                                                placeholder="Name">
                                                @error('name')
                                                    {{ $message }}
                                                @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-2">
                                            <input type="email" name="email" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mb-1">
                                        <div class="form-group">
                                            <textarea name="comment"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-btn">
                                            <button type="submit" class="nir-btn">Add Comment</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>

            <!-- sidebar starts -->
            <div class="col-lg-4 col-md-12">
                <div class="sidebar-sticky">
                    <div class="list-sidebar"> 


                        <div class="sidebar-item mb-4">
                            <h4 class="">All Categories</h4>
                            <ul class="sidebar-category">
                                @foreach ($blogcategories as $category)
                                    <li><a href="{{ route('bycategory', $category) }}">{{ $category->title }}
                                            ({{ $category->total }})</a></li>
                                @endforeach


                            </ul>
                        </div>

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
                                                <div class="s-content d-flex align-items-center justify-space-between">
                                                    <div class="sidebar-image w-25 me-3">
                                                        <a href="#"><img src="images/trending/trending1.jpg"
                                                                alt=""></a>
                                                    </div>
                                                    <div class="content-list w-75">
                                                        <h5 class="mb-1"><a href="detail-1.html">An Incredibly Easy
                                                                Method That Works For All</a></h5>
                                                        <div class="date">10 Apr 2021</div>
                                                    </div>
                                                </div>
                                            </article>

                                            <article class="post border-b pb-3 mb-3">
                                                <div class="s-content d-flex align-items-center justify-space-between">
                                                    <div class="sidebar-image w-25 me-3">
                                                        <a href="#"><img src="images/trending/trending2.jpg"
                                                                alt=""></a>
                                                    </div>
                                                    <div class="content-list w-75">
                                                        <h5 class="mb-1"><a href="detail-1.html">15 Unheard Ways To
                                                                Achieve Greater Walker</a></h5>
                                                        <div class="date">29 Mar 2021</div>
                                                    </div>
                                                </div>
                                            </article>

                                            <article class="post border-b pb-3">
                                                <div class="s-content d-flex align-items-center justify-space-between">
                                                    <div class="sidebar-image w-25 me-3">
                                                        <a href="#"><img src="images/trending/trending4.jpg"
                                                                alt=""></a>
                                                    </div>
                                                    <div class="content-list w-75">
                                                        <h5 class="mb-1"><a href="detail-1.html">15 Unheard Ways To
                                                                Achieve Greater Walker</a></h5>
                                                        <div class="date">21 Feb 2021</div>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                        <!-- Recent posts -->
                                        <div aria-labelledby="recent-tab" class="tab-pane fade" id="recent"
                                            role="tabpanel">
                                             @forelse ($recentPosts as $recent)
                                             <article class="post mb-3 border-b pb-3">
                                                <div class="s-content d-flex align-items-center justify-space-between">
                                                    <div class="sidebar-image w-25 me-3">
                                                        <a href="#"><img src="{{ $recent->postImage() }}"
                                                                alt=""></a>
                                                    </div>
                                                    <div class="content-list w-75">
                                                        <h5 class="mb-1">
                                                            <a href="{{ route('blog.details', $post) }}">
                                                                {{$recent->title}}
                                                            </a>
                                                        </h5>
                                                        <div class="date">{{ date_format($recent->created_at, 'd, M Y') }}</div>
                                                    </div>
                                                </div>
                                            </article>
                                             @empty
                                                 No recent Post
                                             @endforelse
                                           

                                           

                                          
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- blog Ends -->
