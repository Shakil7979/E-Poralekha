@extends('layout.app')
@section('title', 'ePoralekha || Website')
@section('content')
<!-- page wrapper starts -->
<div id="page-wrapper">
   <!-- ==== Slider ==== -->
   
   @foreach ($allBannerData as $item) 
   <div class="container-fluid p-0">
      <!-- Parallax Slider -->
      <div id="slider" class="parallax-slider" style="width:1200px;margin:0 auto;margin-bottom: 0px;">
         <!-- Slide 1 -->
         <div class="ls-slide" data-ls="duration:4000; transition2d:7;">
            <!-- background image  -->
            <img src="{{asset('public/'.$item->banner_bg)}}" class="ls-bg" alt="" />
            <!-- clouds  -->
            <img  src="{{asset("public/img/clouds.png")}} class="ls-l" alt="" style="top:56px;left:-100px;" data-ls="parallax:true; parallaxlevel:-5;">
            <!-- butterflies  -->
            <img  src="{{asset("public/img/butterflies.png")}}" class="ls-l" alt="" style="top:16px;left:0px;" data-ls=" parallax:true; parallaxlevel:4;">
            <!-- sun  -->
            <img  src="{{asset("public/img/sun.png")}}" class="ls-l" alt="" style="top:-190px;left:650px;" data-ls="parallax:true; parallaxlevel:-3;">
            <!--child image  -->
            <img  src="{{asset('public/'.$item->banner_img)}}" class="ls-l" alt="" style="top:166px;left:520px;" data-ls="offsetxin:10; offsetyin:120; durationin:1100; rotatein:5; transformoriginin:59.3% 80.3% 0; offsetxout:-80; durationout:400; parallax:true; parallaxlevel:10;">
            <!-- text  -->
            <div class="ls-l header-wrapper" data-ls="offsetyin:150; durationin:700; delayin:200; easingin:easeOutQuint; rotatexin:20; scalexin:1.4; offsetyout:600; durationout:400;">
               
               <div class="header-text">
                  <span>{{$item->welcome_title}}</span> 
                  <h1>{{$item->banner_website_title}}</h1> 
                  <div class="hidden-small"> 
                     <p class="header-p">{{strip_tags($item->banner_content)}}</p>
                     <a class="btn btn-secondary" href="{{$item->button_url}}">{{$item->button_text}}</a>
                  </div> 
               </div>

            </div>
            <!-- ls-l  -->
         </div>
         <!-- ls-slide -->
      </div>
      <!-- /slider -->
      <svg version="1.1" id="divider"  class="slider-divider" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
         viewBox="0 0 1440 126" preserveAspectRatio="none slice" xml:space="preserve">
         <path class="st0" d="M685.6,38.8C418.7-11.1,170.2,9.9,0,30v96h1440V30C1252.7,52.2,1010,99.4,685.6,38.8z"/>
      </svg>
   </div> 
   @endforeach 
   <!-- /container-fluid -->
   <!-- ==== Page Content ==== -->
       
   <div class="container">
      <!-- section -->  
      <section id="intro-cards"  class="row pb-0"> 

         @foreach ($bannerAllItemData as $item)
         <div class="col-lg-4" data-aos="zoom-out">
            <div class="card card-flip">
               <!-- front of card  -->  
               <div class="card bg-secondary text-light ">
                  <div class="p-5"> 
                        <h5 class="card-title text-light">{{$item->care_title}}</h5> 
                     <p class="card-text">
                        {{$item->care_short_desc}}
                     </p>
                     <!-- button show on mobile only,where flip is disabled --> 
                     <a href="{{$item->care_btn_url}}" class="btn d-lg-none">{{$item->care_btn_text}}</a>
                  </div>
                  <!-- /p-5 -->
                  <!-- image -->
                  <img class="card-img" src="{{asset("public/".$item->image_upload)}}" alt="">
               </div>
               <!-- /card -->
               <!-- back of card -->  			
               <div class="card bg-secondary text-light card-back">
                  <div class="card-body d-flex justify-content-center align-items-center">
                     <div class="p-4">
                        <h5 class="card-title text-light">{{$item->care_sec_title}}</h5>
                        <p class="card-text">{{$item->care_sec_desc}}
                        </p>
                        <!-- button -->
                        <a href="{{$item->care_btn_url}}" class="btn">{{$item->care_btn_text}}</a>
                     </div>
                     <!-- /p-4 -->
                  </div>
                  <!-- /card-body -->
               </div>
               <!-- /card -->
            </div>
            <!--/col-lg -->
         </div> 
         @endforeach
      </section>
      <!-- #intro-cards --> 
   </div>
   
   <!-- /container -->  
   <!-- section -->
       
   <section id="about-home" class="container-fluid pb-0">
      <div class="container">
         <!-- section heading -->   
          @foreach ($allAboutUsData as $item)
         <div class="section-heading text-center">
            <h2>{{$item->about_sec_title}}</h2>
            <p class="subtitle">{{$item->about_sec_pra}}</p>
         </div>
         <!-- /section-heading -->
         <div class="row">
            <div class="col-lg-7 ">
               <h3>{{$item->about_title}}</h3>
               <p class="mt-4 res-margin">{{strip_tags($item->about_content)}}</p>
               <a href="{{$item->button_url}}" class="btn btn-secondary ">{{$item->button_text}}</a>
            </div>
            <!-- /col-lg -->
            <div class="col-lg-5 res-margin">
               <!-- image -->
               <img class="img-fluid rounded" src="{{asset('public/'.$item->about_img)}}" alt="">
               <!-- ornament starts-->
               <div class="ornament-rainbow" data-aos="zoom-out"></div>
            </div>
            <!-- /col-lg -->
         </div> 
         @endforeach
         <!-- /row -->
             
         <h3 class="mt-5 text-center">What Parents say:</h3>
         <div class="row">
            <!-- testimonials -->
            <!-- testimonial carousel -->
            <div class="carousel-2items owl-carousel owl-theme col-md-12">
               <!-- testimonial -->
               
               @foreach ($homeParentsCommentsData as $item)
               <div class="testimonial">
                  <div class="content">
                     <p class="description">
                       {{strip_tags($item->parents_comments)}}                      
                     </p>
                  </div>
                  <!-- /content -->
                  <div class="testimonial-pic">
                     <img src="{{asset('public/'.$item->parents_img)}}" class="img-fluid" alt="">
                  </div>
                  <!-- /testimonial-pic -->
                  <div class="testimonial-review">
                     <h5 class="testimonial-title">{{$item->parents_name}} </h5>
                     <span class="post">{{$item->parents_desg}} </span>
                  </div>
                  <!-- /testimonial-review -->
               </div> 
                @endforeach 
            </div>
            <!-- /owl-testimonial -->      
         </div>
         <!-- /row -->
      </div>
      <!-- /container-->
      <!-- whale in water scene -->
      <!-- whale -->
      <img src="public/img/whale.png" class="floating-whale" alt="">
      <!-- waves -->
      <div class="waveHorizontals">
         <div id="waveHorizontal1" class="waveHorizontal"></div>
         <div id="waveHorizontal2" class="waveHorizontal"></div>
         <div id="waveHorizontal3" class="waveHorizontal"></div>
      </div>
      <!-- sea -->
      <div class="sea"></div>
      <!--/ whale in water scene ends -->
   </section> 
   <!-- /section ends -->
   <!-- section --> 
   <section id="features" class="bg-secondary text-light">
      <div class="container">
         @foreach ($homeFeatureData as $item)
             
         <!-- section heading -->  
         <div class="section-heading text-center">
            <h2>{{$item->feature_sec_title}}</h2>
            <p class="subtitle">{{$item->feature_sec_desc}}</p>
         </div>
         <!-- /section-heading -->
         <!-- features -->
         <div class="row ">
            <div class="col-lg-6">
               <div class="row ">
                  <div class="col-md-6 col-lg-6">
                     <!-- feature -->
                     <div class="feature-with-icon">
                        <div class="icon-features custom">
                           <!-- icon -->
                           {{-- <i class="flaticon-maternity text-primary"></i>   --}}
                           <i class="{{$item->f_item_1_icon}}"></i> 
                        </div>
                        <h5>{{$item->f_item_1_title}}</h5>
                        <p>{{$item->f_item_1_desc}}</p>
                     </div>
                     <!-- /feature-with-icon-->
                     <!-- feature -->
                     <div class="feature-with-icon mt-5">
                        <div class="icon-features custom">
                           <!-- icon -->
                           <i class="{{$item->f_item_2_icon}}"></i> 
                        </div>
                        <h5>{{$item->f_item_2_title}}</h5>
                        <p>{{$item->f_item_2_desc}}</p>
                     </div>
                     <!-- /feature-with-icon-->
                  </div>
                  <div class="col-md-6 col-lg-6">
                     <!-- feature -->
                     <div class="feature-with-icon">
                        <div class="icon-features custom">
                           <!-- icon -->
                           <i class="{{$item->f_item_3_icon}}"></i> 
                        </div>
                        <h5>{{$item->f_item_3_title}}</h5>
                        <p>{{$item->f_item_3_desc}}</p>
                     </div>
                     <!-- /feature-with-icon-->
                     <!-- feature -->
                     <div class="feature-with-icon mt-5">
                        <div class="icon-features custom">
                           <!-- icon -->
                           <i class="{{$item->f_item_4_icon}}"></i> 
                        </div>
                        <h5>{{$item->f_item_4_title}}</h5>
                        <p>{{$item->f_item_4_desc}}</p>
                     </div>
                     <!-- /feature-with-icon-->
                  </div>
                  <!-- /col-l -->
               </div>
               <!-- /row-->
            </div>
            <!-- /col-l -->
            <div class="col-lg-6 features-bg">
               <!-- image -->
               <img src="{{asset('public/'.$item->feature_img)}}" alt="" class="img-fluid"  data-aos="zoom-out"   data-aos-delay="300"/>
            </div>
            <!-- /col-l -->
         </div>
         <!-- /row --> 
         @endforeach
      </div>
      <!-- /container -->
   </section>
   <!-- /section ends -->
   <!-- section -->
   <section id="services-home" class="container-fluid">
      <div class="container pb-5">
         <!-- section heading -->  
         <div class="section-heading text-center">
            <h2>Our Services</h2>
            <p class="subtitle">what we offer</p>
         </div>
         <!-- /section heading -->
         <!-- row -->
         <div class="row vertical-tabs">
            <div class="col-lg-12">
               <!-- navigation -->
               <div class="tabs-with-icon">
                  <nav>
                     <div class="nav nav-tabs service_cat" id="nav-tab" role="tablist">
                        
                        @foreach ($homeServicesData as $item)
                        <a class="nav-item nav-link service_item" id="tab{{$item->id}}-tab" data-toggle="tab" href="#tab{{$item->id}}"><i class="flaticon-abc-block"></i>{{$item->services_cat}}</a>
                        @endforeach 
                     </div>
                  </nav>
                  <!-- tab-content -->
                  <div class="tab-content block-padding bg-light service_cat" id="nav-tabContent">


                     @foreach ($homeServicesData as $item)
                     <div class="tab-pane service_item" id="tab{{$item->id}}" role="tabpanel" aria-labelledby="tab{{$item->id}}-tab">
                        <!-- row -->
                        <div class="row">
                           <div class="col-lg-6">
                              <!-- image -->
                              <img src="{{asset('public/'.$item->services_img)}}" alt="" class="rounded img-fluid">
                              <!-- ornament starts-->
                              <div class="ornament-rainbow" data-aos="fade-right"></div>
                           </div>
                           <!-- col-lg -->
                           <div class="col-lg-6">
                              <h3>{{$item->services_cat}}</h3> 
                              <p>{{strip_tags($item->services_desc)}}</p>
                              <ul class="custom pl-0">
                                 <li>{{$item->services_list1}}</li>
                                 <li>{{$item->services_list2}}</li>
                                 <li>{{$item->services_list3}}</li>
                              </ul>
                              <!-- Button -->	 
                              <a href="/single-services/{{($item->id)}}" class="btn btn-secondary mt-4">{{$item->button_text}}</a>
                           </div>
                           <!-- /col-lg -->
                        </div>
                        <!-- row -->
                     </div> 
                     @endforeach
  
                  </div>
                  <!-- ./Tab-content -->
               </div>
               <!-- vertical-tabs -->
            </div>
            <!-- /col-lg-6 -->
         </div>
         <!-- /row --> 
      </div>
      <!-- /container -->
   </section>
   <!-- /section ends -->
   <!-- Section  -->
   <section id="counter-section" class="container-fluid counter-calltoaction bg-fixed overlay"  data-100-bottom="background-position: 50% 100px;"
      data-top-bottom="background-position: 50% -100px;" >
      <div id="counter" class="container">
         <div  class="row col-lg-10 offset-lg-1">
            <!-- Counter -->
            <div class="col-xl-4 col-md-4">
               <div class="counter">
                  <div class="counter-wrapper bg-primary">
                     <i class="counter-icon flaticon-teacher"></i>
                     <!-- insert your final value on data-count= -->
                     <div class="counter-value" data-count="30">0</div>
                     <h3 class="title">Professionals</h3>
                  </div>
               </div>
               <!-- /counter -->
            </div>
            <!-- /col-lg -->
            <!-- Counter -->
            <div class="col-xl-4 col-md-4">
               <div class="counter">
                  <div class="counter-wrapper bg-secondary">
                     <i class="counter-icon  flaticon-family"></i>
                     <!-- insert your final value on data-count= -->
                     <div class="counter-value" data-count="74">0</div>
                     <h3 class="title">Happy parents</h3>
                  </div>
               </div>
               <!-- /counter -->
            </div>
            <!-- /col-lg -->
            <!-- Counter -->
            <div class="col-xl-4 col-md-4">
               <div class="counter">
                  <div class="counter-wrapper bg-tertiary">
                     <i class="counter-icon flaticon-children"></i>
                     <!-- insert your final value on data-count= -->
                     <div class="counter-value" data-count="104">0</div>
                     <h3 class="title">Students</h3>
                  </div>
               </div>
               <!-- /counter -->
            </div>
            <!-- /col-lg -->		 
         </div>
         <!-- /row -->
      </div>
      <!-- /container -->
   </section>
   <!-- /section ends--><!-- section-->
   <section id="team-home" class="container">
      <!-- section heading -->  
      <div class="section-heading text-center">
         <h2>Our Team</h2>
         <p class="subtitle">Qualified Professionals</p>
      </div>
      <!-- /section-heading -->  
      <div class="row">
         <div class="col-lg-7">
            <h3>Meet our Talented Team</h3>
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <ul class="checkmark pl-0 font-weight-bold">
               <li>Over 30 Qualified professionals</li>
               <li>We offer you our quality services since 2002</li>
               <li>Fun and educational activities in our daily plan</li>
            </ul>
            <!-- /ul-->
         </div>
         <!-- /col-lg-->
         <div class="col-lg-5 res-margin">
            <img src="public/img/team/1.jpg" alt="" class="img-fluid blob2">
            <!-- ornament starts-->
            <div class="ornament-stars" data-aos="fade-down"></div>
         </div>
         <!-- /col-lg-->
         <div class="col-lg-12">
            <!-- team carousel -->  
            <div class="carousel-4items owl-carousel owl-theme mt-5">
               <!-- Team member 1 -->
               @foreach ($teamData as $item)    
               <div class="col-md-12 team-style1 notepad">
                  <div class="team_img">
                     <a href="team-single.php">
                     <img src="{{asset("public/".$item->image_upload)}}" class="img-fluid" alt="">
                     </a>
                     <!-- social icons -->
                     <ul class="social">
                        <li><a href="{{$item->email}}"><i class="fa fa-envelope"></i></a></li>
                        <li><a href="{{$item->facebook_url}}"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="{{$item->twitter_url}}"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="{{$item->linkedin_url}}"><i class="fab fa-linkedin"></i></a></li>
                     </ul>
                  </div>
                  <!-- /team_img -->
                  <div class="team-content">
                     <a href="#">
                        <h5 class="title">{{$item->t_member_name}}</h5>
                     </a>
                     <span class="post">{{$item->designation}}</span>
                     <p>{{strip_tags($item->desc)}}</p>
                  </div>
                  <!-- /team-content -->
               </div>
               @endforeach
               
            </div>
            <!-- /owl-team--> 
         </div>
         <!-- /col-lg-->
      </div>
      <!-- /row-->
   </section>
   <!-- /section ends-->
   <!-- section --> 
   <section id="gallery-home" class="container-fluid bg-tertiary no-bg-sm">
      <div class="container">
         <!-- section heading -->  
         <div class="section-heading text-center text-light">
            <h2>Gallery</h2>
            <p class="subtitle">Our facilities</p>
         </div>
         <!-- /section-heading -->
         <!-- centered Gallery navigation -->
         <ul class="nav nav-pills category-isotope center-nav">
            <li class="nav-item">
               <a class="nav-link active" href="#" data-toggle="tab" data-filter="*">All</a>
            </li> 
            @foreach ($gelCat as $item) 
            <li class="nav-item">
               <a class="nav-link" href="#" data-toggle="tab" data-filter="{{'.'.str_replace(' ','-',$item->gal_cat)}}">{{$item->gal_cat}}</a>
            </li>  
            @endforeach 

            
         </ul>
         <!-- /ul -->
         <!-- Gallery -->
         <div id="gallery-isotope" class="row mt-5 magnific-popup">
            <!-- Image 1 -->
            
            @foreach ($gelData as $item) 
            <div class="col-sm-6 col-md-6 col-lg-4 {{str_replace(' ','-',$item->gal_cat)}}">
               <div class="portfolio-item">
                  <div class="gallery-thumb">
                     <img class="img-fluid " src="{{asset('public/'.$item->image_upload)}}" alt="">
                     <span class="overlay-mask"></span>
                     <a href="{{asset('public/'.$item->image_upload)}}" class="link centered" title="You can add caption to pictures.">
                     <i class="fa fa-expand"></i></a>
                  </div>
               </div>
            </div> 
            @endforeach 
            {{-- <!-- Image 2 -->
            <div class="col-sm-6 col-md-6 col-lg-4 school">
               <div class="portfolio-item">
                  <div class="gallery-thumb">
                     <img class="img-fluid " src="public/img/gallery2.jpg" alt="">
                     <span class="overlay-mask"></span>
                     <a href="public/img/gallery2.jpg" class="link centered" title="You can add caption to pictures.">
                     <i class="fa fa-expand"></i></a>
                  </div>
               </div>
            </div>
            <!-- Image 3 -->
            <div class="col-sm-6 col-md-6 col-lg-4 school">
               <div class="portfolio-item">
                  <div class="gallery-thumb">
                     <img class="img-fluid " src="public/img/gallery3.jpg" alt="">
                     <span class="overlay-mask"></span>
                     <a href="public/img/gallery3.jpg" class="link centered" title="You can add caption to pictures.">
                     <i class="fa fa-expand"></i></a>
                  </div>
               </div>
            </div>
            <!-- Image 4 -->
            <div class="col-sm-6 col-md-6 col-lg-4 activities">
               <div class="portfolio-item">
                  <div class="gallery-thumb">
                     <img class="img-fluid " src="public/img/gallery4.jpg" alt="">
                     <span class="overlay-mask"></span>
                     <a href="public/img/gallery4.jpg" class="link centered" title="You can add caption to pictures.">
                     <i class="fa fa-expand"></i></a>
                  </div>
               </div>
            </div>
            <!-- Image 5 -->
            <div class="col-sm-6 col-md-6 col-lg-4 school">
               <div class="portfolio-item">
                  <div class="gallery-thumb">
                     <img class="img-fluid " src="public/img/gallery5.jpg" alt="">
                     <span class="overlay-mask"></span>
                     <a href="public/img/gallery5.jpg" class="link centered" title="You can add caption to pictures.">
                     <i class="fa fa-expand"></i></a>
                  </div>
               </div>
            </div>
            <!-- Image 6 -->
            <div class="col-sm-6 col-md-6 col-lg-4 school">
               <div class="portfolio-item">
                  <div class="gallery-thumb">
                     <img class="img-fluid " src="public/img/gallery6.jpg" alt="">
                     <span class="overlay-mask"></span>
                     <a href="public/img/gallery6.jpg" class="link centered" title="You can add caption to pictures.">
                     <i class="fa fa-expand"></i></a>
                  </div>
               </div>
            </div>
            <!-- Image 7 -->
            <div class="col-sm-6 col-md-6 col-lg-4 activities">
               <div class="portfolio-item">
                  <div class="gallery-thumb">
                     <img class="img-fluid " src="public/img/gallery7.jpg" alt="">
                     <span class="overlay-mask"></span>
                     <a href="public/img/gallery7.jpg" class="link centered" title="You can add caption to pictures.">
                     <i class="fa fa-expand"></i></a>
                  </div>
               </div>
            </div>
            <!-- Image 8 -->
            <div class="col-sm-6 col-md-6 col-lg-4 activities">
               <div class="portfolio-item">
                  <div class="gallery-thumb">
                     <img class="img-fluid " src="public/img/gallery8.jpg" alt="">
                     <span class="overlay-mask"></span>
                     <a href="public/img/gallery8.jpg" class="link centered" title="You can add caption to pictures.">
                     <i class="fa fa-expand"></i></a>
                  </div>
               </div>
            </div>
            <!-- Image 9 -->
            <div class="col-sm-6 col-md-6 col-lg-4 school">
               <div class="portfolio-item">
                  <div class="gallery-thumb">
                     <img class="img-fluid " src="public/img/gallery9.jpg" alt="">
                     <span class="overlay-mask"></span>
                     <a href="public/img/gallery9.jpg" class="link centered" title="You can add caption to pictures.">
                     <i class="fa fa-expand"></i></a>
                  </div>
               </div>
            </div>
            <!-- Image 10 -->
            <div class="col-sm-6 col-md-6 col-lg-4 school">
               <div class="portfolio-item">
                  <div class="gallery-thumb">
                     <img class="img-fluid " src="public/img/gallery10.jpg" alt="">
                     <span class="overlay-mask"></span>
                     <a href="public/img/gallery10.jpg" class="link centered" title="You can add caption to pictures.">
                     <i class="fa fa-expand"></i></a>
                  </div>
               </div>
            </div>
            <!-- Image 11 -->
            <div class="col-sm-6 col-md-6 col-lg-4 school">
               <div class="portfolio-item">
                  <div class="gallery-thumb">
                     <img class="img-fluid " src="public/img/gallery11.jpg" alt="">
                     <span class="overlay-mask"></span>
                     <a href="public/img/gallery11.jpg" class="link centered" title="You can add caption to pictures.">
                     <i class="fa fa-expand"></i></a>
                  </div>
               </div>
            </div>
            <!-- Image 12 -->
            <div class="col-sm-6 col-md-6 col-lg-4 school">
               <div class="portfolio-item">
                  <div class="gallery-thumb">
                     <img class="img-fluid " src="public/img/gallery12.jpg" alt="">
                     <span class="overlay-mask"></span>
                     <a href="public/img/gallery12.jpg" class="link centered" title="You can add caption to pictures.">
                     <i class="fa fa-expand"></i></a>
                  </div>
               </div>
            </div> --}}
         </div>
         <!-- /gallery-isotope-->	   
      </div>
      <!-- /container-->
   </section>
   <!-- /section ends -->
   <!-- section -->
   <section id="blogprev-home" data-100-bottom="background-position: 0% 120%;"
      data-top-bottom="background-position: 0% 100%;">
      <div class="container">
         <!-- section heading -->  
         <div class="section-heading text-center">
            <h2>Latest Blog Posts</h2>
            <p class="subtitle">Our Updates</p>
         </div>
         <!-- /section-heading -->
         <!-- blog carousel -->
         <div class="carousel-3items owl-carousel owl-theme mt-0"> 
         @foreach ($allPostData as $allPostData)
            <div class="blog-box blog-box-home"> 
               <a href="/single-blog/{{($allPostData->id)}}">
                  <div class="image"><img src="{{asset('public/'.$allPostData->post_thumbnail)}}" alt=""/></div>
               </a> 
               <div class="blog-box-caption"> 
                  <div class="date"><span class="day">{{ date("d", strtotime($allPostData->public_date)) }}</span><span class="month">{{ date("F", strtotime($allPostData->public_date)) }}</span></div>
                  <a href="/single-blog/{{($allPostData->id)}}">
                     <h4>{{$allPostData->post_title}}</h4>
                  </a> 
                  <p> 
                     {{Str::limit(strip_tags($allPostData->post_description, 10))}} 
                  </p>
               </div> 
               
               <div class="blog-box-footer">
                  <div class="author">Posted by<a href="#"><i class="fas fa-user"></i>Admin</a></div>
                  <div class="comments"><a href="/single-blog/{{($allPostData->id)}}"><i class="fas fa-comment"></i>23</a></div> 	 
                  <div class="text-center col-md-12">
                     <a href="/single-blog/{{($allPostData->id)}}" class="btn btn-primary ">Read more</a>
                  </div>
               </div> 
            </div> 
         @endforeach 
         
         </div>
         <!-- /owl-carousel -->
      </div>
      <!-- /container -->
   </section>
   <!-- /section ends-->
   <!-- section -->		   
   <section id="callout" class=" container-fluid bg-fixed">
      <div class="container">
         <!-- row -->
         <div class="row">
            <div class="col-lg-6 p-0" data-start="right: 50%;" 
               data-center="right:-5%;">
               <!-- image  -->
               <img src="public/img/calltoactionbg.jpg" class="img-fluid img-rounded" alt="">
            </div>
            <!-- text box  -->
            <div class="col-lg-6 bg-secondary p-5 justify-content-center align-self-center"  data-start="left: 50%;" 
               data-center="left:-5%;">
               <div class="text-light justify-content-center align-self-center">
                  <h3>Enroll Today</h3>
                  <p>Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus vi tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                  <a href="contact.php" class="btn btn-tertiary">Contact us</a>
               </div>
               <!-- /text-light  -->
            </div>
            <!-- /col-lg  -->
         </div>
         <!-- /row -->
      </div>
      <!-- /container -->
   </section>
   <!-- /section ends -->
   <!-- Section -->
   <section id="contact-home" class="container">
      <div class="row">
         <div class="col-lg-10 offset-lg-1 text-center">
            <!-- section heading -->  
            <div class="section-heading text-center">
               <h2>Contact Us</h2>
               <p class="subtitle">Get in Touch</p>
            </div>
            <!-- /section-heading -->  
            <!-- contact info boxes start-->
            <div class="contact-info res-margin">
               <div class="row res-margin">
                  <div class="col-lg-4">
                     <div class="contact-icon bg-secondary text-light">
                        <!---icon-->
                        <i class="fa fa-envelope top-icon"></i>
                        <!-- contact-icon info-->
                        <div class="contact-icon-info">
                           <h5>Write us</h5>
                           <p>info@eporalekha.com</p>
                        </div>
                     </div>
                     <!-- /contact-icon-->  
                  </div>
                  <!-- /col-lg-->
                  <div class="col-lg-4 res-margin">
                     <div class="contact-icon bg-secondary text-light">
                        <!---icon-->
                        <i class="fa fa-map-marker top-icon"></i>
                        <!-- contact-icon info-->
                        <div class="contact-icon-info">
                           <h5>Visit us</h5>
                           <p>Kha-54/3, Road No-4, Nikunja-2</p>
                        </div>
                     </div>
                     <!-- /contact-icon-->
                  </div>
                  <!-- /col-lg -->
                  <div class="col-lg-4 res-margin">
                     <div class="contact-icon bg-secondary text-light">
                        <!---icon-->
                        <i class="fa fa-phone top-icon"></i>
                        <!-- contact-icon info-->
                        <div class="contact-icon-info">
                           <h5>Call us</h5>
                           <p>+880 1888071000</p>
                        </div>
                     </div>
                     <!-- /contact-icon-->
                  </div>
                  <!-- /col-lg-->
               </div>
               <!-- /row -->
            </div>
            <!-- /contact-info-->
         </div>
         <!-- /col-lg-->
         <!--notepad -->
         <div class="col-lg-12 mt-5 block-padding force notepad pl-5 pr-5" >
            <div class="row">
               <div class="col-lg-7">
                  <!-- contact-info-->
                  <h4>Send us a message</h4>
                  <!-- Form Starts -->
                  <form action="{{route('send.email')}}" method="POST">
                     @csrf
                     <div id="contact_form">
                        <div class="form-group">
                           <div class="row">
                              <div class="col-md-6">
                                 <label>Name<span class="required">*</span></label>
                                 <input type="text" name="name" id="name" class="form-control input-field" required=""> 
                              </div>
                              <div class="col-md-6">
                                 <label>Email Address <span class="required">*</span></label>
                                 <input type="email" name="email" id="email" class="form-control input-field" required=""> 
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-12">
                                 <label>Subject</label>
                                 <input type="text" name="subject" id="subject" class="form-control input-field"> 
                              </div>
                              <div class="col-md-12">
                                 <label>Message<span class="required">*</span></label>
                                 <textarea name="message" id="message" id="message" class="textarea-field form-control" rows="3"  required=""></textarea>
                              </div>
                           </div>
                           <button type="submit" id="submit_btn" value="Submit" class="btn btn-tertiary">Send message</button>
                        </div>
                        <!-- /form-group-->
                        <!-- Contact results -->
                        <div id="contact_results"></div>
                     </div>
                  </form>
                  <!-- /contact-form-->
               </div>
               <!-- /contact-info-->
               <div class="col-lg-5">
                  <!-- map-->
                  <!-- <div id="map-canvas" class="mt-5 rounded"></div> -->
                  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14598.778550014309!2d90.4161908!3d23.8294553!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x53d4e3d648db8eb2!2sAmin%20IT%20Ltd!5e0!3m2!1sen!2sbd!4v1648963051796!5m2!1sen!2sbd" width="420" height="380" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
               </div>
               <!-- ornament starts-->
               <div class="ornament-stars mt-8" data-aos="zoom-out"></div>
            </div>
            <!-- /row-->
         </div>
         <!-- /col-lg-->
      </div>
      <!-- /.row-->
   </section>
   <!-- /Section -->
</div>
<!--/ page-wrapper -->
@endsection