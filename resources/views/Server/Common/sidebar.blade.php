<nav class="sidebar-nav">
    <ul id="sidebarnav">
       <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{route('home')}}"
          aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span
          class="hide-menu">Dashboard</span></a></li>
       <li class="list-divider"></li>
       <li class="sidebar-item"> 
          <a class="sidebar-link sidebar-link" href="{{route('LogoIndex')}}"
             aria-expanded="false"><i class="icon-grid"></i><span
             class="hide-menu">Logo Manage
          </span></a>
       </li>
       <li class="list-divider"></li>
       <li class="sidebar-item"> 
         <a class="sidebar-link sidebar-link" href="{{route('SliderIndex')}}"
            aria-expanded="false"><i class="icon-grid"></i><span
            class="hide-menu">Slider Manage
         </span></a>
      </li>

       <li class="list-divider"></li>
       <li class="sidebar-item"> 
         <a class="sidebar-link sidebar-link" href="{{route('VisaIndex')}}"
            aria-expanded="false"><i class="icon-grid"></i><span
            class="hide-menu">Visa Manage
         </span></a>
      </li>

       <li class="list-divider"></li>
       <li class="sidebar-item"> 
         <a class="sidebar-link sidebar-link" href="{{route('SocialIconIndex')}}"
            aria-expanded="false"><i class="icon-grid"></i><span
            class="hide-menu">Social Icon Manage
         </span></a>
      </li>

       <li class="list-divider"></li>
       <li class="sidebar-item"> 
         <a class="sidebar-link sidebar-link" href="{{route('BlogIndex')}}"
            aria-expanded="false"><i class="icon-grid"></i><span
            class="hide-menu">Blog Manage
         </span></a>
      </li>

       <li class="list-divider"></li>
       <li class="sidebar-item"> 
         <a class="sidebar-link sidebar-link" href="{{route('TestimonialIndex')}}"
            aria-expanded="false"><i class="icon-grid"></i><span
            class="hide-menu">Testimonial Manage
         </span></a>
      </li>


       {{-- <li class="list-divider"></li>
       <li class="sidebar-item"> 
          <a class="sidebar-link sidebar-link" href="{{route('VideoIndex')}}"
             aria-expanded="false"><i class="icon-camera"></i><span
             class="hide-menu">Video
          </span></a>
       </li> --}}
       {{-- <li class="list-divider"></li>
       <li class="sidebar-item"> 
          <a class="sidebar-link sidebar-link" href="{{route('GalleryIndex')}}"
             aria-expanded="false"><i class="icon-camera"></i><span
             class="hide-menu">Gallery
          </span></a>
       </li> --}}
       <li class="list-divider"></li>
       @if(Auth::user()->role==2)
       <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{route('UserRoleList')}}"
          aria-expanded="false"><i class="fa fa-users"></i><span
          class="hide-menu">User Role
          </span></a>
       </li>
       @endif

       <li class="list-divider"></li>
       <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
         aria-expanded="false"><i data-feather="grid" class="feather-icon"></i><span
             class="hide-menu">Catalog</span></a>
     <ul aria-expanded="false" class="collapse  first-level base-level-line">

      <li class="sidebar-item"><a href="{{route('AboutUsIndex')}}" class="sidebar-link"><span
         class="hide-menu">
         About Us
         </span></a>
      </li>
        
         <li class="sidebar-item"><a href="{{route('VisaKeyContactIndex')}}" class="sidebar-link"><span
                     class="hide-menu">
                     Visa Key Contact
                 </span></a>
         </li>

         <li class="sidebar-item"><a href="{{route('ContactUsIndex')}}" class="sidebar-link"><span
                     class="hide-menu">
                     Contact Information
                 </span></a>
         </li>

         <li class="sidebar-item"><a href="{{route('FaqIndex')}}" class="sidebar-link"><span
                     class="hide-menu">
                     FAQ
                 </span></a>
         </li>

         <li class="sidebar-item"><a href="{{route('OurExpertIndex')}}" class="sidebar-link"><span
                     class="hide-menu">
                     Our Experts
                 </span></a>
         </li>

         <li class="sidebar-item"><a href="{{route('WhyChooseIndex')}}" class="sidebar-link"><span
            class="hide-menu">
            Why choose
         </span></a>
       </li>

         <li class="sidebar-item"><a href="{{route('ClientIndex')}}" class="sidebar-link"><span
            class="hide-menu">
            Trusted By
         </span></a>
       </li>

         <li class="sidebar-item"><a href="{{route('EmailConfig')}}" class="sidebar-link"><span
            class="hide-menu">
            Email Config
         </span></a>
       </li>

         {{-- <li class="sidebar-item"><a href="{{route('CountdownIndex')}}" class="sidebar-link"><span
                     class="hide-menu">
                     Countdown
                 </span></a>
         </li>

         <li class="sidebar-item"><a href="{{route('MissionCompleteIndex')}}" class="sidebar-link"><span
           class="hide-menu">
           Mission Complete
       </span></a>
         </li>

         <li class="sidebar-item"><a href="{{route('TestimonialIndex')}}" class="sidebar-link"><span
           class="hide-menu">
           Testimonial
       </span></a>
         </li> --}}

         {{-- <li class="sidebar-item"><a href="{{route('FaqIndex')}}" class="sidebar-link"><span
           class="hide-menu">
           FAQ
       </span></a>
         </li>

         <li class="sidebar-item"><a href="{{route('FeatureIndex')}}" class="sidebar-link"><span
           class="hide-menu">
           Feature
       </span></a>
         </li>

         <li class="sidebar-item"><a href="{{route('FeatureTwoIndex')}}" class="sidebar-link"><span
           class="hide-menu">
           Feature Two
       </span></a>
         </li>

         <li class="sidebar-item"><a href="{{route('ContactUsIndex')}}" class="sidebar-link"><span
           class="hide-menu">
           Contact Us
       </span></a>
         </li>


         <li class="sidebar-item"><a href="{{route('ClientIndex')}}" class="sidebar-link"><span
           class="hide-menu">
           Client Manage
       </span></a>
         </li>

         <li class="sidebar-item"><a href="{{route('SeoToolIndex')}}" class="sidebar-link"><span
           class="hide-menu">
           Website Setting
       </span></a>
         </li> --}}


        
     </ul>
 </li>

       {{-- <li class="list-divider"></li>
       <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{route('JoinUsMessageList')}}"
          aria-expanded="false"><i class="icon-user-follow"></i><span
          class="hide-menu">Join Us
          </span></a>
       </li> --}}
       {{-- <li class="list-divider"></li>
       <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{route('CareerMessageList')}}"
          aria-expanded="false"><i class="icon-user-follow"></i><span
          class="hide-menu">Career
          </span></a>
       </li> --}}
       <li class="list-divider"></li>
       <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{route('ContactMessageList')}}"
          aria-expanded="false"><i class="fa fa-address-book"></i><span
          class="hide-menu">Contact
          </span></a>
       </li>
       <li class="list-divider"></li>
       <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{route('LogManageList')}}"
          aria-expanded="false"><i class="fa fa-history"></i><span
          class="hide-menu">Log
          </span></a>
       </li>
       <li class="list-divider"></li>
       <li class="sidebar-item">
          <a class="sidebar-link sidebar-link" href="{{ route('logout') }}"
             aria-expanded="false" onclick="event.preventDefault();
             document.getElementById('logout-form').submit();">
             <i class="icon-logout"></i><span
                class="hide-menu">Logout</span>
             <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
             </form>
          </a>
       </li>
       </li>
    </ul>
 </nav>