@extends('layout.app')
@section('title', 'Blog || ePoralekha')
@section('content')
<!-- page wrapper starts -->
<div id="page-wrapper">
   <!-- Jumbotron -->
   <div class="jumbotron jumbotron-fluid">
      <div class="container" >
         <!-- jumbo-heading -->
         <div class="jumbo-heading" data-aos="fade-down">
            <h1>Blog</h1>
            <!-- Breadcrumbs -->
            <div aria-label="breadcrumb">
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Blog Home</li>
               </ol>
            </div>
            <!-- /breadcrumb -->
         </div>
         <!-- /jumbo-heading -->
      </div>
      <!-- /container -->
   </div>
   <!-- /jumbotron -->
   <!-- ==== Page Content ==== -->
   <div id="blog-home" class="page">
      <div class="container">
         <div class="row">
            <!-- Blog Entries Column -->
            <div class="col-lg-9 page-with-sidebar">
               <div class="row">
                  <?php $coun = 0; ?>
                  @foreach ($allPostData as $allPostData )
                        @if ($coun == 0)
                        <div class="col-lg-12 mb-5">
                           <!-- blog-box -->
                           <div class="blog-box">
                              <!-- image -->   
                              <a href="/single-blog/{{($allPostData->id)}}">
                                 <div class="image"><img src="{{asset('public/'.$allPostData->post_thumbnail)}}" alt=""/></div>
                              </a> 
                               <!-- blog-box-caption -->
                               <div class="blog-box-caption">
                                 <!-- date -->
                                 <div class="date"><span class="day">{{ date("d", strtotime($allPostData->public_date)) }}</span><span class="month">{{ date("F", strtotime($allPostData->public_date)) }}</span></div>
                                 <a href="/single-blog/{{($allPostData->id)}}">
                                    <h4>{{$allPostData->post_title}}</h4>
                                 </a>
                                 <!-- /link -->
                                 <p>
                                    {{Str::limit(strip_tags($allPostData->post_description, 10))}} 
                                 </p>
                              </div>
                              <!-- blog-box-footer -->
                              <div class="blog-box-footer">
                                 <div class="author">Posted by<a href="/single-blog/{{($allPostData->id)}}"><i class="fas fa-user"></i>Admin</a></div>
                                 <div class="comments"><a href="/single-blog/{{($allPostData->id)}}"><i class="fas fa-comment"></i>23</a></div>
                                 <!-- Button -->	 
                                 <div class="text-center col-md-12">
                                    <a href="/single-blog/{{($allPostData->id)}}" class="btn btn-primary ">Read more</a>
                                 </div>
                              </div>
                              <!-- /blog-box-footer -->
                           </div>
                           <!-- /blog-box -->
                        </div>
                        @else
                        <div class="col-lg-6 res-margin mb-4">
                           <!-- blog-box -->
                           <div class="blog-box single-blog-img">
                              <!-- image -->
                              @foreach ($domain_names as $domain_ip)    
                              <a href="/single-blog/{{($allPostData->id)}}">
                                 <div class="image"><img src="{{asset('public/'.$allPostData->post_thumbnail)}}" alt=""/></div>
                              </a>
                              @endforeach
                              <!-- blog-box-caption -->
                              <div class="blog-box-caption">
                                 <!-- date -->
                                 <div class="date"><span class="day">{{ date("d", strtotime($allPostData->public_date)) }}</span><span class="month">{{ date("F", strtotime($allPostData->public_date)) }}</span></div>
                                 <a href="/single-blog/{{($allPostData->id)}}">
                                    <h4>{{$allPostData->post_title}}</h4>
                                 </a>
                                 <!-- /link -->
                                 <p>
                                    {{substr(strip_tags($allPostData->post_description),0,100)}} 
                                 </p>
                              </div>
                              <!-- blog-box-footer -->
                              <div class="blog-box-footer">
                                 <div class="author">Posted by<a href="/single-blog/{{($allPostData->id)}}"><i class="fas fa-user"></i>Admin</a></div>
                                 <div class="comments"><a href="/single-blog/{{($allPostData->id)}}"><i class="fas fa-comment"></i>23</a></div>
                                 <!-- Button -->	 
                                 <div class="text-center col-md-12">
                                    <a href="/single-blog/{{($allPostData->id)}}" class="btn btn-primary ">Read more</a>
                                 </div>
                              </div>
                              <!-- /blog-box-footer -->
                           </div>
                           <!-- /blog-box -->
                        </div>
                        @endif    
                        <?php 
                           $coun++
                        ?>
                  @endforeach
                   
               </div>
               <!-- /row -->
               <div class="col-md-12 mt-5"> 
                  <!-- pagination -->
                  <nav aria-label="pagination"> 
                     <ul class="pagination"> 
                        @if ($allPostCount < 2) 
                        @for ($i = 1; $i < $allPostCount; $i++) 
                           <li class="page-item"><a class="page-link" href="#">{{$i}}</a></li>
                        @endfor
                        @else
                        <li class="page-item"><a class="page-link active" href="#">second</a></li>
                        @endif  
                        {{-- <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li> --}}
                     </ul>
                  </nav>
                  <!-- /nav -->
               </div>
               <!-- /col-md -->
            </div>
            <!-- /page-with-sdiebar -->   
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
                     
                     @foreach ($catPostData as $item) 
                        <a href="/blog/cat_post/{{ str_replace(' ','_',$item->catagories) }}" class="list-group-item list-group-item-action">
                        {{$item->catagories}}
                        </a> 
                     @endforeach  
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
                        @foreach ($allCatData as $item)
                           <a href="/blog/tag_post/{{$item->post_tags}}" class="badge badge-pill badge-default">
                           {{$item->post_tags}}
                           </a>
                        @endforeach  
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