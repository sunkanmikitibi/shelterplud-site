   <!-- Dashboard -->
   <div id="dashboard" class="pt-10 pb-10">
       <div class="container">
           <div class="dashboard-main">
               <div class="row">
                   <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                       {{-- Dashboard side bar here --}}
                       @include('admin_layouts.dashboard_sidebar')
                   </div>
                   <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                       {{-- <div class="dashboard-content">
                          <div class="row mb-4">
                            <div class="col-lg-12">
                                
                                <div class="notification success bg-theme">
                                    <p class="m-0">Your listing Nelson Center Restro has been approved!</p>
                                    <a class="notification-close" href="#"><i class="fa fa-times"></i></a>
                                </div>
                            </div> 
                       </div> --}}
                       <div class="row align-items-center">

                           <!-- Item -->
                           <div class="col-lg-4 col-md-12 col-xs-12">
                               <div class="dashboard-stat bg-success text-white mb-4" style="border-radius: 10px">
                                   <div class="dashboard-stat-content">
                                       <h2 class="text-white mb-0">{{ $properties->count() }}</h2>
                                       <span class="text-white">Active Listings</span>
                                   </div>
                                   <div class="dashboard-stat-icon"><i class="im im-icon-Map2"></i></div>
                               </div>
                           </div>

                           <!-- Item -->
                           <div class="col-lg-4 col-md-6 col-xs-12">
                               <div class="dashboard-stat bg-warning text-white  mb-4" style="border-radius: 10px">
                                   <div class="dashboard-stat-content">
                                       <h2 class="text-white mb-0">{{ $inactiveproperties->count() }}</h2>
                                       <span class="text-white">Pending Listings</span>
                                   </div>
                                   <div class="dashboard-stat-icon"><i class="im im-icon-Line-Chart"></i></div>

                               </div>
                           </div>


                           <!-- Item -->
                           <div class="col-lg-4 col-md-6 col-xs-12">
                               <div class="dashboard-stat bg-danger text-white mb-4">
                                   <div class="dashboard-stat-content">
                                       <h2 class="text-white mb-0">0</h2>
                                       <span class="text-white">Rejected Listings</span>
                                   </div>
                                   <div class="dashboard-stat-icon"><i class="im im-icon-Add-UserStar"></i></div>

                               </div>
                           </div>
                       </div>
                       <div class="row mb-4">
                           <div class="col-lg-12 col-md-12 col-xs-12">
                               <div class="dashboard-list-box with-icons">
                                   <div class="dashboard-title">
                                       <h4 class="mb-0">Properties</h4>

                                   </div>
                                   <div class="table-responsive table-desi">
                                       <table class="basic-table table table-hover">
                                           <thead>
                                               <tr>
                                                   <th>Title</th>
                                                   <th>Address</th>
                                                   <th>Amount</th>
                                                   <th>Status</th>
                                               </tr>
                                           </thead>
                                           <tbody>
                                               @forelse ($properties as $property)
                                                   <tr>
                                                       <td><span class=""><a
                                                                   href="#">{{ $property->title }}</a></span>
                                                       </td>
                                                       <td>{{ $property->property_address }}</td>
                                                       <td> {{ number_format($property->price, 2) }} </td>
                                                       <td>

                                                           @if ($property->isActive)
                                                               <span class="label text-success">Active</span>
                                                           @else
                                                               <span class="label text-danger">Inactive</span>
                                                           @endif

                                                       </td>
                                                   </tr>
                                               @empty
                                                   this is is empty
                                               @endforelse

                                           </tbody>
                                       </table>
                                   </div>
                               </div>
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
