@extends('layout.app')
@section('title', 'Contact || ePoralekha')
@section('content')
 
      <!-- page wrapper starts -->
      <div id="page-wrapper"><!-- Jumbotron -->
<div class="jumbotron jumbotron-fluid">
   <div class="container" >
      <!-- jumbo-heading -->
      <div class="jumbo-heading" data-aos="fade-down">
         <h1>Contact</h1>
         <!-- Breadcrumbs -->
         <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="index.php">Home</a></li>
               <li class="breadcrumb-item active" aria-current="page">Contact</li>
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
      <div class="row">
         <div class="col-lg-7">
            <h3>Contact Information</h3>
            <p>In aliquet magna nec lobortis maximus. Etiam rhoncus leo a dolor placerat, nec elementum ipsum convall.</p>
            <p>
             <!-- contact icons-->
            <ul class="list-inline mt-3 list-contact colored-icons">
               <li class="list-inline-item"><i class="fa fa-envelope margin-icon"></i>info@eporalekha.com</li>
               <li class="list-inline-item"><i class="fa fa-phone margin-icon"></i>(123) 456-789</li>
               <li class="list-inline-item" ><i class="fa fa-map-marker margin-icon"></i>Street Name 123 - New York</li>
            </ul>
            <!-- /list-->
            <!-- map-->
            {{-- <div id="map-canvas" class="mt-5"></div> --}}
            <div class="google_map">
               <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14598.778550014309!2d90.4161908!3d23.8294553!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x53d4e3d648db8eb2!2sAmin%20IT%20Ltd!5e0!3m2!1sbn!2sbd!4v1650171526433!5m2!1sbn!2sbd" width="600" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <!-- /map-->
         </div>
         <!-- /col-lg- -->
         <!-- contact box -->  
         <div class="col-lg-4 contact-form3 offset-lg-1 bg-light h-100">
            <div class="contact-image bg-light">
               <!-- envelope icon-->
               <i class="fas fa-envelope"></i>
            </div>
            <h5 class="text-center mt-3">Send us a message</h5> 

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
         <!-- /col-lg-->
      </div>
      <!-- /row -->
   </div>
   <!-- /container --></div>
<!-- /page --></div>
<!--/ page-wrapper --> 



@endsection