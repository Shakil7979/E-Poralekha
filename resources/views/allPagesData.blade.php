@extends('layout.app')
@section('title', 'Single Page || ePoralekha')
@section('content') 
<!-- page wrapper starts -->
<div id="page-wrapper">
   <!-- Jumbotron -->
   <div class="jumbotron jumbotron-fluid">
      <div class="container" >
         <!-- jumbo-heading -->
         {{-- <div class="jumbo-heading" data-aos="fade-down">
            <h1>{{$post_title}} Pages</h1>
            <!-- Breadcrumbs --> 
            <nav aria-label="breadcrumb">
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{('/')}}">Home</a></li>
                  <li class="breadcrumb-item"><a href="{{('/blog')}}">Blog Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">{{$post_title}}</li>
               </ol>
            </nav>
            <!-- /breadcrumb -->
         </div> --}}
         <!-- /jumbo-heading -->
      </div>
      <!-- /container -->
   </div>
   <!-- /jumbotron -->
   <!-- ==== Page Content ==== -->
   <div class="page">
      <div class="container">
         <div class="row">
            <!-- Post Content Column -->
            <div class="col-lg-9 blog-card page-with-sidebar">
               <h2 class="mb-2">{{$post_title}}</h2>
               <!-- Post info-->
               <div class="post-info text-muted">
                  <i class="fas fa-calendar margin-icon"></i>{{ date("F d, Y", strtotime($publish_at)) }} by
                  <a href="#">Admin</a> 
               </div>
               <hr>
               <!-- Preview Image -->
               <img src="{{asset('public/'.$post_thumbnail)}}" class="img-fluid" alt="">
               <hr>
               <!-- Post Content -->
               <p class="lead">{{$post_title}}</p>
               <p>{{strip_tags($post_description)}}</p>
            </div>
            <!-- /page-with-sidebar -->
            <!-- Sidebar -->
            <!-- blog sidebar starts -->
            <div id="sidebar" class="h-50 col-lg-3 sticky-top order-lg-1">
               <!--widget-area notepad -->
               <div class="widget-area notepad">
                  <h5 class="sidebar-header">Search</h5>
                  <div class="input-group">
                     <input type="text" class="form-control" placeholder="Search for...">
                     <span class="input-group-btn">
                     <button class="btn btn-secondary btn-sm" type="button">Go!</button>
                     </span>
                  </div>
               </div>
               <!--/widget-area notepad -->
               <div class="widget-area notepad">
                  <h5 class="sidebar-header">Categories</h5>
                  <div class="list-group"> 
                        <a href="/blog/cat_post/{{$catagories}}" class="list-group-item list-group-item-action">
                        {{$catagories}}
                        </a> 
                  </div>
               </div>
               <!--/widget-area notepad -->
               <div class="widget-area notepad">
                  <h5 class="sidebar-header">Our video</h5>
                  <!-- video -->
                  <div class="embed-responsive embed-responsive-4by3">
                     <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/a6m3ZQBY31E"></iframe>
                  </div>
               </div>
               <!--/widget-area notepad -->
               <div class="widget-area notepad">
                  <h5 class="sidebar-header">Tags</h5>
                  <div class="tags-widget">  
                        <a href="/blog/tag_post/{{$post_tags}}" class="badge badge-pill badge-default">
                        {{$post_tags}}
                        </a> 
               </div>
               </div>
               <!--/widget-area notepad -->
               <div class="widget-area notepad">
                  <h5 class="sidebar-header">Follow us</h5>
                  <div class="contact-icon-info">
                     <ul class="social-media text-center">
                        <!--social icons -->
                        <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                     </ul>
                  </div>
                  <!--/contact-icon-info -->
               </div>
               <!--/widget-area notepad -->
            </div>
            <!--/sidebar -->      
         </div>
         <!-- /.row -->
      </div>
      <!-- /.container -->
   </div>
   <!-- /page -->
</div>
<!--/ page-wrapper -->
@endsection