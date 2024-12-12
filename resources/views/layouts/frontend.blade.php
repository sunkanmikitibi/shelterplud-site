@include('frontend-layouts.head')

<body>
    @yield('content')
    <!-- header starts -->

    <!-- header side menu -->
    <div class="header_sidemenu">
        <div class="header_sidemenu_in">
            <div class="menu py-5">
                <div class="close-menu">
                    <i class="fa fa-times"></i>
                </div>
                <div class="m-contentmain">
                    <div class="m-contentmain">
                        <div class="m-logo mb-5">
                            <img src="{{ asset('images/logo.png') }}" alt="m-logo">
                        </div>

                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        Quick Links
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExample" style="">
                                    <div class="accordion-body">
                                        <div class="d-flex align-items-center flex-wrap flex-row">
                                            <div class="p-2 m-1"
                                                style="width:30%; height:100px; border: 1px solid grey; border-radius: 10px;">
                                                <a href="/"
                                                    style="text-align: center; padding:5px font-size:11px;">
                                                    <i class="fa-sharp fa-solid fa-house fa-beat mb-1 mt-2"
                                                        style="color: #2ec7e5; display:block"></i>
                                                    <div style="text-align: center; font-size:11px">
                                                        Home </div>
                                                </a>
                                            </div>
                                            <div class="p-2 m-1"
                                                style="width:30%; height:100px; border: 1px solid grey; border-radius: 10px;">
                                                <a href="/"
                                                    style="text-align: center; padding:5px font-size:11px;">
                                                    <i class="fa-sharp fa-solid fa-newspaper fa-beat mb-1 mt-2"
                                                        style="color: #2ec7e5; display:block"></i>
                                                    <div style="text-align: center; font-size:11px">
                                                        Estate News Articles</div>
                                                </a>
                                            </div>
                                            <div class="p-2 m-1"
                                                style="width:30%; height:100px; border: 1px solid grey; border-radius: 10px;">
                                                <a href="/"
                                                    style="text-align: center; padding:5px font-size:11px;">
                                                    <i class="fa-sharp fa-solid fa-newspaper fa-beat mb-1 mt-2"
                                                        style="color: #2ec7e5; display:block"></i>
                                                    <div style="text-align: center; font-size:11px">
                                                        Post Property </div>
                                                </a>
                                            </div>



                                        </div>


                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Shelter Plug Edge
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="d-flex align-items-center flex-wrap flex-row">
                                            <div class="p-2 m-1"
                                                style="width:30%; height:100px; border: 1px solid grey; border-radius: 10px;">
                                                <a href="{{ route('homeinterior') }}" target="_blank"
                                                    style="text-align: center; padding:5px font-size:11px;">
                                                    <i class="fa-sharp fa-solid fa-house fa-beat mb-1 mt-2"
                                                        style="color: #2ec7e5; display:block"></i>
                                                    <div style="text-align: center; font-size:11px">
                                                        Home Interiors</div>
                                                </a>
                                            </div>
                                            <div class="p-2 m-1"
                                                style="width:30%; height:100px; border: 1px solid grey; border-radius: 10px;">
                                                <a href="#"
                                                    style="text-align: center; padding:5px font-size:11px;"> <i
                                                        class="fa-sharp fa-solid fa-tape fa-beat mb-1 mt-2"
                                                        style="color: #2ec7e5; display:block"></i>
                                                    <div style="text-align: center; font-size:11px">
                                                        Rent
                                                        Agreement
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="p-2 m-1"
                                                style="width:30%; height:100px; border: 1px solid grey; border-radius: 10px;">
                                                <a href="#"
                                                    style="text-align: center; padding:5px font-size:11px;"> <i
                                                        class="fa-sharp fa-solid fa-tape fa-beat mb-1 mt-2"
                                                        style="color: #2ec7e5; display:block"></i>
                                                    <div style="text-align: center; font-size:11px">
                                                        Shelter Plug <br> Premium </div>
                                                </a>
                                            </div>

                                            <div class="p-2 m-1"
                                                style="width:30%; height:100px; border: 1px solid grey; border-radius: 10px;">
                                                <a href="#"
                                                    style="text-align: center; padding:5px font-size:11px;"> <i
                                                        class="fa-sharp fa-solid fa-tape fa-beat mt-1 mb-2"
                                                        style="color: #2ec7e5; display:block"></i>
                                                    <div style="text-align: center; font-size:11px">
                                                        Rent <br>Receipts </div>
                                                </a>
                                            </div>
                                            <div class="p-2 m-1"
                                                style="width:30%; height:100px; border: 1px solid grey; border-radius: 10px;">
                                                <a href="{{ route('propertymanagement') }}" target="_blank"
                                                    style="text-align: center; padding:5px font-size:11px;">

                                                    <i class=" fa-sharp fa-solid fa-tents fa-beat mt-1 mb-2"
                                                        style="color: #2ec7e5; display:block"></i>
                                                    <div style="text-align: center; font-size:11px">
                                                        Property Management </div>
                                                </a>
                                            </div>

                                            <div class="p-2 m-1"
                                                style="width:30%; height:100px; border: 1px solid grey; border-radius: 10px;">
                                                <a href="{{ route('parkers.index') }}" target="_blank"
                                                    style="text-align: center; padding:5px font-size:11px;">

                                                    <i class=" fa-sharp fa-solid fa-tents fa-beat mt-1 mb-2"
                                                        style="color: #2ec7e5; display:block"></i>
                                                    <div style="text-align: center; font-size:11px">
                                                        Parkers &amp; <br> Movers </div>
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                        aria-expanded="false" aria-controls="collapseThree">
                                        Services
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="d-flex align-items-center flex-wrap flex-row">
                                            <div class="p-2 m-1"
                                                style="width:30%; height:80px; border: 1px solid grey; border-radius: 10px;">
                                                <a href="#"
                                                    style="text-align: center; padding:5px font-size:11px;">

                                                    <i class=" fa-sharp fa-solid fa-tents fa-beat mt-1 mb-2"
                                                        style="color: #2ec7e5; display:block"></i>
                                                    <div style="text-align: center; font-size:11px">
                                                        Buy Property </div>
                                                </a>
                                            </div>

                                            <div class="p-2 m-1"
                                                style="width:30%; word-wrap:normal; height:80px; border: 1px solid grey; border-radius: 10px;">
                                                <a href="#"
                                                    style="text-align: center; padding:5px font-size:11px;">

                                                    <i class=" fa-sharp fa-solid fa-tents fa-beat mt-1 mb-2"
                                                        style="color: #2ec7e5; display:block"></i>
                                                    <div style="text-align: center; font-size:11px">
                                                        Feedback/Reviews </div>
                                                </a>
                                            </div>

                                            <div class="p-2 m-1"
                                                style="width:30%; word-wrap:normal; height:80px; border: 1px solid grey; border-radius: 10px;">
                                                <a href="#"
                                                    style="text-align: center; padding:5px font-size:11px;">

                                                    <i class=" fa-sharp fa-solid fa-tents fa-beat mt-1 mb-2"
                                                        style="color: #2ec7e5; display:block"></i>
                                                    <div style="text-align: center; font-size:11px">
                                                        Property Valuation </div>
                                                </a>
                                            </div>


                                            <div class="p-2 m-1"
                                                style="width:30%; height:80px; border: 1px solid grey; border-radius: 10px;">
                                                <a href="#"
                                                    style="text-align: center; padding:5px font-size:11px;">

                                                    <i class=" fa-sharp fa-solid fa-tents fa-beat mt-1 mb-2"
                                                        style="color: #2ec7e5; display:block"></i>
                                                    <div style="text-align: center; font-size:11px">
                                                        Int'l Listings / Services </div>
                                                </a>
                                            </div>

                                            <div class="p-2 m-1"
                                                style="width:30%; height:80px; border: 1px solid grey; border-radius: 10px;">
                                                <a href="#"
                                                    style="text-align: center; padding:5px font-size:11px;">

                                                    <i class=" fa-sharp fa-solid fa-tents fa-beat mt-1 mb-2"
                                                        style="color: #2ec7e5; display:block"></i>
                                                    <div style="text-align: center; font-size:11px">
                                                        Rent Property </div>
                                                </a>
                                            </div>

                                            <div class="p-2 m-1"
                                                style="width:30%; height:80px; border: 1px solid grey; border-radius: 10px;">
                                                <a href="#"
                                                    style="text-align: center; padding:5px font-size:11px;">

                                                    <i class=" fa-sharp fa-solid fa-tents fa-beat mt-1 mb-2"
                                                        style="color: #2ec7e5; display:block"></i>
                                                    <div style="text-align: center; font-size:11px">
                                                        PG/Co-living </div>
                                                </a>
                                            </div>

                                            <div class="p-2 m-1"
                                                style="width:30%; height:80px; border: 1px solid grey; border-radius: 10px;">
                                                <a href="#"
                                                    style="text-align: center; padding:5px font-size:11px;">

                                                    <i class=" fa-sharp fa-solid fa-tents fa-beat mt-1 mb-2"
                                                        style="color: #2ec7e5; display:block"></i>
                                                    <div style="text-align: center; font-size:11px">
                                                        Shortlets </div>
                                                </a>
                                            </div>

                                        </div>







                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                        aria-expanded="false" aria-controls="collapseFour">
                                        Housing Advice
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample" style="">
                                    <div class="accordion-body">
                                        <div class="d-flex align-items-center flex-wrap flex-row">
                                            <div class="p-2 m-1"
                                                style="width:30%; height:100px; border: 1px solid grey; border-radius: 10px;">
                                                <a href="/"
                                                    style="text-align: center; padding:5px font-size:11px;">
                                                    <i class="fa-sharp fa-solid fa-house fa-beat mb-1 mt-2"
                                                        style="color: #2ec7e5; display:block"></i>
                                                    <div style="text-align: center; font-size:11px">
                                                        Buying Guide </div>
                                                </a>
                                            </div>
                                            <div class="p-2 m-1"
                                                style="width:30%; height:100px; border: 1px solid grey; border-radius: 10px;">
                                                <a href="/"
                                                    style="text-align: center; padding:5px font-size:11px;">
                                                    <i class="fa-sharp fa-solid fa-newspaper fa-beat mb-1 mt-2"
                                                        style="color: #2ec7e5; display:block"></i>
                                                    <div style="text-align: center; font-size:11px">
                                                        Renting Guide</div>
                                                </a>
                                            </div>




                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="contact-info1 mt-4 px-2">
                            <h3 class="">Contact Info</h3>
                            <ul>
                                <div class="d-block mb-1"><i class="fa fa-map-marker-alt me-2"></i> No.1 Nairobi
                                    street
                                    wuse2, Abuja Nigeria</div>
                                <div class="d-block mb-1"><i class="fa fa-phone-alt me-2"></i>+234-702-560-5090</div>
                                <div class="d-block mb-1"><i class="fa fa-envelope-open me-2"></i>info@shelterplug.com
                                    <br />

                                    support@shelterplug.com
                                </div>
                                <div class="d-block"><i class="fa fa-clock me-2"></i> Open Time: 09.00 to 18.00</div>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="overlay hide"></div>
        </div>
    </div>

    @include('frontend-layouts.scripts')
</body>

</html>
<script src="{{ asset('/sw.js') }}"></script>
<script>
    if (!navigator.serviceWorker.controller) {
        navigator.serviceWorker.register("/sw.js").then(function(reg) {
            console.log("Service worker has been registered for scope: " + reg.scope);
        });
    }
</script>
