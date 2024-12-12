 <!-- blog starts -->
 <section class="blog">
     <div class="container">
         <div class="listing-main listing-main1 ps-5 pe-5">
             <form class="form-find d-lg-flex justify-content-between p-4 bg-grey borderall mb-4">
                @csrf
                 <div class="form-group me-2">
                     <div class="input-box">
                         <select class="niceSelect">
                            <option value="">Locations</option>
                             <option value="lugbe">Lugbe</option>
                             <option value="wuse 2">Wuse 2</option> 
                             <option value="asokoro">Asokoro</option> 
                         </select>
                     </div>
                 </div>
                 <div class="form-group me-2">
                     <div class="input-box">
                         <select class="niceSelect">
                             <option value="1">All Types</option>
                             <option value="2">Apartment</option>
                             <option value="3">Shortlets</option>
                             <option value="4">PG/Co-living</option> 
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
             <div class="listing-inner">
                 <div class="list-results d-flex align-items-center justify-content-between">
                     <div class="list-results-sort">
                         <p class="m-0">Showing {{ $properties->currentPage() }} of {{ $properties->total() }} results</p>
                     </div>
       
                 </div>

                 @foreach ($properties as $property)
                     <div class="blog-full mb-4 border-b pb-4">
                         <div class="row">
                             <div class="col-lg-5 col-md-4">
                                 <div class="blog-image">
                                     <img src="./app/public/{{ $property->cover_image}}" alt="{{ $property->title }}" srcset="">
                                 </div>
                             </div>
                             <div class="col-lg-7 col-md-8">
                                 <div class="blog-content">
                                     <h5 class="theme mb-2">{{ $property->location['location_name'] }}</h5>

                                     <h3 class="mb-2"><a href="{{ route('propertydetails', $property) }}" class="">{{ $property->title }}</a></h3>
                                     <div class="d-flex align-items-center justify-content-between border-b pb-1 mb-2">
                                         <div class="entry-price">
                                             Start From<span class="d-block theme fw-bold">N{{ number_format($property->price, 2) }}</span>
                                         </div>
                                         <div class="entry-metalist d-flex align-items-center">
                                             <ul>
                                                 <li class="me-2"><i class="fa fa-eye"></i></li>
                                                 <li class="me-2"><i class="fa fa-heart"></i></li>
                                             </ul>
                                         </div>
                                     </div>
                                     <p class="mb-2"> {{ $property->shortBody() }}</p>
                                     <ul class="d-flex align-items-center justify-content-between bg-grey p-3 px-4">
                                         <li class="me-2"><i class="fa fa-eye"></i> {{ $property->no_of_bedrooms }} Beds</li>
                                         <li class="me-2"><i class="fa fa-heart"></i>  {{ $property->no_of_bathrooms }}  Baths</li>
                                         <li><i class="fa fa-comments"></i> {{ $property->size }} Sq Ft</li>
                                     </ul>
                                 </div>
                             </div>
                         </div>
                     </div>
                 @endforeach





 
                 <div class="pagination-main text-center">

                    {{ $properties->links() }}
               
                     {{--<ul class="pagination">
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
 <!-- blog Ends -->
