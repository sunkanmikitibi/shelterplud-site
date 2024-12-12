<!-- blog starts -->
<section class="blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="detail-maintitle border-b pb-4 mb-4">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-lg-8">
                            <ul class="detail-inline d-flex align-items-center mb-2">
                                <li class="detail-inline-item bg-theme1 px-4 py-1 white me-3">Featured</li>
                                <li class="detail-inline-item bg-theme px-4 py-1 white me-3">
                                    {{ $property->type['name'] }}</li>
                                <li class="detail-inline-item"><i
                                        class="fa fa-clock me-1"></i>{{ $property->created_at->diffForHumans() }}
                                </li>
                            </ul>
                            <div class="detail-maintitle-in">
                                <h2 class="mb-1">{{ $property->title }}</h2>
                                <p><i class="fa fa-map-marker-alt me-2"></i>{{ $property->location->location_name }}</p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="entry-price text-lg-end text-start">
                                <h3 class="mb-0"><span class="d-block theme fs-5 fw-normal">Start From</span>
                                    N{{ number_format($property->price, 2) }}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="blog-single">

                    <div class="blog-wrapper">

                        <div class="blog-content first-child-cap">
                            <div class="position-relative mb-3">
                                <img src="{{ url('app/public/' . $property->cover_image) }}" alt="image">
                            </div>
                            <p class="mb-3"> {!! $property->description !!}</p>


                        </div>

                        <div class="property-detail mb-4 bg-lgrey p-4 border">
                            <h4 class="border-b pb-2">Property Details</h4>
                            <div class="row">
                                <div class="col-lg">
                                    <ul class="pro-inline-item">
                                        <li class="d-block fw-bold lh-lg">Property ID : <span
                                                class="fw-normal float-end">HZ27</span></li>
                                        <li class="d-block fw-bold lh-lg">Price : <span
                                                class="fw-normal float-end">N{{ number_format($property->price, 2) }}</span>
                                        </li>
                                        <li class="d-block fw-bold lh-lg">Property Size : <span
                                                class="fw-normal float-end">{{ $property->size }} Sq Ft</span></li>

                                </div>
                                <div class="col-lg">
                                    <ul class="pro-inline-item">
                                        <li class="d-block fw-bold lh-lg">Bedrooms : <span
                                                class="fw-normal float-end">{{ $property->no_of_bedrooms }}</span></li>
                                        <li class="d-block fw-bold lh-lg">Bathrooms : <span
                                                class="fw-normal float-end">{{ $property->no_of_bathrooms }}</span></li>
                                        <!--
                                            <li class="d-block fw-bold lh-lg">Garage  : <span class="fw-normal float-end">Yes</span></li>
                                            <li class="d-block fw-bold lh-lg">Parking : <span class="fw-normal float-end">Yes</span></li>
                                            -->
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="blog-imagelist mb-4">
                            <div class="row">
                                @forelse ($property->getMedia('gallery') as $photo)
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <img src="{{ $photo->getUrl() }}" alt="image">
                                    </div>
                                @empty
                                    No Photo Here
                                @endforelse
                                {{-- <div class="col-md-6 col-sm-6 col-xs-12">
                                    <img src="{{ $property->getFirstMedia('gallery')->getUrl() }}" alt="image">
                                </div> --}}
                            </div>
                        </div>


                    </div>


                    <!-- blog comment list -->
                    <div class="single-comments single-box mb-4">


                    </div>
                    <div class="bigyapan mb-4">
                        <a href="#"><img src="{{ asset('images/bigyapan1.jpg') }}" alt=""></a>
                    </div>




                    <!-- blog review -->
                    <div class="single-add-review">
                        <h4 class="">Write a Review</h4>
                        <form action="{{ route('reviews.store', $property) }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group mb-2">
                                        <input name="name" type="text" placeholder="Name">
                                        @error('name')
                                            <span style="font-size: 10px; color: red;">Name is Required</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-2">
                                        <input name="email" type="email" placeholder="Email">
                                        @error('email')
                                            <span style="font-size: 10px; color: red;">Email is Required</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-1">
                                    <div class="form-group">
                                        <textarea name="body" class="form-control"> </textarea>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-btn">
                                        <button type="submit" class="nir-btn">Submit Review</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- sidebar starts -->
            <div class="col-lg-4 col-md-12">
                <div class="sidebar-sticky">
                    <div class="list-sidebar">
                        <div class="sidebar-item mb-4 box-shadow p-4">
                            <h3>Listed By</h3>
                            <div class="author-news-content d-flex align-items-center">
                                <div class="author-thumb1 w-25">

                                    <img src="{{ url('storage/' . $property->company->company_logo) }}" alt="author">
                                </div>
                                <div class="author-content w-75 ps-4">
                                    <h4 class="title mb-1"><a href="#">{{ $property->company->company_name }}</a>
                                    </h4>
                                    <p class="mb-1">
                                        {{ $property->company->phone }}<br>{{ $property->company->email }}</p>
                                    <a href="#">View all listings</a>
                                </div>
                            </div>
                        </div>

                        <div class="sidebar-item mb-4 box-shadow p-4 text-centerb">
                            <div class="card">
                                <div class="card-header bg-success">
                                    <h2 style="color: #fff">Enquiry Form</h2>
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('enquiry.store', $property) }}" method="POST">
                                        @csrf
                                        <div class="form-group mt-2">
                                            <label>Name:</label>
                                            <input type="text" name="name" class="form-control" id="name"
                                                required>
                                            @error('name')
                                                <span class="text-sm text-danger">Name is Required</span>
                                            @enderror
                                        </div>
                                        <div class="form-group mt-2">
                                            <label>Email:</label>
                                            <input type="email" name="email" class="form-control"
                                                id="email">
                                            @error('email')
                                                <span class="text-sm text-danger">Email is Required</span>
                                            @enderror
                                        </div>
                                        <div class="form-group mt-2">
                                            <label>Phone:</label>
                                            <input type="text" name="phone" class="form-control"
                                                id="phone">
                                        </div>
                                        <div class="form-group mt-2">
                                            <label for="message">Message</label>
                                            <textarea name="message" class="form-control" id="" cols="30" rows="10"></textarea>
                                        </div>
                                        <div class="form-group mt-2">
                                            <button type="submit" class="nir-btn w-100">Add Enquiry</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>


                        {{--     <div class="sidebar-item mb-4 box-shadow p-4 text-centerb">
                                <h3>Find your home</h3>
                                <form class="form-find">
                                    <div class="form-group mb-2">
                                        <input type="text" placeholder="Enter Keywords">
                                    </div>
                                    <div class="form-group mb-2">
                                        <div class="input-box">
                                            <select class="niceSelect">
                                                <option value="1">Locations</option>
                                                <option value="2">Boston</option>
                                                <option value="3">03</option>
                                                <option value="4">Chicago</option>
                                                <option value="5">Denver</option>
                                            </select>
                                        </div> 
                                    </div>
                                    <div class="form-group mb-2">
                                        <div class="input-box">
                                            <select class="niceSelect">
                                                <option value="1">All Types</option>
                                                <option value="2">Apartment</option>
                                                <option value="3">Villa</option>
                                                <option value="4">Flat</option>
                                                <option value="5">Rooms</option>
                                                <option value="5">House</option>
                                            </select>
                                        </div> 
                                    </div>
                                    <div class="form-group mb-2">
                                        <div class="input-box">
                                            <select class="niceSelect">
                                                <option value="1">All Status</option>
                                                <option value="2">For Rent</option>
                                                <option value="3">For Sale</option>
                                            </select>
                                        </div> 
                                    </div>
                                    <div class="form-group mb-2 d-flex justify-content-between">
                                        <div class="input-box w-50 me-1">
                                            <select class="niceSelect">
                                                <option value="1">Bedrooms</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select>
                                        </div> 
                                        <div class="input-box w-50 ms-1">
                                            <select class="niceSelect">
                                                <option value="1">Bathrooms</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select>
                                        </div>  
                                    </div>
                                    <div class="form-group mb-2">
                                        <div class="range-slider mt-0">
                                            <p class="text-start mb-2">Price Range</p>
                                            <div data-min="0" data-max="2000" data-unit="$" data-min-name="min_price" data-max-name="max_price" class="range-slider-ui ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" aria-disabled="false">
                                                <span class="min-value">500 $</span> 
                                                <span class="max-value">20000 $</span>
                                                <div class="ui-slider-range ui-widget-header ui-corner-all full" style="left: 0%; width: 100%;"></div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-2">
                                        <div class="range-slider mt-0">
                                            <p class="text-start mb-2">Area Size</p>
                                            <div data-min="0" data-max="2000" data-unit="$" data-min-name="min_price" data-max-name="max_price" class="range-slider-ui ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" aria-disabled="false">
                                                <span class="min-value">100 sqft</span> 
                                                <span class="max-value">20000 sqft</span>
                                                <div class="ui-slider-range ui-widget-header ui-corner-all full" style="left: 0%; width: 100%;"></div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="form-group text-center w-100">
                                        <input type="submit" class="nir-btn w-100" id="submit3" value="Search">
                                    </div>
                                </form>
                            </div> <div class="sidebar-item trending">
                                <h3 class="">Related Property</h3>
                                <div class="trend-box">
                                    <div class="about-slider">
                                        <div>
                                            <div class="trend-item box-shadow">
                                            <div class="trend-image">
                                                <img src="images/trending/trending2.jpg" alt="image">
                                                <a href="#" class="flash bg-theme1 white px-3 py-2"><i class="fa fa-flash"></i></a>
                                                <div class="trend-meta d-flex align-items-center justify-content-between">
                                                    <div class="entry-author">
                                                        <img src="images/reviewer/2.jpg" alt="" class="rounded-circle me-1">
                                                        <span>Jenny Lofar</span>
                                                    </div>
                                                    <a href="grid-leftfilter.html" class="tags bg-theme2 white px-3 py-1">For Rent</a>
                                                </div>
                                            </div>
                                            <div class="trend-content p-4">
                                                <h5 class="theme">Apartment</h5>
                                                <h4><a href="detail-rightside.html">7012 Shine Sehu Street, Liverpool London, LC345AC</a></h4>
                                                <div class="entry-meta d-flex align-items-center justify-content-between border-b pb-1 mb-2">
                                                    <div class="entry-author">
                                                        <p>Start From<span class="d-block theme fw-bold">$63,000.00</span></p>
                                                        
                                                    </div>
                                                    <div class="entry-metalist d-flex align-items-center">
                                                        <ul>
                                                            <li class="me-2"><i class="fa fa-eye"></i></li>
                                                            <li class="me-2"><i class="fa fa-heart"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <p class="mb-0">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum</p>
                                            </div>
                                            <ul class="d-flex align-items-center justify-content-between bg-grey p-3 px-4">
                                                <li class="me-2"><i class="fa fa-eye"></i> 3 Beds</li>
                                                <li class="me-2"><i class="fa fa-heart"></i> 2 Baths</li>
                                                <li><i class="fa fa-comments"></i> 600 Sq Ft</li>
                                            </ul>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="trend-item box-shadow">
                                            <div class="trend-image">
                                                <img src="images/trending/trending2.jpg" alt="image">
                                                <a href="#" class="flash bg-theme1 white px-3 py-2"><i class="fa fa-flash"></i></a>
                                                <div class="trend-meta d-flex align-items-center justify-content-between">
                                                    <div class="entry-author">
                                                        <img src="images/reviewer/2.jpg" alt="" class="rounded-circle me-1">
                                                        <span>Jenny Lofar</span>
                                                    </div>
                                                    <a href="grid-leftfilter.html" class="tags bg-theme2 white px-3 py-1">For Rent</a>
                                                </div>
                                            </div>
                                            <div class="trend-content p-4">
                                                <h5 class="theme">Villa</h5>
                                                <h4><a href="detail-rightside.html">1244 Vansh Market, Mise Mizkel Australia, AU456HA</a></h4>
                                                <div class="entry-meta d-flex align-items-center justify-content-between border-b pb-1 mb-2">
                                                    <div class="entry-author">
                                                        <p>Start From<span class="d-block theme fw-bold">$52,000.00</span></p>
                                                        
                                                    </div>
                                                    <div class="entry-metalist d-flex align-items-center">
                                                        <ul>
                                                            <li class="me-2"><i class="fa fa-eye"></i></li>
                                                            <li class="me-2"><i class="fa fa-heart"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <p class="mb-0">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum</p>
                                            </div>
                                            <ul class="d-flex align-items-center justify-content-between bg-grey p-3 px-4">
                                                <li class="me-2"><i class="fa fa-eye"></i> 3 Beds</li>
                                                <li class="me-2"><i class="fa fa-heart"></i> 2 Baths</li>
                                                <li><i class="fa fa-comments"></i> 600 Sq Ft</li>
                                            </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            
                            <div class="sidebar-item top-post">
                                <h3>Popular Destination</h3>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 mb-4">
                                        <div class="trend-item">
                                            <div class="trend-image">
                                                <img src="images/destination/destination13.jpg" alt="image">
                                                <div class="trend-content pt-2">
                                                    <h6 class="mb-0"><a href="listing-leftfilter.html">Los Angeles</a></h6>
                                                    <span>28 Properties</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 mb-4">
                                        <div class="trend-item">
                                            <div class="trend-image">
                                                <img src="images/destination/destination14.jpg" alt="image">
                                                <div class="trend-content pt-2">
                                                    <h6 class="mb-0"><a href="listing-leftfilter.html">New York</a></h6>
                                                    <span>45 Properties</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 mb-4">
                                        <div class="trend-item">
                                            <div class="trend-image">
                                                <img src="images/destination/destination15.jpg" alt="image">
                                                <div class="trend-content pt-2">
                                                    <h6 class="mb-0"><a href="listing-leftfilter.html">Florida</a></h6>
                                                    <span>32 Properties</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="trend-item">
                                            <div class="trend-image">
                                                <img src="images/destination/destination16.jpg" alt="image">
                                                <div class="trend-content pt-2">
                                                    <h6 class="mb-0"><a href="listing-leftfilter.html">Texas</a></h6>
                                                    <span>51 Properties</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            --}}



                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- blog Ends -->
