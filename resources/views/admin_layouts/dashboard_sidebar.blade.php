<div class="dashboard-sidebar">
    <div class="profile-sec">
        <div class="author-news mb-3" style="background-image:url(images/destination/destination16.jpg);">
            <div class="author-news-content text-center p-4 py-5">
                <div class="author-thumb mt-0">
                    <img src="images/team/img1.jpg" alt="author">
                </div>
                <div class="author-content pt-2 p-0">
                    <h3 class="mb-1 white"><a href="#" class="white">{{ auth()->user()->name }}</a></h3>
                    {{--<p class="detail white"><i class="fa fa-map-marker white"></i> 264, Carson Street USA, KY 40539</p>
                    <p class="detail white"><i class="fa fa-phone white"></i> +45 8547 9851</p>
                    <div class="header-social mt-2">
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        </ul>
                    </div>--}}
                </div>
            </div>
            <div class="dot-overlay"></div>
        </div>
    </div>
    <!-- Responsive Navigation Trigger -->
    <a href="#" class="dashboard-responsive-nav-trigger"><i class="fa fa-reorder"></i> Dashboard Navigation</a>  
    <div class="dashboard-nav">
        <div class="dashboard-nav-inner">
            <ul>
                <li class="active"><a href="{{ route('user.dashboard') }}"><i class="fa fa-bars"></i> Dashboard</a></li>
                <li><a href="{{ route('user.profile') }}"><i class="fa fa-user"></i> Settings</a></li>                     
                <li><a href="dashboard-messages.html"><i class="fa fa-envelope-open"></i> Messages</a></li>
                <li><a href="dashboard-reviews.html"><i class="fa fa-star"></i> Reviews</a></li>
                <li><a href="{{ route('user.addnew') }}"><i class="fa fa-plus"></i> Add listing</a></li>
                <li><a href="dashboard-list.html"><i class="fa fa-list-alt"></i> Listing</a></li>
                <li><a href="dashboard-history.html"><i class="fa fa-list-ul"></i>Booking History</a></li>
                <li><a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();"><i class="fa fa-sign-out-alt"></i> Logout</a></li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </ul>
        </div>
    </div>
</div>