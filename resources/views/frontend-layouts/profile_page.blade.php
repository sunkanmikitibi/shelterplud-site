
    <!-- Dashboard -->
    <div id="dashboard" class="pt-10 pb-10">
        <div class="container">
            <div class="dashboard-main">
                <div class="row">
                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                            @include('admin_layouts.dashboard_sidebar')
                    </div>
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">    
                        <div class="dashboard-content">
                            <div class="dashboard-form mb-4">
                                <div class="row">

                                    <!-- Profile -->
                                    <div class="col-lg-6 col-md-6 col-xs-12 padding-right-30">
                                        <div class="dashboard-list">
                                            <h4 class="gray">Profile Details</h4>
                                            <div class="dashboard-list-static">
                                                
                                                <!-- Avatar -->
                                                <div class="edit-profile-photo">
                                                    <img src="images/user-avatar.jpg" alt="">
                                                    <div class="change-photo-btn">
                                                        <div class="photoUpload">
                                                            <span><i class="fa fa-upload"></i> Upload Photo</span>
                                                            <input type="file" class="upload" />
                                                        </div>
                                                    </div>
                                                </div>
                            
                                                <!-- Details -->
                                                <div class="my-profile">
                                                    <div class="form-group mb-2">
                                                        <label>Your Name *</label>
                                                        <input value="Tom Perrin" type="text">
                                                    </div>                    
                                                    <div class="form-group mb-2">
                                                        <label>Phone Number *</label>
                                                        <input value="(123) 123-456" type="text">
                                                    </div>

                                                    <div class="form-group mb-2">
                                                        <label>Email Address *</label>
                                                        <input value="tom@example.com" type="text">
                                                    </div>

                                                    <div class="form-group mb-2">
                                                        <label>Your Bio *</label>
                                                        <textarea name="notes" id="notes" cols="30" rows="10">Maecenas quis consequat libero, a feugiat eros. Nunc ut lacinia tortor morbi ultricies laoreet ullamcorper phasellus semper</textarea>
                                                    </div>

                                                    <div class="form-group mb-2">
                                                        <label class="twitter-input"><i class="fab fa-twitter"></i> Twitter</label>
                                                        <input placeholder="https://www.twitter.com/" type="text">
                                                    </div>

                                                    <div class="form-group mb-2">
                                                        <label class="fb-input"><i class="fab fa-facebook"></i> Facebook</label>
                                                        <input placeholder="https://www.facebook.com/" type="text">
                                                    </div>

                                                </div>
                            
                                                <div class="form-btn">
                                                    <a href="#" class="nir-btn">SAVE CHANGE</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <!-- Change Password -->
                                    <div class="col-lg-6 col-md-6 col-xs-12 padding-left-30">
                                        <div class="dashboard-list margin-top-0">
                                            <h4 class="gray">Your Address</h4>
                                            <div class="dashboard-list-static">

                                                <!-- Change Password -->
                                                <div class="my-profile">
                                                    <div class="form-group mb-2">
                                                        <label>Company Name</label>
                                                        <input type="text">
                                                    </div>

                                                    <div class="form-group mb-2">
                                                        <label>Address *</label>
                                                        <input type="text">
                                                    </div>

                                                    <div class="form-group mb-2">
                                                        <label>Zip Code *</label>
                                                        <input type="text">
                                                    </div>

                                                    <div class="form-group mb-2">
                                                        <label>Country *</label>
                                                        <input type="text">
                                                    </div>

                                                    <div class="form-group mb-2">
                                                        <label>City *</label>
                                                        <input type="text">
                                                    </div>
                                                                
                                                    <div class="form-group mb-2">
                                                        <label>Region/State *</label>
                                                        <input type="text">
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dashboard-form mb-4">
                                <div class="dashboard-location">
                                    <h4>Location</h4>
                                    <form>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="form-group mb-2">
                                                    <label>Home Airport</label>
                                                    <input type="text">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="form-group mb-2">
                                                    <label>Address</label>
                                                    <input type="email">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="form-group mb-2">
                                                    <label>City</label>
                                                    <input type="text">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="form-group mb-2">
                                                    <label>State/Province/Region</label>
                                                    <input type="text">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="form-group mb-2">
                                                    <label>ZIP Code/Postal Code</label>
                                                    <input type="text">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="form-group mb-2">
                                                    <label>Country</label>
                                                    <input type="text">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-btn">
                                                    <a href="#" class="nir-btn">SAVE CHANGE</a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="dashboard-form mb-4">
                                <div class="dashboard-password">
                                    <h4>Change Password</h4>
                                    <form>
                                        <div class="row">
                                            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                                <div class="form-group mb-2">
                                                    <label>Current Password</label>
                                                    <input type="password" placeholder="*********">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                                <div class="form-group mb-2">
                                                    <label>New Password</label>
                                                    <input type="password">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                                <div class="form-group mb-2">
                                                    <label>Re-enter Password</label>
                                                    <input type="password">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-btn mar-top-15">
                                                    <a href="#" class="nir-btn">SAVE CHANGE</a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                             
                        </div>
                    </div>
                </div>    
            </div>    
            <!-- Content / End -->
        </div>
    </div>
    <!-- Dashboard / End -->
