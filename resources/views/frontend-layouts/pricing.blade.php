  <!-- Packages news start -->
  <section class="packages bg-lgrey border-bottom border-t pb-6">
      <div class="container">
          <div class="section-title mb-6 pb-1 w-75 mx-auto text-center">
              <h2 class="m-0">Shelter Plug <span>Pricing</span></h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>
          @if (session()->has('error'))
              {{ session()->get('error') }}
          @endif

          <div class="row">
              @foreach ($plans as $plan)
                  <div class="col-lg-4 col-md-12 mb-4">
                      <div class="pkg-container text-center p-4 border">
                          <div class="pg-title">
                              {{-- <iclass="iconfasfa-databasedisplay-6bg-theme1mb-2white"></i> --}}
                              <h4 class="theme mb-0">{{ $plan->name }}</h4>
                              <h2 class="theme">₦{{ $plan->amount }} <span class="grey">per month</span></h2>
                              {{-- <p>Loremipsumdolorsit,ametconsecteturadipisicingelit.Accusantiumperspiciatis</p> --}}
                          </div>
                          <div class="pg-main">

                              {{-- <ul>
                            <li><i class="fas fa-check"></i> Buy credits to post your listing(s)</li>
                            <li><i class="fas fa-check"></i> 5 Property Postings</li>
                            <li><i class="fas fa-check"></i> 0 Premium Listings</li> 
                            <li><i class="fas fa-times"></i> Unlimited Listing Views</li>
                        </ul> --}}
                              <form class="mt-4" action="{{ route('pay.store') }}" method="post">
                                  @csrf
                                  <input type="hidden" name="email" value="{{ Auth::user()->email }}">


                                  <input type="hidden" value="{{ $plan->amount }}" name="amount">

                                  <input type="hidden" name="currency" value="NGN">
                                  <button type="submit" class="btn btn-md btn-primary">Choose Plan</button>

                              </form>
                          </div>
                      </div>
                  </div>
              @endforeach


          </div>
      </div>
  </section>
  <!-- Packages news end -->
