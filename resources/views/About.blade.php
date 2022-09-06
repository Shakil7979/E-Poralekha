@extends('layout.app')
@section('title', 'About || ePoralekha')
@section('content')
 
      <!-- page wrapper starts -->
<div id="page-wrapper"><!-- Jumbotron -->
<div class="jumbotron jumbotron-fluid">
   <div class="container" >
      <!-- jumbo-heading -->
      <div class="jumbo-heading" data-aos="fade-down">
         <h1>About Us</h1>
         <!-- Breadcrumbs -->
         <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="index.php">Home</a></li>
               <li class="breadcrumb-item active" aria-current="page">About us</li>
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
   <div class="container block-padding">
      <!--row -->
      <div class="row">
         <div class="col-lg-8">
            <h3>Engaging Learning Environment </h3>
            <p class="h7 mt-3 mb-4">your child will develop self-esteem, independence and language</p>
            <p>Etiam vestibulum sit amet nulla vel ornare. Vestibulum vitae turpis ac sapien pharetra facilisis. Curabitur non libero justo. Suspendisse at ultrices velit. Quisque aliquet quis nibh sed feugiat. Curabitur et quam felis. Nulla rhoncus laoreet dolor, et vestibulum sem consectetur a. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tincidunt turpis ut sagittis tempor.
            </p>
			<ul class="custom pl-0">
               <li>Over 30 Qualified professionals</li>
               <li>We offer you our quality services since 2002</li>
               <li>Fun and educational activities in our daily plan</li>
            </ul>
			 <!-- /custom-ul-->          
         </div>
         <!-- /col-lg-->
         <div class="col-lg-4">
            <img src="{{asset("public/img/about/about1.jpg")}}" class="img-fluid blob" alt="">
            <!-- ornament starts-->
            <div class="ornament-bubbles" data-aos="fade-right"></div>
         </div>
         <!-- /col-lg-->
		 <!-- notepad -->
         <div class="col-lg-12">
            <div class="notepad mt-5"  data-aos="zoom-out">
               <div class="row">
                  <div class="col-lg-4">
                     <img src="{{asset("public/img/about/about3.jpg")}}" class="img-fluid rounded rotate1" alt="">
                     <!-- ornament starts-->
                     <div class="ornament-rainbow"  data-aos="zoom-out"></div>
                  </div>
                  <!-- /col-lg-->
                  <div class="col-lg-8">
                     <h4 class="mt-3">Our Educational Plan</h4>
                     <p class="res-margin">Maecenas at arcu risus. Donec commodo sodales ex, scelerisque laoreet nibh hendrerit id. In aliquet magna nec lobortis maximus. Etiam rhoncus leo a dolor placerat, nec elementum ipsum convall.</p>
                     <p>Etiam rhoncus leo a dolor placerat, nec elementum ipsum convall Maecenas at arcu risus scelerisque laoree. arcu risus onec comm nec elementum ipsum convall.</p>
                     <a href="contact.php"  class="btn btn-tertiary">Contact Us</a>
                  </div>
				  <!-- /col-lg-->
               </div>
               <!-- /row -->
            </div>
            <!-- /notepad -->
         </div>
         <!-- /col-lg-->
      </div>
      <!-- /row -->		 
   </div>
    <!-- /container -->
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
<!-- /section ends-->   <div class="container block-padding">
      <!-- row-->
      <div class="row">
         <div class="col-lg-6">
            <!-- accordion -->
            <div class="accordion">
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
                        <p>Aliquam erat volutpat In id fermentum augue, ut pellentesque leo. Maecenas at arcu risus. Donec commodo sodales ex, scelerisque laoreet nibh hendrerit id. In aliquet magna nec lobortis maximus. Etiam rhoncus leo a dolor placerat, nec elementum ipsum convall.</p>
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
                        <p>Etiam rhoncus leo a dolor placerat, nec elementum ipsum convall Maecenas at arcu risus scelerisque laoree.</p>
                     </div>
                  </div>
               </div>
               <!-- /card -->
            </div>
            <!-- /accordion -->
         </div>
         <!-- /col-lg-->
         <div class="col-lg-6">
            <h3 class="res-margin">Qualified Staff</h3>
            <p class="h7 mt-3 mb-3">Consectetur adipiscing elit. Quisque tincidunt turpis ut sagittis tempor.</p>
            <p>Etiam vestibulum sit amet nulla vel ornare. Vestibulum vitae turpis ac sapien pharetra facilisis. Curabitur non libero justo. Suspendisse at ultrices velit. Quisque aliquet quis nibh sed feugiat. Curabitur et quam felis. Nulla rhoncus laoreet dolor, et vestibulum sem consectetur a. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tincidunt turpis ut sagittis tempor.
            </p>
            <!-- buttons -->
            <a href="{{('/contact')}}"  class="btn btn-tertiary">Contact Us</a> 
         </div>
         <!-- /col-lg-->
      </div>
      <!-- /row -->
   </div>
   <!-- /container -->
</div>
<!-- /page -->
</div>
<!--/ page-wrapper --> 



@endsection