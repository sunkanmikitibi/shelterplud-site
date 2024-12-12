@extends('layouts.frontend')
@section('content')
    @include('frontend-layouts.header')
    <!-- about-us starts -->
    <section class="about-us pb-6">
        <div class="container">
            <div class="about-image-box">
                <div class="row d-flex align-items-center justify-content-between">
                    <div class="col-lg-7 col-sm-12 mb-4">
                        <div class="about-image p-3 box-shadow position-relative">
                            <img src="{{ asset('images/parkers.jpg') }}" alt="property Management" class="w-100">

                        </div>
                    </div>
                    <div class="col-lg-5 col-sm-12 mb-4">
                        <div class="p-5 m-5"
                            style="background-color: rgb(250, 249, 249); border: 1px solid #e8e8eb; border-radius:10px">
                            <div class="about-content">
                                <h2 class="theme d-inline-block">Your Moving Details</h2>



                                <form action="{{ route('parkers.store') }}" method="post">
                                    @csrf
                                    <div class="form-group mt-4">

                                        <select name="location_from" class="form-select">
                                            <option value="">Relocation From</option>
                                            <optgroup label="Within Abuja">
                                                @foreach ($locations as $location)
                                                    <option value="{{ $location->id }}">{{ $location->location_name }}
                                                    </option>
                                                @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group mt-4">

                                        <select name="location_to" class="form-select">
                                            <option value="">Relocation to</option>
                                            <optgroup label="Within Abuja">
                                                @foreach ($locations as $location)
                                                    <option value="{{ $location->id }}">{{ $location->location_name }}
                                                    </option>
                                                @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group mt-4">
                                        <input type="date" class="form-control" placeholder="Tentative Date of Movement"
                                            name="date_of_movement" id="">
                                    </div>

                                    <div class="form-group mt-4">
                                        <textarea name="comment" id="" cols="30" rows="10"></textarea>
                                    </div>

                                    <div class="form-group mt-4 mb-2">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block">Request a
                                            Quote</button>
                                    </div>
                                </form>


                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- about-us ends -->

    @include('frontend-layouts.parkerservices')
@endsection
