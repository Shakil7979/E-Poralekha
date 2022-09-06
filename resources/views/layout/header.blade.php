<?php 
   use App\Models\site_settings_model;
   use App\Models\header_settings_model;
   use App\Models\add_menu_model;

   // $allHeadersData = header_settings_model::all();
   $headerSettingsData = json_decode(header_settings_model::all());
   $allMenuData = add_menu_model::all(); 

   $single_user = Session::get('single_user');

?>

<!-- Preloader -->
<div id="preloader">
    <div class="container h-100">
       <div class="row h-100 justify-content-center align-items-center">
          <div class="preloader-logo">
             <!-- spinner -->
             <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
             </div>
          </div>
          <!--/preloader logo -->
       </div>
       <!--/row -->
    </div>
    <!--/container -->
 </div>
 <!--/Preloader ends -->
 <nav id="main-nav" class="navbar-expand-xl fixed-top">
    <div class="row">
       <!-- Start Top Bar -->
       <div class="container-fluid top-bar">
          <div class="container">
             <div class="row">
                <div class="col-md-12">
                 
                   <!-- Start Contact Info -->
                   @foreach ($headerSettingsData as $item)
                       
                   <ul class="contact-details float-left">
                      <li><i class="fa fa-map-marker"></i>{{$item->address}}</li>
                      <li><a href="mailto:{{$item->email}}"><i class="fa fa-envelope"></i>{{$item->email}}</a></li>
                      <li><a href="tel:{{$item->phone}}"><i class="fa fa-phone"></i>{{$item->phone}}</a></li>
                   </ul>
                   <!-- End Contact Info -->
                   <!-- Start Social Links -->
                   <ul class="social-list float-right list-inline">
                      <li class="list-inline-item"><a title="Facebook" href="{{$item->facebook_url}}"><i class="fab fa-facebook-f"></i></a></li>
                      <li class="list-inline-item"><a title="Twitter" href="{{$item->twitter_url}}"><i class="fab fa-twitter"></i></a></li>
                      <li class="list-inline-item"><a  title="Instagram" href="{{$item->instagram_url}}"><i class="fab fa-instagram"></i></a></li>
                   </ul>
                   @endforeach
                   <!-- /End Social Links -->
                </div>
                <!-- col-md-12 -->
             </div>
             <!-- /row -->
          </div>
          <!-- /container -->
       </div>
       <!-- End Top bar -->
       <!-- Navbar Starts -->
       <div class="navbar container-fluid">
          <div class="container ">
             <!-- logo -->
             <a class="nav-brand" href="{{url('/')}}">
             <img src="{{asset('public/images\upload\site_setting\website_logo.png')}}" alt="" class="img-fluid">
             </a>
             <!-- Navbar toggler -->
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggle-icon">
             <i class="fas fa-bars"></i>
             </span>
             </button>
             <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                   <!-- menu item -->
                   <li class="nav-item home-menu">
                      <a class="nav-link" href="{{url('/')}}"> Home
                      </a>
                   </li>
                   <!-- menu item -->
                   <li class="nav-item dropdown">
                      <a class="nav-link" href="{{url('/services')}}">
                      Services
                      </a>
                   </li>
                   <!-- menu item -->
                   <li class="nav-item dropdown">
                      <a class="nav-link" href="{{url('/about')}}">
                      About
                      </a>
                   </li>
                   <!-- menu item -->
                   <li class="nav-item dropdown"> 
                      <a class="nav-link" href="{{url('/gallery')}}">
                      Gallery
                      </a>
                   </li>
                   <!-- menu item -->
                   <li class="nav-item dropdown">
                      <a class="nav-link" href="{{url('/blog')}}">
                      Blog
                      </a>
                   </li>
                   <!-- menu item -->
                   <li class="nav-item dropdown">
                      <a class="nav-link" href="{{url('/contact')}}">
                      Contact
                      </a>
                   </li>
                   
                   <?php $menu_count = count($allMenuData);  ?>
                   @if ($menu_count !== 0)
                       
                   <li class="nav-item dropdown">
                      <a class="nav-link" href="#">
                      Pages
                      </a>
                      <ul>
                        @foreach ($allMenuData as $item) 
                        <li class="nav-item dropdown">
                           <a href="{{"/menu/".$item->menu_url}}">
                           {{$item->new_menu}}
                           </a>
                        </li>
                        @endforeach
                      </ul>
                   </li> 
                   @endif
                   <!-- menu item -->
                   @if (!isset($single_user))
                     <li class="nav-item dropdown">
                        <a class="nav-link" href="{{url('/administrator')}}">
                        Login
                        </a>
                     </li>
                  @else
                  <li class="nav-item dropdown">
                     <a target="_blank" class="nav-link" href="{{url('/administrator')}}">
                     User
                     </a>  
                  </li>
                   @endif

                   

                   
                   <!-- menu item -->
                   <!-- <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="others-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Other pages
                      </a>
                      <div class="dropdown-menu" aria-labelledby="others-dropdown"> 
                         <a class="dropdown-item" href="">Contact</a> 
                         <a class="dropdown-item" href="blog-single.php">Blog Single</a> 
                         <a class="dropdown-item" href="404.php">404 Page</a>
                         <a class="dropdown-item" href="services-single.php">Services Single</a>
                      </div>
                      </li> -->
                </ul>
                <!--/ul -->
             </div>
             <!--collapse -->
          </div>
          <!-- /container -->
       </div>
       <!-- /navbar -->
    </div>
    <!--/row -->
 </nav>
 <!-- /nav -->