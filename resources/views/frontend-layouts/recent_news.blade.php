    <!-- top deal starts -->
    <section class="trending recent-articles pb-6 border-t pt-9">
        <div class="container">
            <div class="section-title mb-4 pb-1 w-75 mx-auto text-center">
                <h2 class="m-0">Recent News & <span>Articles</span></h2>
                <p>Read what's happening in Real Estate.</p>
            </div>
            <div class="recent-articles-inner">
                <div class="row">
                    @foreach ($posts as $news)
                        <div class="col-lg-4 mb-4">
                            <div class="trend-item box-shadow bg-white p-4">
                                <div class="trend-image">
                                    <img src="{{ $news->postImage() }}" alt="{{ $news->title }}">
                                </div>
                                <div class="trend-content-main pt-3">
                                    <div class="trend-content">
                                        <h5 class="theme">
                                            @foreach ($news->categories as $category)
                                                {{ $category->title, }}
                                            @endforeach
                                            </h5>
                                        <h4><a href="{{ route('blog.details', $news) }}">{{$news->title}}</a></h4>
                                        <p class="mb-3">
                                            {{ $news->shortBody() }}
                                        </p>
                                        <div class="entry-meta d-flex align-items-center justify-content-between">
                                            <div class="entry-author">
                                                <img src="{{ asset('images/reviewer/2.jpg') }}" alt=""
                                                    class="rounded-circle me-1">
                                                <span>{{ $news->user->name }}</span>
                                            </div>
                                            <div class="entry-metalist d-flex align-items-center">
                                               <p>
                                                {{ $news->created_at->format('d, M Y') }}
                                               </p>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
        </div>
    </section>
