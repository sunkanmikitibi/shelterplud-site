<section class="about-us pb-6">
    <div class="container">
        <div class="row d-flex align-items-center justify-content-between text-lg-start text-center">
            <div class="col-md-8 offset-md-2 col-sm-12 mb-4">
                <div class="about-content">
                    
                    <form action="{{ route('storeproperty') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-xs-12">
                                <div class="form-group">
                                    <div class="input-box">
                                        <label class="form-label">Title</label>
                                        <input type="text" name="title" class="form-control"
                                            placeholder="Type your title here">
                                        @error('title')
                                            <span class="text-sm text-danger">Title is Required</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-xs-12">
                                <div class="form-group">
                                    <div class="input-box">
                                        <label>Property Address</label>
                                        <input type="text" name="property_address" class="form-control"
                                            placeholder="Property Address">
                                        @error('address')
                                            <span class="text-sm text-danger">Address is Required</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-xs-12 mt-2">
                                <div class="form-group">
                                    <label>City</label>
                                    <input type="text" name="city" class="form-control" placeholder="city">
                                    @error('city')
                                        <span class="text-sm text-danger">City is Required</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-xs-12 mt-2">
                                <div class="form-group">
                                    <div class="input-box">
                                        <label>Location.</label>
                                        <Select name="location_id">
                                            <option value="">Select From Locations</option>
                                            @foreach ($locations as $location)
                                                <option value="{{ $location->id }}">{{ $location->location_name }}
                                                </option>
                                            @endforeach
                                        </Select>
                                        @error('location_id')
                                            <span class="text-sm text-danger">Location is Required</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-6 col-md-6 col-xs-12 mt-2">
                                <div class="form-group">
                                    <label>Type of Property</label>
                                    <Select name="type_id" class="">
                                        <option value="">Select Type of Property</option>
                                        @forelse ($types as $type)
                                            <option value="{{ $type->id }}">{{ $type->name }}</option>
                                        @empty
                                            none
                                        @endforelse
                                    </Select>
                                    @error('type_id')
                                        <span class="text-sm text-danger">Property Type is Required</span>
                                    @enderror
                                </div>
                            </div>


                            <div class="col-lg-6 col-md-6 col-xs-12 mt-2">
                                <div class="form-group">
                                    <label>Category of Property</label>
                                    <Select name="category_id">
                                        <option value="">Select Category of Property</option>
                                        @foreach ($categories as $cat)
                                            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                        @endforeach
                                    </Select>
                                    @error('category_id')
                                    <span class="text-sm text-danger">Please Select a Category for the Property</span>
                                @enderror
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-xs-12 mt-2">
                                <div class="form-group">
                                    <label>Select Features</label>
                                     
                                     <select class="form-select" id="select2" name="features[]" multiple="multiple">
                                        @foreach ($features as $feat)
                                            <option value="{{ $feat->id }}">
                                                {{ $feat->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    
                                  
                                    @error('features')
                                    <span class="text-sm text-danger">Features is Required</span>
                                @enderror

                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-xs-12 mt-2">
                                <div class="form-group">
                                    <label>Select Facility</label>

                                    <select class="form-select" id="facility" name="facilities[]" multiple="multiple">
                                        @foreach ($facilities as $facility)
                                            <option value="{{ $facility->id }}">
                                                {{ $facility->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('facilities')
                                    <span class="text-sm text-danger">Location is Required</span>
                                @enderror
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-xs-12 mt-2">
                                <div class="form-group">
                                    <label>Size</label>
                                    <input type="text" name="size" class="form-control">
                                    @error('size')
                                    <span class="text-sm text-danger">Size is Required</span>
                                @enderror
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-xs-12 mt-2">
                                <div class="form-group">
                                    <label>Price</label>
                                    <input type="number" name="price" class="form-control" />
                                    @error('price')
                                    <span class="text-sm text-danger">Location is Required</span>
                                @enderror
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-xs-12 mt-2">
                                <div class="form-group">
                                    <label>Bedrooms</label>
                                    <input type="number" class="form-control" name="no_of_bedrooms">
                                    @error('no_of_bedrooms')
                                    <span class="text-sm text-danger">Enter a value for number of bedrooms</span>
                                @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-xs-12 mt-2">
                                <div class="form-group">
                                    <label>Bathrooms</label>
                                    <input type="number" name="no_of_bathrooms" class="form-control">
                                    @error('no_of_bedrooms')
                                    <span class="text-sm text-danger">Enter a value for number of bathrooms</span>
                                    @enderror
                                </div>
                            </div>

                            <input type="hidden" name="company_id" value="1">
                            <input type="hidden" name="company_id" value="1">
                            <input type="hidden" name="featured" value="0">

                            

                            <div class="col-lg-6 col-md-6 col-xs-12 mt-2">
                                <div class="form-group mb-0">
                                    <label>Cover Photo</label>
                                    <div class="input-box">
                                        <label class="upload-file mb-0 w-100">
                                            <input type="file" name="cover_image" class="form-control m-0 w-100">
                                        </label>
                                        @error('cover_image')
                                        <span class="text-sm text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-12 mt-2">
                                <div class="form-group">
                                    <div class="input-box">
                                        <label>Description</label>
                                        <textarea id="desc" rows="8" class="form-control" name="description" placeholder="Description"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 mt-2">
                                <button type="submit" class="btn btn-md btn-outline-primary btn-block"><i
                                        class="fa fa-plus"></i> Add Property</button>
                            </div>

                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</section>
