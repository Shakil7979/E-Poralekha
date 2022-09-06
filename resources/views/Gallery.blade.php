@extends('layout.app')
@section('title', 'Gallery || ePoralekha')
@section('content')
<!-- page wrapper starts -->
<div id="page-wrapper">
   <!-- Jumbotron -->
   <div class="jumbotron jumbotron-fluid">
      <div class="container" >
         <!-- jumbo-heading -->
         <div class="jumbo-heading" data-aos="fade-down">
            <h1>Gallery</h1>
            <!-- Breadcrumbs -->
            <nav aria-label="breadcrumb">
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Gallery</li>
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
      <div class="container">
         <div class="col-lg-6 text-center offset-lg-3">
            <h2>Our Photo Gallery</h2>
            <p>In aliquet magna nec lobortis maximus. Etiam rhoncus leo a dolor placerat, nec elementum ipsum convall.</p>
         </div>
         <!-- /col-md -->
      </div>
      <!-- /container -->
      <!-- gallery -->
      <div class="container magnific-popup mt-5">
         <!-- row starts -->
         <div class="row">
            <!-- image -->
            @foreach ($gelData as $item)
                
            <div class="col-lg-3"> 
               <a href="{{asset("public/".$item->image_upload)}}" title="You can add caption to pictures.">
               <img src="{{asset("public/".$item->image_upload)}}" class="blob img-fluid" alt="">
               </a>
            </div>
            
            @endforeach
            {{-- <!-- image -->
            <div class="col-lg-3">
               <a href="{{asset("public/img/gallery/gallery2.jpg")}}" title="You can add caption to pictures.">
               <img src="{{asset("public/img/gallery/gallery2.jpg")}}" class="blob2 img-fluid" alt="">
               </a>
            </div>
            <!-- image -->
            <div class="col-lg-3">
               <a href="{{asset("public/img/gallery/gallery3.jpg")}}" title="You can add caption to pictures.">
               <img src="{{asset("public/img/gallery/gallery3.jpg")}}" class="blob img-fluid" alt="">
               </a>
            </div>
            <!-- image -->
            <div class="col-lg-3">
               <a href="{{asset("public/img/gallery/gallery4.jpg")}}" title="You can add caption to pictures.">
               <img src="{{asset("public/img/gallery/gallery4.jpg")}}" class="blob2 img-fluid" alt="">
               </a>
            </div> --}}
         </div>
         {{-- <!-- /row -->
         <!-- row starts -->
         <div class="row mt-4">
            <!-- image -->
            <div class="col-lg-3">
               <a href="{{asset("public/img/gallery/gallery5.jpg")}}" title="You can add caption to pictures.">
               <img src="{{asset("public/img/gallery/gallery5.jpg")}}" class="blob2 img-fluid" alt="">
               </a>
            </div>
            <!-- image -->
            <div class="col-lg-3">
               <a href="{{asset("public/img/gallery/gallery6.jpg")}}" title="You can add caption to pictures.">
               <img src="{{asset("public/img/gallery/gallery6.jpg")}}" class="blob img-fluid" alt="">
               </a>
            </div>
            <!-- image -->
            <div class="col-lg-3">
               <a href="{{asset("public/img/gallery/gallery7.jpg")}}" title="You can add caption to pictures.">
               <img src="{{asset("public/img/gallery/gallery7.jpg")}}" class="blob2 img-fluid" alt="">
               </a>
            </div>
            <!-- image -->
            <div class="col-lg-3">
               <a href="{{asset("public/img/gallery/gallery8.jpg")}}" title="You can add caption to pictures.">
               <img src="{{asset("public/img/gallery/gallery8.jpg")}}" class="blob img-fluid" alt="">
               </a>
            </div>
         </div>
         <!-- /row -->
         <!-- row starts -->
         <div class="row mt-4">
            <!-- image -->
            <div class="col-lg-3">
               <a href="{{asset("public/img/gallery/gallery9.jpg")}}" title="You can add caption to pictures.">
               <img src="{{asset("public/img/gallery/gallery9.jpg")}}" class="blob img-fluid" alt="">
               </a>
            </div>
            <!-- image -->
            <div class="col-lg-3">
               <a href="{{asset("public/img/gallery/gallery10.jpg")}}" title="You can add caption to pictures.">
               <img src="{{asset("public/img/gallery/gallery10.jpg")}}" class="blob2 img-fluid" alt="">
               </a>
            </div>
            <!-- image -->
            <div class="col-lg-3">
               <a href="{{asset("public/img/gallery/gallery11.jpg")}}" title="You can add caption to pictures.">
               <img src="{{asset("public/img/gallery/gallery11.jpg")}}" class="blob img-fluid" alt="">
               </a>
            </div>
            <!-- image -->
            <div class="col-lg-3">
               <a href="{{asset("public/img/gallery/gallery12.jpg")}}" title="You can add caption to pictures.">
               <img src="{{asset("public/img/gallery/gallery12.jpg")}}" class="blob2 img-fluid" alt="">
               </a>
            </div>
         </div>
         <!-- /row --> --}}
      </div>
      <!-- /container -->
   </div>
   <!-- /page -->
</div>
<!--/ page-wrapper -->
@endsection