    <!-- Trending Starts -->

    <section class="trending bg-grey">
        <div class="container">
            <div class="section-title mb-6 pb-1 w-75 mx-auto text-center">
                <h2 class="m-0">Our Best <span>Deals</span></h2>
            </div>
            <div class="trend-box">
                <div class="row">
                    <div class="col-lg-5 mb-4">
                        <div class="trend-item box-shadow rounded bg-white mb-4">
                            <div class="trend-image">
                                <img src="./app/public/{{ $top_deals[0]->cover_image }}" alt="image">
                                <a href="#" class="flash bg-theme1 white px-3 py-2"><i
                                        class="fa fa-flash"></i></a>

                            </div>
                            <div class="trend-content p-4 pb-2">
                                <h5 class="theme">{{ $top_deals[0]->category['name'] }}</h5>
                                <h4><a href="#">{{ $top_deals[0]->title }}</a></h4>
                                <div
                                    class="entry-meta d-flex align-items-center justify-content-between border-b pb-1 mb-2">
                                    <div class="entry-author">
                                        <p>Start From<span
                                                class="d-block theme fw-bold">N{{ number_format($top_deals[0]->price, 2) }}</span>
                                        </p>

                                    </div>
                                    <div class="entry-metalist d-flex align-items-center">
                                        <ul>
                                            <li class="me-2"><a href="#"><i class="fa fa-eye"></i></a></li>
                                            <li class="me-2"><a href="#"><i class="fa fa-heart"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <ul class="d-flex align-items-center justify-content-between">
                                    <li class="me-2"><i class="fa fa-eye"></i> 3 Beds</li>
                                    <li class="me-2"><i class="fa fa-heart"></i> 2 Baths</li>
                                    <li><i class="fa fa-comments"></i> 600 Sq Ft</li>
                                </ul>
                            </div>
                        </div>
                        <div class="trend-item box-shadow rounded bg-white">
                            <div class="trend-image">
                                <img src="{{ asset('images/g3gjfzaEavYLXfBZeCjDdpCXKkzy5d-metaSU1HLTIwMjMwNDIxLVdBMDAwMy5qcGc=-.jpg') }}"
                                    alt="image">
                                <a href="#" class="flash bg-theme1 white px-3 py-2"><i
                                        class="fa fa-flash"></i></a>

                            </div>
                            <div class="trend-content p-4 pb-2">
                                <h5 class="theme">{{ $top_deals[1]->category['name'] }}</h5>
                                <h4><a href="#">{{ $top_deals[1]->title }}</a></h4>
                                <div
                                    class="entry-meta d-flex align-items-center justify-content-between border-b pb-1 mb-2">
                                    <div class="entry-author">
                                        <p>Start From<span
                                                class="d-block theme fw-bold">N{{ number_format($top_deals[0]->price, 2) }}</span>
                                        </p>

                                    </div>
                                    <div class="entry-metalist d-flex align-items-center">
                                        <ul>
                                            <li class="me-2"><a href="#"><i class="fa fa-eye"></i></a></li>
                                            <li class="me-2"><a href="#"><i class="fa fa-heart"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <ul class="d-flex align-items-center justify-content-between">
                                    <li class="me-2"><i class="fa fa-eye"></i> 3 Beds</li>
                                    <li class="me-2"><i class="fa fa-heart"></i> 2 Baths</li>
                                    <li><i class="fa fa-comments"></i> 600 Sq Ft</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">

                        <div class="row">
                            @forelse ($top_deals as $top)
                                <div class="col-lg-6 col-md-6 col-sm-6 mb-4">
                                    <div class="trend-item box-shadow rounded bg-white">
                                        <div class="trend-image">
                                            <img src="images/trending/trending1.jpg" alt="image">
                                            <a href="#" class="flash bg-theme1 white px-3 py-2"><i
                                                    class="fa fa-flash"></i></a>

                                        </div>
                                        <div class="trend-content p-4 pb-2">
                                            <h5 class="theme">Villa</h5>
                                            <h4><a href="detail-rightside.html">Fully furnished 4bedrooms terrace
                                                    Duplex</a>
                                            </h4>
                                            <div
                                                class="entry-meta d-flex align-items-center justify-content-between border-b pb-1 mb-2">
                                                <div class="entry-author">
                                                    <p>Start From<span class="d-block theme fw-bold">N20,000.00</span>
                                                    </p>

                                                </div>
                                                <div class="entry-metalist d-flex align-items-center">
                                                    <ul>
                                                        <li class="me-2"><i class="fa fa-eye"></i></li>
                                                        <li class="me-2"><i class="fa fa-heart"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <ul class="d-flex align-items-center justify-content-between">
                                                <li class="me-2"><i class="fa fa-eye"></i> 3 Beds</li>
                                                <li class="me-2"><i class="fa fa-heart"></i> 2 Baths</li>
                                                <li><i class="fa fa-comments"></i> 600 Sq Ft</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                nothing dey
                            @endforelse

                        </div>
                    </div>
                </div>
                <div class="trend-btn text-center"><a href="#" class="nir-btn">View All Listings</a></div>
            </div>
        </div>
    </section>
    <!-- Trending Ends -->
