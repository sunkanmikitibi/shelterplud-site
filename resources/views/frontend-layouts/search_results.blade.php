<section class="blog trending">
    <div class="container">
        <div class="listing-main listing-main1">
            <form class="form-find d-lg-flex justify-content-between p-4 bg-grey borderall mb-4">
                <div class="form-group me-2">
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
                <div class="form-group me-2">
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
                <div class="form-group me-2">
                    <div class="input-box">
                        <select class="niceSelect">
                            <option value="1">All Status</option>
                            <option value="2">For Rent</option>
                            <option value="3">For Sale</option>
                        </select>
                    </div> 
                </div>
                <div class="form-group me-2">
                    <div class="input-box">
                        <select class="niceSelect">
                            <option value="1">Bedrooms</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>  
                </div>
                <div class="form-group me-2">
                    <div class="input-box">
                        <select class="niceSelect">
                            <option value="1">Bathrooms</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>  
                </div>
                <div class="form-group text-center w-100">
                    <input type="submit" class="nir-btn w-100" id="submit3" value="Search">
                </div>
            </form>
            <div class="trend-box">
                <div class="list-results d-flex align-items-center justify-content-between">
                    <div class="list-results-sort">
                        <p class="m-0">Showing 1-5 of 80 results</p>
                    </div>
                    <div class="click-menu d-flex align-items-center justify-content-between">
                        <div class="change-list me-2"><a href="listing-leftfilter.html"><i class="fa fa-bars"></i></a></div>
                        <div class="change-grid f-active me-2"><a href="grid-leftfilter.html"><i class="fa fa-th"></i></a></div>
                        <div class="sortby d-flex align-items-center justify-content-between ml-2">
                            <select class="niceSelect">
                                <option value="1" >Sort By</option>
                                <option value="2">Average rating</option>
                                <option value="3">Price: low to high</option>
                                <option value="4">Price: high to low</option>
                            </select> 
                        </div>
                    </div>
                </div>
                <div class="row">
                    @forelse ($properties as $property)                     
                    <div class="col-lg-4 col-md-6 mb-4">
       
                        <div class="trend-item box-shadow rounded">
                            <div class="trend-image">
                                <img src="./storage/{{ $property->cover_image }}" alt="image">
                                <a href="#" class="flash bg-theme1 white px-3 py-2"><i class="fa fa-flash"></i></a>
                                <div class="trend-meta d-flex align-items-center justify-content-between">
                                    <div class="entry-author">
                                        <img src="images/reviewer/2.jpg" alt="" class="rounded-circle me-1">
                                        <span>Jenny Lofar</span>
                                    </div>
                                    <a href="grid-leftfilter.html" class="tags bg-theme2 white px-3 py-1">{{ $property->type['name'] }}</a>
                                </div>
                            </div>
                            <div class="trend-content p-4">
                                <h5 class="theme">{{ $property->category['name'] }}</h5>
                                <h4><a href="{{ route('propertydetails', $property->id) }}">{{ $property->title }} </a></h4>
                                <div class="entry-meta d-flex align-items-center justify-content-between border-b pb-1 mb-2">
                                    <div class="entry-author">
                                        <p>Start From<span class="d-block theme fw-bold">{{ number_format($property->price, 2) }}</span></p>
                                        
                                    </div>
                                    <div class="entry-metalist d-flex align-items-center">
                                        <ul>
                                            <li class="me-2"><i class="fa fa-eye"></i></li>
                                             <li class="me-2"><i class="fa fa-heart"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <p class="mb-0">{{ $property->shortBody() }}</p>
                                
                            </div>
                            <ul class="d-flex align-items-center justify-content-between bg-grey p-3 px-4">
                                <li class="me-2"><i class="fa fa-eye"></i> 3 Beds</li>
                                <li class="me-2"><i class="fa fa-heart"></i> 2 Baths</li>
                                <li><i class="fa fa-comments"></i> 600 Sq Ft</li>
                            </ul>
                        </div>
                    </div>
                @empty
                    <strong>No result</strong>
                @endforelse
                 
                 
                </div>
                <div class="pagination-main text-center">
                     
                  {{--  <ul class="pagination">
                        <li><a href="#"><i class="fa fa-angle-double-left" aria-hidden="true"></i></a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li>
                    </ul>--}}
                </div>
            </div>
        </div>
    </div>
</section>