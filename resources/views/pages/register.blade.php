   <!-- register section starts -->
   <section class="login-register pt-10">
    <div class="container">
        <div class="log-main blog-full log-reg w-75 mx-auto">
            <div class="row">
                <div class="col-lg-6">
                   <div class="blog-image">
                        <a href="#" style="background-image: url(images/trending/trending5.jpg);"></a>
                    </div> 
                </div>
                <div class="col-lg-6">
                    <h4 class="text-center border-b pb-2">Register</h4>
                    <div class="log-reg-button d-sm-flex align-items-center justify-content-between">
                        <button type="submit" class="btn btn-fb w-50 me-1">
                            <i class="fab fa-facebook"></i> Login with Facebook
                        </button>
                        <button type="submit" class="btn btn-google w-50 ms-1">
                            <i class="fab fa-google"></i> Login with Google
                        </button>
                    </div>
                    <hr class="log-reg-hr position-relative my-4 overflow-visible">
                    <form method="post" action="{{ route('register') }}" name="contactform2" id="contactform2">
                        @csrf
                        <div class="form-group mb-2">
                            <input type="text" name="name" class="form-control" id="name" placeholder="User Name">
                        </div>
                        <div class="form-group mb-2">
                            <input type="text" name="email" class="form-control" id="email" placeholder="Email Address">
                        </div>
                        <div class="form-group mb-2">
                            <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                        </div>

                        <input type="hidden" name="is_admin" value="0">
                        <div class="form-group mb-2">
                            <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Re-enter Password">
                        </div>
                        <div class="form-group mb-2 d-flex">
                            <input type="checkbox" class="custom-control-input" id="exampleCheck2">
                            <label class="custom-control-label mb-0 ms-1 lh-1" for="exampleCheck2">I have read and accept the Terms and Privacy Policy?</label>
                        </div>
                        <div class="comment-btn mb-2 pb-2 text-center border-b">
                            <input type="submit" class="nir-btn w-100" id="submit2" value="Register">
                        </div>
                        <p class="text-center">Already have an account? <a href="login.html" class="theme">Login</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- register section Ends -->