@extends('layouts.frontend')
@section('content')
    @include('frontend-layouts.header')

    <div class="row">
        <div class="col-lg-6 offset-lg-3 mb-3">
            <h4>Submit your details & our property management partners will call you back.</h4>
            <form action="{{ route('propertymanager.store') }}" class="border p-4 m-4"
                style="border-radius: 10px; background-color: #f3f3f3" method="post">
                @csrf
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" id="name">
                            @error('name')
                                <span class="text-danger" style="font-size: 10px;">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="name">Email Address</label>
                            <input type="email" name="email" class="form-control" id="name">
                            @error('email')
                                <span class="text-danger" style="font-size: 10px;">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="text" name="phone" id="phone" class="form-control">
                            @error('phone')
                                <span class="text-danger" style="font-size: 10px;">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="location">State</label>
                            <select name="state_id" id="" class="form-group">
                                <option value="">Select State</option>
                                @foreach ($states as $state)
                                    <option value="{{ $state->id }}">{{ $state->name }}</option>
                                @endforeach
                            </select>
                            @error('state_id')
                                <span class="text-danger" style="font-size: 10px;">
                                    <p>Please Select your state</p>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <fieldset class="form-group">
                            <legend class="mt-4">Select Vendor</legend>
                            @foreach ($vendors as $vendor)
                                <div class="form-check">
                                    <input class="form-check-input" name="vendor_id" type="checkbox"
                                        value="{{ $vendor->id }}" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        {{ $vendor->name }}
                                    </label>
                                </div>
                            @endforeach

                        </fieldset>
                        @error('vendor_id')
                            <p>Select a Vendor Please</p>
                        @enderror
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-12">
                        <label for="">Type Of Apartment</label>
                        <select name="type_of_house" id="">
                            <option value="">Select Type of apartment</option>
                            <option value="1 bedrooms">1 bedroom</option>
                            <option value="2 bedrooms">2 bedroom</option>
                            <option value="3 bedrooms">3 bedroom</option>
                            <option value="4 bedrooms">4 bedroom</option>
                            <option value="5 bedroom">5 bedroom</option>
                        </select>
                        @error('type_of_house')
                            <p>Please Select your Type of House</p>
                        @enderror
                    </div>
                </div>


                <div class="row mt-3">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="budget">Expected Rent</label>
                            <input type="text" name="expected_rent" class="form-control" id="budget">
                            @error('expected_rent')
                                <p>What is your expected Rent?</p>
                            @enderror
                        </div>

                    </div>
                </div>
                <div class="row mt-3 mb-3">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="">Comment</label>
                            <textarea name="comments" class="form-control" id="" cols="30" rows="10"></textarea>
                        </div>
                    </div>

                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary px-5 py-2 w-100">Submit</button>
                </div>
            </form>
        </div>
    </div>
    @include('frontend-layouts.footer')
@endsection
