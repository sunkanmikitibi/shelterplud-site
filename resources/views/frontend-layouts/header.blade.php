<header class="main_header_area">
    <div class="header-content py-1 bg-theme1">
        <div class="container d-flex align-items-center justify-content-between">
            <div class="links">
                <ul>
                    <li><a href="#" class="white"><i class="fa fa-map-marker white"></i> No.1 Nairobi street wuse2,
                            Abuja Nigeria</a></li>
                    <li><a href="#" class="white"><i class="fa fa-mobile"></i> +2347025605090</a></li>
                </ul>
            </div>
            <div class="links float-right">
                <ul>
                    <li><a href="https://wa.me/message/CCFNE5FTSTN2N1" target="_blank" class="white"><i
                                class="fab fa-whatsapp" aria-hidden="true"></i></a></li>
                    <li><a href="https://www.twitter.com" target="_blank" class="white"><i class="fab fa-twitter"
                                aria-hidden="true"></i></a></li>
                    <li><a href="https://www.snapchat.com/add/shelterplug" target="_blank" class="white"><i
                                class="fab fa-snapchat" aria-hidden="true"></i></a></li>
                    <li><a href="https://www.instagram.com/shelterplug247" target="_blank" class="white"><i
                                class="fab fa-instagram" aria-hidden="true"></i></a></li>

                </ul>
            </div>
        </div>
    </div>
    <!-- Navigation Bar -->
    <ul class="mobile-list">
        <li><a href="/"><i class="fal fa-home"></i></a> <span>Home</span> </li>
        <li><a href="{{ route('edgeservices') }}"><i class="fal fa-cog"></i></a> <span>Edge</span> </li>
        <li><a href="{{ route('contactus') }}"><i class="fal fa-phone-office"></i></a> <span>Contact</span></li>
        <li><a href="/"><i class="fal fa-search"></i></a> <span>Search</span></li>
        <li><a href=""><i class="fal fa-heart"></i></a> <span>Favorite</span></li>
    </ul>
    <div class="header_menu" id="header_menu">
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-flex d-flex align-items-center justify-content-between w-100 pb-3 pt-3">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <a class="navbar-brand" href="/">
                            <img src="{{ url('images/logo.png') }}" alt="Sheler Plug">
                        </a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="navbar-collapse1 d-flex align-items-center" id="bs-example-navbar-collapse-1">
                        @include('frontend-layouts.nav')

                    </div><!-- /.navbar-collapse -->

                    <div class="offcanvas-header">
                        <button class="btn-close float-end"></button>
                    </div>
                    <div class="register-login d-flex align-items-center">
                        @auth
                            <div style="display: block; text-align:center;" class="border border-1 rounded bg-grey p-2 m-1">
                                <a href="{{ url('/user-dashboard') }}" class="border"><i
                                        class="fa fa-tachometer-alt theme fa-lg"></i>
                                    <br>
                                    <span style="font-size: 10px; font-weight: 800;"> Dashboard
                                    </span>
                                </a>
                            </div>

                            <div style="display: block; text-align:center;" class="border border-1 rounded bg-grey p-2 m-1">
                                <a href="{{ route('user.addnew') }}">
                                    <i class="fad fa-city fa-lg theme"></i>
                                    <br />
                                    <span style="font-size: 10px;"> List Property </span>
                                </a>
                            </div>
                        @else
                            <div style="display: block; text-align:center;" class="mhead border rounded  bg-grey p-2 m-1">
                                <a href="{{ route('login') }}" class="me-2"> <i class="fas fa-sign-in-alt theme"></i> <br>
                                    <span style="font-size: 10px;"> Login</span> </a>
                            </div>
                            <div style="display: block; text-align:center;" class="border rounded bg-grey p-2 m-1">
                                <a href="{{ route('register') }}">
                                    <i class="fas fa-user-plus fa-lg theme"></i>
                                    <br>
                                    <span style="font-size: 10px; font-weight: 800;"> Sign up
                                    </span>
                                </a>
                            </div>
                            <div style="display: block; text-align:center;" class="border border-1 rounded bg-grey p-2 m-1">
                                <a href="{{ route('subscription') }}">
                                    <i class="fa fa-lg fa-plus-circle theme"></i>
                                    <br>
                                    <span style="font-size: 10px;">Subscribe</span> </a>
                            </div>


                        @endauth

                        <div class="header_sidemenu rounded p-2 m-2">
                            <div class="mhead">
                                <span class="menu-ham">
                                    <a href="#" class="cart-icon d-flex align-items-center">
                                        <i class="fas fa-door-open fa-lg theme"></i>
                                    </a>
                                    <br>
                                    <span style="font-size: 10px;">Menu</span>
                                </span>
                            </div>
                        </div>
                    </div> 
                    <div id="slicknav-mobile"></div>
                    
                </div>
            </div><!-- /.container-fluid -->
        </nav>
    </div>
    <!-- Navigation Bar Ends -->
</header>
<!-- header ends -->
