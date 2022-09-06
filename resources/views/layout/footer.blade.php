<?php 
   use App\Models\site_settings_model;
   use App\Models\header_settings_model;
   use App\Models\footer_text_model;

   $allHeadersData = header_settings_model::all();
   $headerSettingsData = json_decode(header_settings_model::all());
   $footerTextData = footer_text_model::all(); 

   $allSiteSettingData = site_settings_model::all();
   if($allSiteSettingData->count() == 0){ 
      $footer_logo = "null"; 
   }
   else{
      foreach ($allSiteSettingData as $key) { 
            $footer_logo = $key['footer_logo']; 
      }
   }


?> 
<div id="footer"  class="footer-1 1-footer">
    <svg version="1.1" id="footer-divider"  class="secondary" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
         viewBox="0 0 1440 126" xml:space="preserve" preserveAspectRatio="none slice">
    <path class="st0" d="M685.6,38.8C418.7-11.1,170.2,9.9,0,30v96h1440V30C1252.7,52.2,1010,99.4,685.6,38.8z"/>
    </svg>
    <!-- ==== footer ==== -->
    <footer class="bg-secondary text-light">
       <div class="container">
        <!-- row -->
          <div class="row">
             <div class="col-lg-4 text-center">
                 <!-- logo -->
                <img src="{{asset('public/'.$footer_logo)}}"  class="logo-footer img-fluid" alt=""/>
                <h5 class="mt-3">Subscribe to our newsletter</h5>
                <!-- Mailist Form -->				
                <div id="mc_embed_signup">
                   <!-- your mailist address in the line bellow -->
                   <form action="#" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                      <div id="mc_embed_signup_scroll">
                         <div class="mc-field-group">
                            <div class="input-group">
                               <input class="form-control input-lg required email" type="email" value="" name="EMAIL" placeholder="Your email here" id="mce-EMAIL">
                               <span class="input-group-btn">
                               <button class="btn btn-tertiary" type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe">Subscribe</button>
                               </span>
                            </div>
                            <!-- Subscription results -->
                            <div id="mce-responses" class="mailchimp">
                               <div class="alert alert-danger response" id="mce-error-response"></div>
                               <div class="alert alert-success response" id="mce-success-response"></div>
                            </div>
                         </div>
                         <!-- /mc-fiel-group -->									
                      </div>
                      <!-- /mc_embed_signup_scroll -->
                   </form>
                   <!-- /form ends -->
                </div>
                <!-- /mc_embed_signup -->		  
             </div>
             <!--/ col-lg -->
             <div class="col-lg-4 text-center res-margin">
                <h5>Contact Us</h5>

                @foreach ($headerSettingsData as $item) 

                <ul class="list-unstyled mt-3">
                   <li class="mb-1"><i class="fas fa-phone margin-icon "></i>{{$item->phone}}</li>
                   <li class="mb-1"><i class="fas fa-envelope margin-icon"></i>{{$item->email}}</li>
                   <li><i class="fas fa-map-marker margin-icon"></i>{{$item->address}}</li>
                </ul>
                <!--/ul -->
                <!-- Start Social Links -->
                <ul class="social-list text-center list-inline mt-2">
                  <li class="list-inline-item"><a title="Facebook" href="{{$item->facebook_url}}"><i class="fab fa-facebook-f"></i></a></li>
                  <li class="list-inline-item"><a title="Twitter" href="{{$item->twitter_url}}"><i class="fab fa-twitter"></i></a></li>
                  <li class="list-inline-item"><a  title="Instagram" href="{{$item->instagram_url}}"><i class="fab fa-instagram"></i></a></li>
                </ul>
                
                @endforeach
                <!-- /End Social Links -->
             </div>
             <!--/ col-lg -->
             @foreach ($footerTextData as $item) 
             <div class="col-lg-4 text-center">
                <h5>Working Hours</h5>
                <ul class="list-unstyled mt-3">
                   <li class="mb-1">{{$item->st_day}} to {{$item->end_day}}</li>
                   <li class="mb-1">Open from {{date('h',strtotime($item->o_start_time))}}am - {{date('h',strtotime($item->o_end_time))}}pm</li>
                   <li class="mb-1">Holidays - Closed</li>
                   <li>Weekends - Closed</li>
                </ul>
                <!--/ul -->
             </div>
             @endforeach
             <!--/ col-lg -->
          </div>
          <!--/ row-->
          <hr/>
          <div class="row">
                <div class="credits col-6">
                   <p>{{$item->copy_text}} <a href="{{$item->d_by_url}}">{{$item->d_by_text}}</a></p>
                </div>
                <div class="credits col-6 text-right">
                   <p>{{$item->hosted_text}}<a href="{{$item->hosted_url}}"> {{$item->hosted_com}}</a></p>
                </div>
                <!--/credits -->
             </div>
          <!--/row-->
       </div>
       <!--/ container -->
       <!-- Go To Top Link -->
       <div class="page-scroll hidden-sm hidden-xs">
          <a href="#top" class="back-to-top"><i class="fa fa-angle-up"></i></a>
       </div>
       <!--/page-scroll-->
    </footer>
    <!--/ footer-->
    </div>
    
    <div id="footer" class="footer-1 2-footer">
       <!-- ==== footer ==== -->
       <footer class="footer2 bg-secondary text-light">
          <!-- container -->
          <div class="container">
             <div class="col-lg-12 text-center">
                <!-- logo -->
                <img src="public/img/logo_light.png"  class="logo-footer img-fluid" alt=""/>
             </div>
             <!-- row -->
             <div class="row mt-5">
                <div class="col-lg-4 text-center">
                   <h5 class="mt-2">Subscribe to our newsletter</h5>
                   <p>We send emails once a week</p>
                   <!-- Mailist Form -->				
                   <div id="mc_embed_signup">
                      <!-- your mailist address in the line bellow -->
                      <form action="//listname.list-manage.com/subscribe/post?u=04e646927a196552aaee78a7b&amp;id=0dae358e08" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                         <div id="mc_embed_signup_scroll">
                            <div class="mc-field-group">
                               <div class="input-group">
                                  <input class="form-control input-lg required email" type="email" value="" name="EMAIL" placeholder="Your email here" id="mce-EMAIL">
                                  <span class="input-group-btn">
                                  <button class="btn btn-tertiary" type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe">Subscribe</button>
                                  </span>
                               </div>
                               <!-- Subscription results -->
                               <div id="mce-responses" class="mailchimp">
                                  <div class="alert alert-danger response" id="mce-error-response"></div>
                                  <div class="alert alert-success response" id="mce-success-response"></div>
                               </div>
                            </div>
                            <!-- /mc-fiel-group -->									
                         </div>
                         <!-- /mc_embed_signup_scroll -->
                      </form>
                      <!-- /form ends -->
                   </div>
                   <!-- /mc_embed_signup -->		  
                </div>
                <!--/ col-lg -->
                <div class="col-lg-4 text-center res-margin">
                   <h5>Contact Us</h5>
                   <ul class="list-unstyled mt-3">
                      <li class="mb-1"><i class="fas fa-phone margin-icon "></i>+880 1888071000</li>
                      <li class="mb-1"><i class="fas fa-envelope margin-icon"></i>info@eporalekha.com</li>
                      <li><i class="fas fa-map-marker margin-icon"></i>Kha-54/3, Road No-4, Nikunja-2, Tanpara, Khilkhet, Dhaka-1229.3</li>
                   </ul>
                   <!--/ul -->
                </div>
                <!--/ col-lg -->
                <div class="col-lg-4 text-center">
                   <h5>Working Hours</h5>
                   <ul class="list-unstyled mt-3">
                      <li class="mb-1">Monday to Friday</li>
                      <li class="mb-1">Open from 9am - 6pm</li>
                      <li class="mb-1">Holidays / Weekends - Closed</li>
                   </ul>
                   <!--/ul -->
                </div>
                <!--/ col-lg -->
             </div>
             <!--/ row-->
             <hr/>
             <!-- col-md-12 -->
             <div class="col-md-12">
                <div class="credits row">
                   <div class="col-md-6">
                      <p class="float-left mt-3">Copyright 2019 / Designed by <a href="http://www.ingridkuhn.com">Ingrid Kuhn</a></p>
                   </div>
                   <!--/col-md-6 -->
                   <div class="col-md-6">
                      <!-- Start Social Links -->
                      <ul class="social-list float-right list-inline mb-0">
                         <li class="list-inline-item"><a title="Facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
                         <li class="list-inline-item"><a title="Twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                         <li class="list-inline-item"><a  title="Instagram" href="#"><i class="fab fa-instagram"></i></a></li>
                      </ul>
                      <!-- /End Social Links -->
                   </div>
                   <!--/col-md-6 -->
                </div>
                <!--/credits -->
             </div>
             <!--/col-md-12-->
          </div>
          <!--/ container -->
          <!-- Go To Top Link -->
          <div class="page-scroll hidden-sm hidden-xs">
             <a href="#top" class="back-to-top"><i class="fa fa-angle-up"></i></a>
          </div>
          <!--/page-scroll-->
       </footer>
       <!--/ footer-->
    </div>
    
    
    <div id="footer" class="footer-1 3-footer">
       <!-- ==== footer ==== -->
       <footer class="footer3 bg-secondary text-light">
          <div class="container">
             <!-- row -->
             <div class="row mt-3">
                <div class="col-lg-4 text-center">
                   <h5>Working Hours</h5>
                   <ul class="list-unstyled mt-3">
                      <li class="mb-1">Monday to Friday</li>
                      <li class="mb-1">Open from 9am - 6pm</li>
                      <li class="mb-1">Holidays/Weekends - Closed</li>
                   </ul>
                   <!--/ul -->
                </div>
                <!--/ col-lg -->
                <div class="col-lg-4 text-center">
                   <!-- logo -->
                   <img src="public/img/logo_light.png"  class="logo-footer img-fluid" alt=""/>
                   <p class="mt-4">Aliquam erat volutpat Aliquam erat volutpat In id fermentum augue, lorem ut pellentesque leo. Maecenas at arcu risus.</p>
                </div>
                <!--/ col-lg -->
                <div class="col-lg-4 text-center res-margin">
                   <h5>Contact Us</h5>
                   <ul class="list-unstyled mt-3">
                      <li class="mb-1">(123) 456-789</li>
                      <li class="mb-1"><a href="mailto:email@yoursite.com">email@yoursite.com</a></li>
                      <li>Street Name 123 - New York </li>
                   </ul>
                   <!--/ul -->
                </div>
                <!--/ col-lg -->
                <div class="col-md-12">
                   <!-- Start Social Links -->
                   <ul class="social-list big-icons text-center list-inline mt-2">
                      <li class="list-inline-item"><a title="Facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
                      <li class="list-inline-item"><a title="Twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                      <li class="list-inline-item"><a  title="Instagram" href="#"><i class="fab fa-instagram"></i></a></li>
                   </ul>
                   <!-- /End Social Links -->
                </div>
                <!--/col-md-12 -->
             </div>
             <!--/ row-->
             <hr/>
             <div class="row">
                <div class="credits col-6">
                   <p>Copyright 2022 / Designed by <a href="http://www.aminitltd.com">Amin IT</a></p>
                </div>
                <div class="credits col-6 text-right">
                   <p>Proudly Hosted by<a href="http://www.hostholder.com"> Hostholder</a></p>
                </div>
                <!--/credits -->
             </div>
             <!--/row-->
          </div>
          <!--/ container -->
          <!-- Go To Top Link -->
          <div class="page-scroll hidden-sm hidden-xs">
             <a href="#top" class="back-to-top"><i class="fa fa-angle-up"></i></a>
          </div>
          <!--/page-scroll-->
       </footer>
       <!--/ footer-->
    </div>