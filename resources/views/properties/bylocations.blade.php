@extends('layouts.frontend')
@section('content')
    @include('frontend-layouts.preloader')
    @include('frontend-layouts.header')
    @include('headers.otherpages_header')

    <section class="blog">
        <div class="container">
            <div class="listing-main listing-main1 ps-5 pe-5">
                <h4 class="text-left">{{ $location->location_name }} Properties</h4>
                {{--   <form class="form-find d-lg-flex justify-content-between p-4 bg-grey borderall mb-4">
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
                </form> --}}
                <div class="listing-inner">

                    @forelse ($location->properties as $property)
                        <div class="blog-full mb-4 border-b pb-4">
                            <div class="row">
                                <div class="col-lg-5 col-md-4">
                                    <div class="blog-image">
                                        <img src="{{ $property->propertyImage() }}"
                                            alt="{{ $property->location->location_name }}">
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-8">
                                    <div class="blog-content">
                                        <h5 class="theme mb-2">Villa</h5>

                                        <h3 class="mb-2"><a
                                                href="{{ route('propertydetails', $property) }}">{{ $property->title }}</a>
                                        </h3>
                                        <div class="d-flex align-items-center justify-content-between border-b pb-1 mb-2">
                                            <div class="entry-price">
                                                Start From<span
                                                    class="d-block theme fw-bold">N{{ number_format($property->price, 2) }}</span>
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
                                            <li class="me-2"><i class="fa fa-eye"></i> {{ $property->no_of_bedrooms }}
                                                Beds</li>
                                            <li class="me-2"><i class="fa fa-heart"></i> {{ $property->no_of_bathrooms }}
                                                Baths</li>
                                            <li><i class="fa fa-comments"></i> {{ number_format($property->size) }} Sq Ft
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        No Property for this Location yet
                    @endforelse

                    {{-- <div class="pagination-main text-center">
                        <ul class="pagination">
                            <li><a href="#"><i class="fa fa-angle-double-left" aria-hidden="true"></i></a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li>
                        </ul>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>
    <!-- blog Ends -->

    @include('frontend-layouts.footer')
@endsection
