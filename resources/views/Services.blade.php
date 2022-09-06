@extends('layout.app')
@section('title', 'Services || ePoralekha ')
@section('content')

 
 <!-- page wrapper starts -->
 <div id="page-wrapper"><!-- Jumbotron -->
<div class="jumbotron jumbotron-fluid">
   <div class="container" >
      <!-- jumbo-heading -->
      <div class="jumbo-heading" data-aos="fade-down">
         <h1>Services</h1>
         <!-- Breadcrumbs -->
         <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="index.php">Home</a></li>
               <li class="breadcrumb-item active" aria-current="page">Services</li>
            </ol>
         </nav>
         <!-- /breadcrumb -->
      </div>
      <!-- /jumbo-heading -->
   </div>
   <!-- /container -->
</div>
<!-- /jumbotron -->
<!-- ==== Page Content ==== -->
<div class="page">
   <div class="container-fluid block-padding">
      <div class="container ">
         <div class="row">
            <div class="col-lg-7 justify-content-center align-self-center">
               <h3><span class="text-secondary">Safe and Healthy</span> learning environment for all children</h3>
               <p>
                  Quisque at odio nunc. Etiam ac nibh egestas, accumsan felis id, fermentum purus. Quisque vitae hendrerit elit. Maecenas ipsum mi, iaculis quis mattis cursus, auctor ac magna. Integer felis metus, aliquet in dignissim ut, varius et odio. Donec malesuada diam quis dignissim suscipit. Praesent purus turpis, tristique hendrerit
               </p>
               <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et ma</p>
               <!-- Button -->	 
               <a href="{{('/contact')}}" class="btn btn-quaternary mt-2">Contact us</a>
            </div>
            <!-- /col-lg -->
            <div class="col-lg-5 res-margin">
               <img src="public/img/services/serviceimg2.jpg" alt="" class="moving-blob img-fluid">
            </div>
            <!-- /col-lg -->
         </div>
         <!-- /row -->
      </div>
      <!-- /container -->
   </div>
   <!-- /container-fluid -->
   <!-- SVG divider  -->
{{-- <svg version="1.1" id="divider"  class="primary" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 1440 126" preserveAspectRatio="none slice" xml:space="preserve">
<path class="st0" d="M685.6,38.8C418.7-11.1,170.2,9.9,0,30v96h1440V30C1252.7,52.2,1010,99.4,685.6,38.8z"/>
</svg>   <!-- services carousel --> --}}
   <div class="container-fluid bg-primary block-padding pattern2 pt-lg-0">
      <h2 class="text-light text-center pt-5">Our Services</h2>
      <!-- image  -->
      <div class="container">
           <div class="carousel-3items owl-carousel owl-theme col-lg-12">
            <!-- service 1  -->
            
            @foreach ($homeServicesData2 as $item)
            <div class="serviceBox2">
               <!-- service icon -->
               <div class="service-icon">
                  <a href="/single-services/{{$item->id}}">
                  <img src="{{asset('public/'.$item->services_img)}}" alt="" class="blob img-fluid">
                  </a>
               </div>
               <!-- service content -->
               <div class="service-content">
                  <a href="services-single.php">
                     <h4 class="service-head">{{$item->services_title}}</h4>
                  </a>
                  <p>
                     {{strip_tags($item->services_desc)}}
                  </p>
                  <!-- Button -->	 
                  <a href="/single-services/{{$item->id}}" class="btn btn-quaternary  btn-sm mt-2 ml-1">Read More</a>
               </div>
            </div> 
            @endforeach
           
         </div>
         <!-- /owl-services -->      </div>
      <!-- /container -->
   </div>
   <!-- /mt-5 -->
   <!-- container-->
   <div class="container block-padding">
      <div class="row">
         <div class="col-lg-6">
            <img src="public/img/services/serviceimg1.jpg" alt="" class="img-fluid rounded">
            <!-- ornament-->
            <div class="ornament-stars" data-aos="fade-up-right"></div>
         </div>
         <div class="col-lg-6 res-margin">
            <h3 class="res-margin">Frequently asked questions</h3>
            <div class="accordion mt-5">
               <!-- collapsible accordion 1 -->
               <div class="card">
                  <div class="card-header">
                     <a class="card-link" data-toggle="collapse" href="#collapseOne">
                     Our Philosophy
                     </a>
                  </div>
                  <!-- /card-header -->
                  <div id="collapseOne" class="collapse show" data-parent=".accordion">
                     <div class="card-body">
                        <p>Donec commodo sodales ex, scelerisque laoreet nibh hendrerit id. In aliquet magna nec lobortis maximus. Etiam rhoncus leo a dolor placerat, nec elementum ipsum convall.</p>
                     </div>
                  </div>
               </div>
               <!-- /card -->
               <!-- collapsible accordion 2 -->
               <div class="card">
                  <div class="card-header">
                     <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                     Our Organization
                     </a>
                  </div>
                  <div id="collapseTwo" class="collapse" data-parent=".accordion">
                     <div class="card-body">
                        <p>Etiam rhoncus leo a dolor placerat, nec elementum ipsum convall Maecenas at arcu risus scelerisque laoree.</p>
                     </div>
                  </div>
               </div>
               <!-- /card -->
               <!-- collapsible accordion 3 -->
               <div class="card">
                  <div class="card-header">
                     <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                     Partnerships with our team
                     </a>
                  </div>
                  <div id="collapseThree" class="collapse" data-parent=".accordion">
                     <div class="card-body">
                        <p>Aliquam erat volutpat In id fermentum augue, ut pellentesque leo. Maecenas at arcu risus. Donec commodo sodales ex, scelerisque laoreet nibh hendrerit id. In aliquet magna nec lobortis maximus. Etiam rhoncus leo a dolor placerat, nec elementum ipsum convall.</p>
                     </div>
                  </div>
               </div>
               <!-- /card -->
            </div>
            <!-- /accordion -->
         </div>
         <!-- /col-lg-8 -->
      </div>
      <!-- /row -->
   </div>
   <!-- /container -->
</div>
<!-- /page --></div>
<!--/ page-wrapper -->

@endsection 