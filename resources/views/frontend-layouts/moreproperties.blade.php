 <!-- Trending Starts -->
 <section class="trending">
     <div class="container">
         <div class="section-title mb-6 pb-1 w-75 mx-auto text-center">
             <h2 class="m-0">More Featured <span>Property</span></h2>
         </div>
         <div class="trend-box">
             <div class="row">
                 @forelse ($properties as $property)
                     <div class="col-lg-6 mb-2">
                         <div class="trend-item box-shadow p-3">
                             <div class="row">
                                 <div class="col-lg-4 col-md-4 pe-0">
                                     <div class="trend-image1">
                                         <img src="./app/public/{{ $property->cover_image }}" alt=""
                                             srcset="">
                                     </div>
                                 </div>
                                 <div class="col-lg-8 col-md-8">
                                     <div class="trend-content">
                                         <h5 class="theme">House</h5>
                                         <h4><a
                                                 href="{{ route('propertydetails', $property) }}">{{ $property->title }}</a>
                                         </h4>
                                         <div class="entry-meta d-flex align-items-center justify-content-between pb-1">
                                             <div class="entry-author">
                                                 <p>Start From<span
                                                         class="d-block theme fw-bold">N{{ number_format($property->price, 2) }}</span>
                                                 </p>

                                             </div>
                                             <div class="entry-metalist d-flex align-items-center">
                                                 <ul>
                                                     <li class="me-2"><i class="fa fa-eye"></i></li>
                                                     <li class="me-2"><i class="fa fa-heart"></i></li>
                                                 </ul>
                                             </div>
                                         </div>
                                         <ul class="d-flex align-items-center justify-content-between border-t pt-2">
                                             <li class="me-2"><i class="fa fa-eye"></i>
                                                 {{ $property->no_of_bedrooms }} Beds</li>
                                             <li class="me-2"><i class="fa fa-heart"></i>
                                                 {{ $property->no_of_bathrooms }} Baths</li>
                                             <li><i class="fa fa-comments"></i> {{ $property->size }} Sq Ft</li>
                                         </ul>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 @empty
                     No Propery yet
                 @endforelse


                 <div class="col-lg-12 text-center">
                     <a href="{{ route('property.list') }}" class="nir-btn">Load More</a>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- Trending Ends -->
