@extends('layouts.frontend')
@section('content')
    @include('frontend-layouts.header')

    <div class="row">
        <div class="col-lg-6 offset-lg-3 mb-3">

            <h1>Home Interiors Details</h1>
            <form action="{{ route('homeinterior.store') }}" class="m-3 border p-4"
                style="background-color: #f3f3f3; border-radius:10px;" method="post">
                @csrf
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="fullname" class="form-control" id="name">
                            @error('fullname')
                                <span class="text-danger" style="font-size: 10px;">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="name">Email Address</label>
                            <input type="email" name="email" class="form-control" id="name">
                            @error('email')
                                <span class="text-danger" style="font-size: 10px;">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="text" name="phone" id="phone" class="form-control">
                            @error('phone')
                                <span class="text-danger" style="font-size: 10px;">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="location">Location</label>
                            <select name="location_id" id="" class="form-group">
                                <option value="">Select Location</option>
                                @foreach ($locations as $location)
                                    <option value="{{ $location->id }}">{{ $location->location_name }}</option>
                                @endforeach
                            </select>
                            @error('location_id')
                                <p class="text-danger" style="font-size: 10px">Location is Required</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="city">City</label>
                            <input type="text" name="city" class="form-control">
                            @error('city')
                                <span class="text-danger" style="font-size: 10px;">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-6">
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
                            <span class="text-danger" style="font-size: 10px;">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <fieldset class="form-group">
                            <legend>Scope of Work</legend>
                            <div class="form-check">
                                <input class="form-check-input" value="full home interior" type="radio"
                                    name="scope_of_work" id="flexRadioDefault1">
                                <label class="form-check-label">
                                    Full Home Interior
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="scope_of_work"
                                    value="Kitchen and wardrobes" id="flexRadioDefault2" checked>
                                <label class="form-check-label">
                                    Kitchen & Wardrobes
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="scope_of_work" value="kitchen"
                                    id="flexRadioDefault2" checked>
                                <label class="form-check-label">
                                    Only Kitchen
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="scope_of_work" value="other"
                                    id="flexRadioDefault2" checked>
                                <label class="form-check-label">
                                    Other
                                </label>
                            </div>
                        </fieldset>

                        @error('scope_of_work')
                            <span class="text-danger" style="font-size: 10px;">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="budget">Budget</label>
                            <input type="text" name="budget" class="form-control" id="budget">
                        </div>

                    </div>
                </div>


                <div class="row mt-3">
                    <div class="col-6">
                        <label for="">Type Of Apartment</label>
                        <select name="type_of_apartment" class="form-control">
                            <option value="">Select Type of apartment</option>
                            <option value="1 Bedroom">1 bedroom</option>
                            <option value="2 Bedroom">2 bedroom</option>
                            <option value="3 Bedroom">3 bedroom</option>
                            <option value="4 Bedroom">4 bedroom</option>
                            <option value="5 Bedroom">5 bedroom</option>
                        </select>
                    </div>

                    <div class="col-6">
                        <label for="">Possession Timelime</label>
                        <select name="possession_timeline" class="form-control">
                            <option value="">Select Timeline</option>
                            <option value="0 - 3 Months">0 - 3 Months</option>
                            <option value="3 - 6 Months">3 - 6 Months</option>
                            <option value="over 6 months">More than 6 Months</option>
                            <option value="Already Moved in">Already Moved in</option>
                        </select>
                    </div>
                </div>

                <div class="row mt-3 mb-3">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="">Comment</label>
                            <textarea name="comments" id="" cols="30" rows="10"></textarea>
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
