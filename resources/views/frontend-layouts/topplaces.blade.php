 <!-- trending-topic starts -->
 <section class="trending-topic pb-6">
     <div class="container">
         <div class="section-title mb-6 pb-1 w-75 mx-auto text-center">
             <h2 class="m-0">Popular<span> Locations</span></h2>
             {{-- <p>Loremipsumdolorsitamet,consecteturadipiscingelit.</p> --}}
         </div>
         <div class="trending-topic-main">

             <div class="row shop-slider">


                 @foreach ($locations as $location)
                     <div class="col-lg-3 col-md-6 mb-2">

                         <div class="trending-topic-item box-shadow before-none">
                             <div class="trending-topic-image overflow-hidden">
                                 @if ($location->location_image == null)
                                     <img src="{{ asset('images/mockup3.png') }}" alt="{{ $location->location_name }}">
                                 @else
                                     <img src="./storage/{{ $location->location_image }}"
                                         alt="{{ $location->location_name }}">
                                 @endif


                             </div>
                             <div class="trending-topic-title p-3 bg-white w-100 d-inline-block">
                                 <h5 class="mb-1">
                                     <a
                                         href="{{ route('location.properties', $location) }}">{{ $location->location_name }}</a>
                                 </h5>
                                 <p class="mb-0">{{ $location->properties->count() }}</p>
                             </div>
                         </div>


                     </div>
                 @endforeach

             </div>
         </div>
     </div>
 </section>
 <!-- trending-topic ends -->
