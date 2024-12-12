<!-- form main starts -->
<div class="form-main">
    <div class="container">
        <div class="form-content">
            <div class="form-navtab text-center">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                            type="button" role="tab" aria-controls="home" aria-selected="true">Buy</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                            type="button" role="tab" aria-controls="profile" aria-selected="false">Rent</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                            type="button" role="tab" aria-controls="profile" aria-selected="false">Sale</button>
                    </li>
                </ul>
            </div>

            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <form action="{{ route('searchproperty') }}" method="POST">                      
                            @csrf
                        <div class="row d-flex align-items-center justify-content-between">
                            <div class="col-lg-3 col-md-6">
                                <div class="form-group mb-2">
                                    <label>Search Property</label>
                                    <div class="input-box">
                                        <input type="text" name="property" placeholder="Search Property" class="ps-3">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="form-group mb-2">
                                    <label>Location</label>
                                    <div class="input-box">
                                        <select name="location" class="niceSelect ps-3">
                                            @forelse ($locations as $location)
                                                <option value="{{ $location->id }}">{{ $location->location_name }}
                                                </option>
                                            @empty
                                                <option>Select From Location</option>
                                            @endforelse
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="form-group mb-2">
                                    <label>Property Type</label>
                                    <div class="input-box">
                                        <select name="category" class="niceSelect ps-3">
                                            @foreach ($propertytypes as $type)
                                                <option value="{{ $type->id }}">{{ $type->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="form-group mb-2">
                                    <label>Bedrooms</label>
                                    <div class="input-box">
                                        <select name="bedroom" class="niceSelect ps-3">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="form-group mb-0">
                                    <label>Size(.sq ft)</label>
                                    <div class="input-box">
                                        <input type="text" name="size" placeholder="Type Size(.sq ft)" class="ps-3">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group mb-0 mt-4">
                                    <button class="nir-btn w-100" type="submit"> Search
                                        Now </button>
                                    
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="row d-flex align-items-center justify-content-between">
                        <div class="col-lg-3 col-md-6">
                            <div class="form-group mb-2">
                                <label>Search Property</label>
                                <div class="input-box">
                                    <input type="text" placeholder="Search Property" class="ps-3">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="form-group mb-2">
                                <label>Location</label>
                                <div class="input-box">
                                    <select class="niceSelect ps-3">
                                        @forelse ($locations as $location)
                                            <option value="{{ $location->id }}">{{ $location->location_name }}</option>
                                        @empty
                                            <option>Select From Location</option>
                                        @endforelse
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="form-group mb-2">
                                <label>Property Type</label>
                                <div class="input-box">
                                    <select class="niceSelect ps-3">
                                        @foreach ($propertytypes as $type)
                                            <option value="{{ $type->id }}">{{ $type->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="form-group mb-2">
                                <label>Bedrooms</label>
                                <div class="input-box">
                                    <select class="niceSelect ps-3">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="form-group mb-0">
                                <label>Size(.sq ft)</label>
                                <div class="input-box">
                                    <input type="text" placeholder="Type Size(.sq ft)" class="ps-3">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">

                        </div>
                        <div class="col-lg-3">
                            <div class="form-group mb-0 mt-4">
                                <a href="#" class="nir-btn w-100"><i class="fa fa-search mr-2"></i> Search
                                    Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- form main ends -->
