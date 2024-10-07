<div class="footer-section pt-8 pb-8">
   <div class="container">
       <div class="row gy-5">
           <div class="col-lg-3">
               <div class="footer-widget">
                   <div class="footer-logo mb-3">
                       <img src="{{(@$logo->footer_logo)?url('upload/Logo/'.@$logo->footer_logo):''}}" class="img-fluid" alt="Logo">
                   </div>
                   <div class="footer-heading">
                       <h4>Accreditation</h4>
                   </div>
                   <div class="footer-content">
                       <p>
                          {!!@$logo->description!!}
                           <br>
                           <strong style="color: white">Registration No. -
                               {{@$logo->registration_number}}</strong>
                       </p>

                   </div>
               </div>
           </div>
           <div class="col-lg-9">
               <div class="row">
                   <div class="col-lg-5">
                       <div class="footer-widget">
                           <div class="footer-heading">
                               <h4>Services</h4>
                           </div>
                           <div class="footer-links">
                               <div class="row g-3">
                                   <div class="col-md-6">
                                       <ul>
                                           <li><a href="skilled-worker-visa-application.php">Skilled Worker </a></li>
                                           <li><a href="visitor-visa-application.php">Visitor </a></li>
                                           <li><a href="family-visa.php">Family </a></li>
                                           <li><a href="dependent-child-visa.php">Dependent Child </a></li>
                                          
                                       </ul>
                                   </div>
                                   <div class="col-md-6">
                                       <ul>
                                           <li><a href="temporary-worker-visa-application.php">Temporary Worker </a></li>
                                           <li><a href="studying-in-the-uk.php">Studying In The UK</a></li>
                                           <li><a href="unmarried-partner-visa.php">Unmarried Partner </a></li>
                                           <li><a href="uk-ancestry-visa.php">UK Ancestry </a></li>
                                           
                                       </ul>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="col-lg-7">
                       <div class="row">
                           <div class="col-lg-4 col-md-6">
                               <div class="footer-widget mt-lg-30">
                                   <div class="footer-heading">
                                       <h4>Important links</h4>
                                   </div>
                                   <div class="footer-links">
                                       <ul>
                                           <li><a href="{{route('Index')}}">Home</a></li>
                                           <li><a href="{{route('TestimonialList')}}">Testimonials</a></li>
                                           <li><a href="{{route('Blog')}}">Blogs</a></li>

                                       </ul>
                                   </div>
                               </div>
                           </div>
                           <div class="col-lg-4 col-md-6">
                               <div class="footer-widget mt-lg-30">
                                   <div class="footer-heading">
                                       <h4>Important links</h4>
                                   </div>
                                   <div class="footer-links">
                                       <ul>
                                           <!--<li><a href="#">Faq</a></li>-->
                                           <li><a href="{{route('About')}}">About</a></li>
                                           <li><a href="{{route('AllExpertList')}}">Team</a></li>
                                           <!--<li><a href="#">Blogs</a></li>-->
                                           <!--<li><a href="#">Career</a></li>-->
                                       </ul>
                                   </div>
                               </div>
                           </div>
                           <div class="col-lg-4 col-md-6">
                               <div class="footer-widget mt-lg-30">
                                   <div class="footer-heading">
                                       <h4>Get in touch</h4>
                                   </div>
                                   <div class="footer-links get-in-touch">
                                       <ul>

                                           <li>
                                               <span>Telephone</span>
                                               <a href="tel:{{@$contact_us->mobile_one}}">{{@$contact_us->mobile_one}}</a>
                                               <a href="tel:{{@$contact_us->mobile_two}}">{{@$contact_us->mobile_two}}</a>
                                           </li>
                                           <li>
                                               <span>Mobile</span>
                                               <a href="tel:{{@$contact_us->tel}}">{{@$contact_us->tel}}</a></li>
                                           <li>
                                               <span>Email</span>
                                               <a href="mailto:{{@$contact_us->email_one}}">{{@$contact_us->email_one}}</a></li>
                                           <li>
                                               <span>Location</span>
                                               <a href="#">{!!@$contact_us->office_address!!}</a>
                                           </li>
                                       </ul>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>

               </div>
           </div>
       </div>
   </div>
   <div class="footer-bottom">
       <div class="container">
           <div class="row">
               <div class="col-lg-6">
                   <div class="footer-content footer-copyright">
                       <p><span>© Saimum Chambers</span> {{Date('Y')}} — Copyright </p>
                       <p class="ms-3">Designed & Developed by<a href="http://wezapps.com.bd/" target="_blank">Wezapps Limited</a></p>
                   </div>
               </div>
               <div class="col-lg-6">
                       <p class="policy">
                           <a href="{{route('PrivacyPolicy')}}">Privacy Policy</a> |
                           <a href="{{route('CookiePolicy')}}">Cookie Policy</a> |
                           <a href="{{route('TermsOfService')}}">Terms of service</a> |
                           <a href="{{route('Disclaimer')}}">Disclaimer</a>
                       </p>
               </div>
           </div>
       </div>
   </div>
</div>
