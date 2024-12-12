<!-- contact starts -->
<section class="contact-main pt-0 pb-10 bg-grey">
    <div class="map">
        <div style="width: 100%">

            <iframe height="500"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3939.838715748225!2d7.461396674877998!3d9.07845368821314!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104e0ae6685b93e7%3A0x214bda2241466a16!2s1%20Nairobi%20St%2C%20Wuse%20904101%2C%20Kaduna%2C%20Federal%20Capital%20Territory!5e0!3m2!1sen!2sng!4v1690282959380!5m2!1sen!2sng"></iframe>
        </div>
    </div>
    <div class="container">
        <div class="contact-info-main">
            <div class="row">
                <div class="col-lg-10 col-offset-lg-1 mx-auto">
                    <div class="contact-info bg-white pt-10 pb-10 px-5">
                        <div class="contact-info-title text-center mb-4 px-5">
                            <h3 class="mb-1">INFORMATION ABOUT US</h3>

                        </div>
                        <div class="contact-info-content row mb-1">
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="info-item bg-lgrey px-4 py-5 border-all text-center">
                                    <div class="info-icon mb-2">
                                        <i class="fa fa-map-marker"></i>
                                    </div>
                                    <div class="info-content">
                                        <p class="m-0"> No.1 Nairobi street wuse2, </p>
                                        <p class="m-0">FCT, Abuja Nigeria</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="info-item bg-lgrey px-4 py-5 border-all text-center">
                                    <div class="info-icon mb-2">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <div class="info-content">
                                        <p class="m-0">+2347025605090</p>
                                        {{-- <p class="m-0">977-444-222-000</p> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12 mb-4">
                                <div class="info-item bg-lgrey px-4 py-5 border-all text-center">
                                    <div class="info-icon mb-2">
                                        <i class="fa fa-envelope"></i>
                                    </div>
                                    <div class="info-content ps-4">
                                        <p class="m-0">info@shelterplug.com</p>
                                        <p class="m-0">support@shelterplug.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="contact-form1" class="contact-form px-5">
                            <div class="contact-info-title text-center mb-4 px-5">
                                <h3 class="mb-1">Keep in Touch</h3>
                                <p class="mb-0">Shelter plug thoughtfully designed for real humans which means the
                                    best user experience for your entire community.</p>
                            </div>

                            <div id="contactform-error-msg"></div>

                            <form method="post" action="{{ route('contactsubmit') }}" name="contactform2"
                                id="contactform2">
                                @csrf
                                <div class="form-group mb-2">
                                    <input type="text" name="fname" class="form-control" id="fullname"
                                        placeholder="First Name">
                                    @error('fname')
                                        <span style="color:red; font-size:10px;">Firstname is Required</span>
                                    @enderror
                                </div>
                                <div class="form-group mb-2">
                                    <input type="text" name="lname" class="form-control" id="llastname"
                                        placeholder="Last Name">
                                    @error('lname')
                                        <span style="color:red; font-size:10px;">Lastname is Required</span>
                                    @enderror
                                </div>
                                <div class="form-group mb-2">
                                    <input type="email" name="email" class="form-control" id="email"
                                        placeholder="Email">
                                    @error('email')
                                        <span style="color:red; font-size:10px;">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group mb-2">
                                    <input type="text" name="phone" class="form-control" id="phnumber"
                                        placeholder="Phone">
                                    @error('phone')
                                        <span style="color:red; font-size:10px;">Phone is Required</span>
                                    @enderror
                                </div>
                                <div class="textarea mb-2">
                                    <textarea name="message" placeholder="Enter a message"></textarea>
                                </div>
                                <div class="comment-btn text-center">
                                    <input type="submit" class="nir-btn" id="submit2" value="Send Message">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact Ends -->
