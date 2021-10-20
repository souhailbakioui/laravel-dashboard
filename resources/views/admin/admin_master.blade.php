<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

 <title> @yield('admin_title')</title>

  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet"/>
  <link href="https://cdn.materialdesignicons.com/3.0.39/css/materialdesignicons.min.css" rel="stylesheet" />
<script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>
        <script src="{{asset('dist/notiflix-aio-2.7.0.min.js')}}"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>
        
<!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  <!-- PLUGINS CSS STYLE -->
  <link href="{{asset('back-end/assets/plugins/toaster/toastr.min.css')}}" rel="stylesheet" />
  <link href="{{asset('back-end/assets/plugins/nprogress/nprogress.css')}}" rel="stylesheet" />
  <link href="{{asset('back-end/assets/plugins/flag-icons/css/flag-icon.min.css')}}" rel="stylesheet"/>
  <link href="{{asset('back-end/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css')}}" rel="stylesheet" />
  <link href="{{asset('back-end/assets/plugins/ladda/ladda.min.css')}}" rel="stylesheet" />
  <link href="{{asset('back-end/assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet" />
  <link href="{{asset('back-end/assets/plugins/daterangepicker/daterangepicker.css')}}" rel="stylesheet" />

  <!-- SLEEK CSS -->
  <link id="sleek-css" rel="stylesheet" href="{{asset('back-end/assets/css/sleek.css')}}" />

  <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">

  <!-- FAVICON -->
  <link href="{{asset('back-end/assets/img/favicon.png')}}" rel="shortcut icon" />

  <!--
    HTML5 shim and Respond.js')}} for IE8 support of HTML5 elements and media queries
  -->
  <!-- WARNING: Respond.js')}} doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js')}}"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}"></script>
  <![endif]-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js"></script>
  <script src="{{asset('back-end/assets/plugins/nprogress/nprogress.js')}}"></script>
<style>
  table th {
    width: auto !important;
}
</style>
</head>


  <body class="sidebar-fixed sidebar-dark header-light header-fixed" id="body">
    <script>
      NProgress.configure({ showSpinner: false });
      NProgress.start();
    </script>

    <div class="mobile-sticky-body-overlay"></div>

    <div class="wrapper">
      
              <!--
          ====================================
          ——— LEFT SIDEBAR WITH FOOTER
          =====================================
        -->
       @include('admin.body.sidebar')

      

      <div class="page-wrapper">
                  <!-- Header -->
          <header class="main-header " id="header">
            <nav class="navbar navbar-static-top navbar-expand-lg">
              <!-- Sidebar toggle button -->
              <button id="sidebar-toggler" class="sidebar-toggle">
                <span class="sr-only">Toggle navigation</span>
              </button>
              <!-- search form -->
              <div class="search-form d-none d-lg-inline-block">
                <div class="input-group">
                  <button type="button" name="search" id="search-btn" class="btn btn-flat">
                    <i class="mdi mdi-magnify"></i>
                  </button>
                  <input type="text" name="query" id="search-input" class="form-control" placeholder="'button', 'chart' etc."
                    autofocus autocomplete="off" />
                </div>
                <div id="search-results-container">
                  <ul id="search-results"></ul>
                </div>
              </div>

              <div class="navbar-right ">
                <ul class="nav navbar-nav">
                  <!-- Github Link Button -->
                  <li class="github-link mr-3">
                    <a class="btn btn-outline-secondary btn-sm" href="https://github.com/tafcoder/sleek-dashboard" target="_blank">
                      <span class="d-none d-md-inline-block mr-2">Source Code</span>
                      <i class="mdi mdi-github-circle"></i>
                    </a>

                  </li>
                  <li class="dropdown notifications-menu">
                    <button class="dropdown-toggle" data-toggle="dropdown">
                      <i class="mdi mdi-bell-outline"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <li class="dropdown-header">You have 5 notifications</li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-account-plus"></i> New user registered
                          <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 10 AM</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-account-remove"></i> User deleted
                          <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 07 AM</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-chart-areaspline"></i> Sales report is ready
                          <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 12 PM</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-account-supervisor"></i> New client
                          <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 10 AM</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-server-network-off"></i> Server overloaded
                          <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 05 AM</span>
                        </a>
                      </li>
                      <li class="dropdown-footer">
                        <a class="text-center" href="#"> View All </a>
                      </li>
                    </ul>
                  </li>
                  <!-- User Account -->
                  <li class="dropdown user-menu">
                    <button href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                      <img src="{{asset('storage').'/'.Auth::user()->profile_photo_path}}" class="user-image" style="
                      margin-top: 13px;
                      float: left;
                  " alt="User Image" />
                      <span class="d-none d-lg-inline-block" style="
                      padding-left: 15px;
                  ">{{Auth::user()->name}}</span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <!-- User image -->
                      <li class="dropdown-header">
                        <img src="{{asset('storage').'/'.Auth::user()->profile_photo_path}}" class="img-circle" alt="User Image" style="
    float: left;
    margin-top: -10px;
"  />
                        <div class="d-inline-block">
                          {{Auth::user()->name}}<small class="pt-1">{{Auth::user()->email}}</small>
                        </div>
                      </li>

                      <li>
                        <a href="{{Route('upade.profail')}}">
                          <i class="mdi mdi-account"></i> My Profile
                        </a>
                      </li>
                      <li>
                        <a href="email-inbox.html">
                          <i class="mdi mdi-email"></i> Message
                        </a>
                      </li>
                      <li>
                        <a href="{{Route('change.password')}}">
                          <i class="mdi mdi-email"></i> Change Password
                        </a>
                      </li>
                      <li>
                        <a href="#"> <i class="mdi mdi-diamond-stone"></i> Projects </a>
                      </li>
                      <li>
                        <a href="#"> <i class="mdi mdi-settings"></i> Account Setting </a>
                      </li>

                      <li class="dropdown-footer">
                        <a href="{{Route('GetOut')}}"> <i class="mdi mdi-logout"></i> Log Out </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </nav>


          </header>


        <div class="content-wrapper">
          <div class="content">						 
        @yield('admin_var')
</div>

          


        </div>

                  <footer class="footer mt-auto">
            <div class="copyright bg-white">
              <p>
                &copy; <span id="copy-year">{{ Carbon\Carbon::now()->format('Y');}}</span> Copyright  
                <a
                  class="text-primary"
                  href="https://github.com/souhailbakioui"
                  target="_blank"
                  >Bakioui Souhail</a
                >.
              </p>
            </div>
          
          </footer>

      </div>
    </div>

    
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCn8TFXGg17HAUcNpkwtxxyT9Io9B_NcM" defer></script>
<script src="{{asset('back-end/assets/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('back-end/assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('back-end/assets/plugins/toaster/toastr.min.js')}}"></script>
<script src="{{asset('back-end/assets/plugins/slimscrollbar/jquery.slimscroll.min.js')}}"></script>
<script src="{{asset('back-end/assets/plugins/charts/Chart.min.js')}}"></script>
<script src="{{asset('back-end/assets/plugins/ladda/spin.min.js')}}"></script>
<script src="{{asset('back-end/assets/plugins/ladda/ladda.min.js')}}"></script>
<script src="{{asset('back-end/assets/plugins/jquery-mask-input/jquery.mask.min.js')}}"></script>
<script src="{{asset('back-end/assets/plugins/select2/js/select2.min.js')}}"></script>
<script src="{{asset('back-end/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js')}}"></script>
<script src="{{asset('back-end/assets/plugins/jvectormap/jquery-jvectormap-world-mill.js')}}"></script>
<script src="{{asset('back-end/assets/plugins/daterangepicker/moment.min.js')}}"></script>
<script src="{{asset('back-end/assets/plugins/daterangepicker/daterangepicker.js')}}"></script>
<script src="{{asset('back-end/assets/plugins/jekyll-search.min.js')}}"></script>
<script src="{{asset('back-end/assets/js/sleek.js')}}"></script>
<script src="{{asset('back-end/assets/js/chart.js')}}"></script>
<script src="{{asset('back-end/assets/js/date-range.js')}}"></script>
<script src="{{asset('back-end/assets/js/map.js')}}"></script>
<script src="{{asset('back-end/assets/js/custom.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
 
  @if (Session::has('message'))
 var type="{{ Session::get('alert-type','info')}}";
switch  (type){
 case 'info':
 toastr.info("{{Session::get('message')}}");
 break;
 case 'suscces':
 toastr.success("{{Session::get('message')}}");
 break;
 case 'error':
 toastr.error("{{Session::get('message')}}");
 break;

 case 'warning':
 toastr.warning("{{Session::get('message')}}");
 break;


}
console.log(type);
@endif

 </script>


  </body>
</html>
