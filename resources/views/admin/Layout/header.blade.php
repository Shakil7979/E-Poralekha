 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
  "use strict";
    $(document).ready(function(){
      $(".swal-5").click(function () {
        swal('Oh Ho', "You Don't Have Permission! please contact with admin", 'error');
      });
    })
  
</script> 
<div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar sticky">
        <div class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="admin_bars_btn nav-link nav-link-lg
									collapse-btn"> <i data-feather="align-justify"></i></a></li>
            <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                <i data-feather="maximize"></i>
              </a></li>
              <li><a target="_blank" href="{{('/')}}" class="nav-link nav-link-lg view-websites-btn ">
                <i data-feather="globe"></i> &nbsp; View Website
              </a></li>
            
          </ul>
        </div>
        <ul class="navbar-nav navbar-right align-items-center">
          <li class="dropdown">
            <!-- partial:index.partial.html -->
              <div id="MyClockDisplay" class="clock" onload="showTime()"></div>
          </li>
         
          <li class="dropdown"><a href="#" data-toggle="dropdown"
              class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image" src="{{asset('public/admin-assets/img/user.png')}}"
                class="user-img-radious-style"> <span class="d-sm-none d-lg-inline-block"></span></a>
            <div class="dropdown-menu dropdown-menu-right pullDown">
              <div class="dropdown-title">Hello Super Admin</div>
              <a href="#" class="dropdown-item has-icon"> <i class="far
										fa-user"></i> Profile
              </a>
              <div class="dropdown-divider"></div>
              <a href=" {{url('/administrator/logout')}} " class="dropdown-item has-icon text-danger"> <i class="fas fa-sign-out-alt"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a id="admin_main_icon" href="{{url('/administrator')}}"> <img alt="image" src="{{asset('public\images\upload\site_setting\website_logo.png')}}" class="header-logo" /> <span
                class="logo-name"></span>
            </a>
            <a id="admin_fav_icon" href="{{url('/administrator')}}"> <img alt="image" src="{{asset('public\images\upload\site_setting\favicon_icon.png')}}" class="header-logo" /> <span
                class="logo-name"></span>
            </a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown">
              <a href="{{url('/administrator')}}" class="nav-link"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i class="fas fa-newspaper"></i><span>Post</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href=" {{url('/administrator/news/posts')}}">Post List</a></li>
                <li><a class="nav-link" href=" {{url('/administrator/news/pages')}}">Page List</a></li>
                <li><a class="nav-link" href=" {{url('/administrator/news/create-post')}}">Add New Post</a></li>    
                <li><a class="nav-link" href=" {{url('/administrator/news/create-page')}}">Add New Page</a></li>    
                <li><a class="nav-link" href=" {{url('/administrator/news/post-categories')}}">Categories</a></li> 
              </ul>
            </li> 
            <li class="dropdown">
              <a href="#" class=" nav-link menu-toggle has-dropdown"><i class="fas fa-user"></i><span>Student Information</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link swal-5" href="#">All Student</a></li>
                <li><a class="nav-link swal-5" href="#">Student Admission</a></li>
                <li><a class="nav-link swal-5" href="#">Online Admission</a></li>
                <li><a class="nav-link swal-5" href="#">Student Categories</a></li>
                <li><a class="nav-link swal-5" href="#">Teacher Permission</a></li>
                <li><a class="nav-link swal-5" href="#">Parent</a></li> 
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class=" nav-link menu-toggle has-dropdown"><i class="fas fa-dollar-sign"></i><span>Fees Collection</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link swal-5" href="#"> Collect Fees</a></li>
                <li><a class="nav-link swal-5" href="#"> Search Fees Payment</a></li>
                <li><a class="nav-link swal-5" href="#"> Search Due Fees</a></li>
                <li><a class="nav-link swal-5" href="#"> Fees Master</a></li>
                <li><a class="nav-link swal-5" href="#"> Fees Discount</a></li>
                <li><a class="nav-link swal-5" href="#"> Fees Reminder</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class=" nav-link menu-toggle has-dropdown"><i class="fas fa-calendar-check"></i><span>Attendance</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link swal-5" href="#">Students Attendance</a></li>
                <li><a class="nav-link swal-5" href="#"> Attendance By Date</a></li>
                <li><a class="nav-link swal-5" href="#"> Approve Leave</a></li> 
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class=" nav-link menu-toggle has-dropdown"><i class="fas fa-book-reader"></i><span>Examination</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link swal-5" href="#"> Exam Schedule</a></li>
                <li><a class="nav-link swal-5" href="#"> Exam Result</a></li>
                <li><a class="nav-link swal-5" href="#"> Admit Card</a></li>
                <li><a class="nav-link swal-5" href="#">Markseet</a></li> 
                <li><a class="nav-link swal-5" href="#">Mark Grade</a></li> 
              </ul>
            </li>
            {{-- <li class="dropdown">
              <a href="#" class=" nav-link menu-toggle has-dropdown"><i class="fas fa-book-reader"></i><span>Academic</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link swal-5" href="#">Daily Attendance</a></li>
                <li><a class="nav-link swal-5" href="#">Class Rutin</a></li>
                <li><a class="nav-link swal-5" href="#"> Class Timetable  </a></li>
                <li><a class="nav-link swal-5" href="#">Teachers Timetable</a></li>
                <li><a class="nav-link swal-5" href="#">Subject</a></li>
                <li><a class="nav-link swal-5" href="#">Syllabus</a></li> 
                <li><a class="nav-link swal-5" href="#">Class</a></li>
                <li><a class="nav-link swal-5" href="#">Class Room</a></li>
                <li><a class="nav-link swal-5" href="#">Department</a></li>
                <li><a class="nav-link swal-5" href="#">Event calender</a></li>
              </ul>
            </li> --}}
            <li class="dropdown">
              <a href="#" class=" nav-link menu-toggle has-dropdown"><i class="fas fa-bullhorn"></i><span>Communicate</span></a>
              <ul class="dropdown-menu">  
                <li><a class="nav-link swal-5" href="#">Notice Board</a></li>
                <li><a class="nav-link swal-5" href="#">Send Mail</a></li> 
                <li><a class="nav-link swal-5" href="#">Send Message</a></li>  
              </ul>
            </li>
            <li class="dropdown"> 
              <a href="#" class=" nav-link menu-toggle has-dropdown"><i class="fas fa-book"></i><span>Library</span></a>
              <ul class="dropdown-menu">  
                <li><a class="nav-link swal-5" href="#">Book List</a></li>
                <li><a class="nav-link swal-5" href="#">Issue Return</a></li> 
                <li><a class="nav-link swal-5" href="#">Add Student</a></li>  
                <li><a class="nav-link swal-5" href="#">Add Staff Member</a></li>  
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class=" nav-link menu-toggle has-dropdown"><i class="fas fa-briefcase"></i><span>Home Work</span></a>
              <ul class="dropdown-menu">  
                <li><a class="nav-link swal-5" href="#">Add Home Work</a></li>
                <li><a class="nav-link swal-5" href="#">All Home Work</a></li>  
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class=" nav-link menu-toggle has-dropdown"><i class="fas fa-bookmark"></i><span>Certificate</span></a>
              <ul class="dropdown-menu">  
                <li><a class="nav-link swal-5" href="#">Student Certificate</a></li>
                <li><a class="nav-link swal-5" href="#">Student ID Card</a></li>  
                <li><a class="nav-link swal-5" href="#">Staff ID Card</a></li>  
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class=" nav-link menu-toggle has-dropdown"><i class="fas fa-file-invoice-dollar"></i><span> Accounting</span></a>
              <ul class="dropdown-menu">  
                <li><a class="nav-link swal-5" href="#">Student fee manager</a></li>
                <li><a class="nav-link swal-5" href="#">Expense category</a></li> 
                <li><a class="nav-link swal-5" href="#">Expense manager</a></li>  
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class=" nav-link menu-toggle has-dropdown"><i class="fas fa-wrench"></i><span>  Settings</span></a>
              <ul class="dropdown-menu">  
                <li><a class="nav-link" href="{{('/administrator/settings/site_setting')}}">Site settings</a></li> 
                <li><a class="nav-link" href="{{'/administrator/settings/headers'}}">Header settings</a></li> 
                <li><a class="nav-link" href="{{'/administrator/settings/footers'}}">Footer settings</a></li> 
                <li><a class="nav-link swal-5" href="#">System settings</a></li> 
                <li><a class="nav-link swal-5" href="#">School settings</a></li>  
                <li><a class="nav-link swal-5" href="#">Payment settings</a></li>  
                <li><a class="nav-link swal-5" href ="#">Language settings</a></li>  
                <li><a class="nav-link swal-5" href="#">Smtp settings</a></li>  
                <li><a class="nav-link swal-5" href="#">About</a></li>   
              </ul>
            </li>

            <li class="menu-header">Content Manage</li> 
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i class="fas fa-newspaper"></i><span>Home</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href=" {{url('/administrator/home/banner-section')}}">Banner Section</a></li>
                <li><a class="nav-link" href=" {{url('/administrator/home/banner-item')}}">Banner Items</a></li>    
                <li><a class="nav-link" href=" {{url('/administrator/home/about-us')}}">About Us</a></li> 
                <li><a class="nav-link" href=" {{url('/administrator/home/parents-say')}}">Parents Say</a></li> 
                <li><a class="nav-link" href=" {{url('/administrator/home/features')}}">Features</a></li> 
                <li><a class="nav-link" href=" {{url('/administrator/home/services')}}">Services</a></li> 
                {{-- <li><a class="nav-link" href=" {{url('/administrator/home/counter-section')}}">Counter Section</a></li>  --}}
                <li><a class="nav-link" href=" {{url('/administrator/home/team')}}">Team</a></li> 
                <li><a class="nav-link" href=" {{url('/administrator/home/gallery')}}">Gallery</a></li> 
                {{-- <li><a class="nav-link" href=" {{url('/administrator/home/posts')}}">Posts</a></li>  --}}
                {{-- <li><a class="nav-link" href=" {{url('/administrator/home/enroll')}}">Enroll</a></li>  --}}
                {{-- <li><a class="nav-link" href=" {{url('/administrator/home/contact ')}}">Contact </a></li>  --}}
              </ul>
            </li> 
            
            
          </ul>
        </aside>
      </div>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <!-- add content here -->