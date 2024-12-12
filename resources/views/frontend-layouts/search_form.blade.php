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
                        <button class="nav-link" id="rent-tab" data-bs-toggle="tab" data-bs-target="#rent"
                            type="button" role="tab" aria-controls="profile" aria-selected="false">Rent</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pgco-tab" data-bs-toggle="tab" data-bs-target="#pgco"
                            type="button" role="tab" aria-controls="pgco"
                            aria-selected="false">PG/Co-Living</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="shortlets-tab" data-bs-toggle="tab" data-bs-target="#shortlets"
                            type="button" role="tab" aria-controls="shortlets"
                            aria-selected="false">Shortlets</button>
                    </li>
                </ul>
            </div>

            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <form action="{{ route('searchproperty') }}" method="POST">
                        @csrf
                        <div class="row d-flex align-items-center justify-content-between">
                            <div class="col-lg-10 col-md-12 col-sm-6">
                                <div class="form-group">
                                        <input type="text" name="property" placeholder="Search Property for Sale"
                                            class="form-control">
                                   
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <div class="form-group">

                                    <button class="nir-btn w-100" type="submit"> Search
                                         </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="tab-pane fade" id="rent" role="tabpanel" aria-labelledby="rent-tab">
                    <form action="{{ route('searchproperty') }}" method="POST">
                        @csrf   
                         <div class="row d-flex align-items-center justify-content-between">
                        <div class="col-lg-10 col-md-12 col-sm-6">
                            <div class="form-group">
                                <div class="input-box">
                                    <input type="text" placeholder="Search Property for Rent" name="propertyrent" class="form-control">
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-2">
                            <div class="form-group">
                                <button class="nir-btn w-100" type="submit"> Search
                                  </button>
                            </div>
                        </div>
                    </div></form>
               
                </div>

                <div class="tab-pane fade" id="pgco" role="tabpanel" aria-labelledby="pgco-tab">
                    <div class="row d-flex align-items-center justify-content-between">
                        <div class="col-lg-10 col-md-10 col-sm-6">
                            <div class="form-group">
                                <div class="input-box">
                                    <input type="text" placeholder="Search PG\CO-living" class="ps-3">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="form-group">
                                <button class="nir-btn w-100"> Search
                                   </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="shortlets" role="tabpanel" aria-labelledby="shortlets-tab">
                    <div class="row d-flex align-items-center justify-content-between">
                        <div class="col-lg-10 col-md-6">
                            <div class="form-group">
                                <div class="input-box">
                                    <input type="text" placeholder="Search Shorlets Property" class="ps-3">
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-2">
                            <div class="form-group">
                                <button class="nir-btn w-100" type="submit"> Search
                                  </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- form main ends -->
