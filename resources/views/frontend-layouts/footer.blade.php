    <!-- footer starts -->
    <footer class="pt-10 footermain">
        <div class="footer-upper pb-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <div class="footer-about">
                            <img src="{{ asset('images/logo-white.png') }}" alt="">
                            <p class="mt-3 mb-3 white">
                                Welcome to our online real estate market hub, your go-to destination for all things
                                related to buying, selling, short let and renting properties. In this guide, we will
                                provide you with valuable insights, tips, and resources to help you navigate the real
                                estate market and find your dream home. Whether you're a first-time buyer, an
                                experienced investor, or a seller looking to maximize your property's potential, we've
                                got you covered. Let's dive in!.
                            </p>
                            <ul>
                                <li class="white"><strong>Phone number:</strong> +234-702-560-5090</li>
                                <li class="white"><strong>Location:</strong>No.1 Nairobi street wuse2, Abuja Nigeria
                                </li>
                                <li class="white"><strong>Email:</strong> info@shelterplug.com</li>
                                <li class="white"><strong>Website:</strong> www.shelterplug.com</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12 mb-4">
                        <div class="footer-links">
                            <h3 class="white">Company</h3>
                            <ul>
                                <li><a href="#">Careers</a></li>
                                <li><a href="{{ route('aboutus') }}">About Us</a></li>
                                <li><a href="{{ route('propertymanagement') }}">Property Management</a></li>
                                <li><a href="{{ route('homeinterior') }}">Home Interior</a></li>
                                <li><a href="{{ route('plans') }}">Subscriptions</a></li>
                                <li><a href="{{ route('contactus') }}">Contact us</a></li>
                                <li><a href="#">For Partners</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12 mb-4">
                        <div class="footer-links">
                            <h3 class="white">Popular Tags</h3>
                            <div class="tagcloud">
                                <a class="tag-cloud-link bg-white black p-2 mb-1"
                                    href="post-grid-1.html">Construction</a>
                                <a class="tag-cloud-link bg-white black p-2 mb-1" href="post-grid-1.html">Public</a>
                                <a class="tag-cloud-link bg-white black p-2 mb-1" href="post-grid-1.html">Real
                                    Estate</a>
                                <a class="tag-cloud-link bg-white black p-2 mb-1" href="post-grid-1.html">Travel</a>
                                <a class="tag-cloud-link bg-white black p-2 mb-1"
                                    href="post-grid-1.html">Entertainment</a>
                                <a class="tag-cloud-link bg-white black p-2 mb-1" href="post-grid-1.html">Blog</a>
                                <a class="tag-cloud-link bg-white black p-2 mb-1" href="post-grid-1.html">Sports </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <div class="footer-links">
                            <h3 class="white">Popular Posts</h3>
                            <div class="trend-main">
                                @foreach ($footerposts as $fpost)
                                <div class="trend-item d-flex align-items-center mb-2">
                                    <div class="trend-image w-25 me-4">
                                        <img src="{{ $fpost->postImage() }}" alt="image">
                                    </div>
                                    <div class="trend-content-main w-75">
                                        <div class="trend-content">
                                            <h5 class="mb-1"><a href="{{ route('blog.details', $fpost->slug) }}">
                                                    {{ $fpost->title }}</a></h5>
                                            <div class="entry-meta">
                                                <div class="entry-metalist d-flex align-items-center">
                                                    <small><a href="{{ route('blog.details', $fpost) }}" class="white"><i
                                                                class="fa fa-calendar"></i> 22 Mar 2021</a></small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                @endforeach
                              

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright pt-2 pb-2">
            <div class="container">
                <div class="copyright-inner d-md-flex align-items-center justify-content-between">
                    <div class="copyright-text">
                        <p class="m-0 white">{{ date('Y') }} Shelter Plug. All rights reserved.</p>
                    </div>
                    <div class="social-links">
                        <ul>
                            <li><a href="https://wa.me/message/CCFNE5FTSTN2N1" target="_blank" class="white">
                                <i class="fa-brands fa-whatsapp fa-spin fa-lg" style="color: #079c34;"></i></a></li>
                            <li><a href="https://www.twitter.com" target="_blank" class="white">
                                <i class="fa-brands fa-twitter fa-sm" style="color: #18b0e2;"></i></a></li>
                            <li><a href="https://www.snapchat.com/add/shelterplug" target="_blank" class="white"><i
                                        class="fab fa-snapchat" aria-hidden="true"></i></a></li>
                            <li><a href="https://www.instagram.com/shelterplug247" target="_blank" class="white"><i
                                        class="fab fa-instagram" aria-hidden="true"></i></a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer ends -->

    <!-- Back to top start -->
    <div id="back-to-top">
        <a href="#"></a>
    </div>
