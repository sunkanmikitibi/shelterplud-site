@extends('layouts.frontend')
@section('content')
    @include('frontend-layouts.header')
    <!-- about-us starts -->
    <section class="about-us pb-6">
        <div class="container">
            <div class="about-image-box">
                <div class="row d-flex align-items-center justify-content-between">
                    <div class="col-lg-7 col-sm-12 mb-4">
                        <div class="about-image p-3 box-shadow">
                            <img src="{{ asset('images/9905534_4288663.jpg') }}" alt="property Management" class="w-100">
                        </div>
                    </div>
                    <div class="col-lg-5 col-sm-12 mb-4">
                        <div class="p-5 m-5"
                            style="background-color: rgb(250, 249, 249); border: 1px solid #e8e8eb; border-radius:10px">
                            <div class="about-content">
                                <h2 class="theme d-inline-block">How does it work?</h2>
                                <h4 class="border-b mb-2 pb-2">End to End Services for Landlords.</h4>

                                <div>
                                    <img src="{{ asset('images/1.svg') }}" alt="submit" srcset=""> Submit your
                                    details
                                </div>
                                <div>
                                    <img src="{{ asset('images/2.svg') }}" alt="submit" srcset=""> Our Experts will
                                    Call
                                    you
                                </div>

                                <div>
                                    <img src="{{ asset('images/3.svg') }}" alt="submit" srcset=""> Dedicated property
                                    manager manages your property
                                </div>
                                <div>
                                    <img src="{{ asset('images/4.svg') }}" alt="submit" srcset="">Flexible payment
                                    options and online dashboards
                                </div>

                                <div>

                                    <div class="m-3" style="text-align: center; font-size:14px; font-weight:700;"> And,
                                        yes
                                        all this with Shelterplug.com's trust</div>
                                    <div>
                                        <a href="{{ route('propertymanager.create') }}" style="font-size:20px"
                                            target="_blank" class="nir-btn w-100">Request Quote</a>
                                    </div>


                                </div>



                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- about-us ends -->

    @include('frontend-layouts.core_services')

    @include('frontend-layouts.footer')
@endsection
