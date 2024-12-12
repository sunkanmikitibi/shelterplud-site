    <!-- login section starts -->
    <section class="login-register pt-10">
        <div class="container">
            <div class="log-main blog-full log-reg w-75 mx-auto">
                <div class="row">
                    <div class="col-lg-6">
                        <h4 class="text-center border-b pb-2">Login</h4>
                       {{-- <div class="log-reg-button d-sm-flex align-items-center justify-content-between">
                            <button type="submit" class="btn btn-fb w-50 me-1">
                                <i class="fab fa-facebook"></i> Login with Facebook
                            </button>
                            <button type="submit" class="btn btn-google w-50 ms-1">
                                <i class="fab fa-google"></i> Login with Google
                            </button>
                        </div>
                        <hr class="log-reg-hr position-relative my-4 overflow-visible">
                        --}}
                        
                        <form method="post" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group mb-2">
                                <input type="text" name="email" class="form-control" placeholder="Email Address">
                                @error('email')
                                    
                                @enderror
                            </div>
                            <div class="form-group mb-2">
                                <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                            </div>
                            <div class="form-group mb-2">
                                <input type="checkbox" name="remember" class="custom-control-input" id="exampleCheck2">
                                <label class="custom-control-label mb-0" for="exampleCheck2">Remember me</label>
                                <a class="float-end" href="#">Lost your password?</a>
                            </div>
                            <div class="comment-btn mb-2 pb-2 text-center border-b">
                                <input type="submit" class="nir-btn w-100" value="Login">
                            </div>
                            <p class="text-center">Don't have an account? <a href="register.html" class="theme">Register</a></p>
                        </form>
                    </div>
                    <div class="col-lg-6">
                       <div class="blog-image">
                            <a href="#" style="background-image: url(images/trending/trending5.jpg);"></a>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- login section Ends -->