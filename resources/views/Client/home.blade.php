@extends('Client.master')
@section('title') Saimum Chamber @endsection
@section('meta_title') {{@$seo->meta_title}} @endsection
@section('meta_des') Saimum Chamber @endsection

@section('banner')

<section class="bannger-section pt-150 pb-60 position-relative">
   <div class="container">
       <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
           <div class="carousel-inner">

            @foreach (@$slider as $key=>$s)
       
               <div class="carousel-item @if(@$key==0) active @endif">
                   <div class="banner-content text-center pb-60">
                       <h1 class="mb-3">{{@$s->title}}</h1>
                       <p class="mb-3">
                        {{@$s->short}}
                       </p>
                       <div class="two-btn-align">
                           <a target="_blank" href="{{@$s->book_meeting_link_url}}" class="btn btn-primary  m-1 me-3">
                               {{@$s->book_meeting_link}}
                               <div class="icon">
                                   <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-narrow-right">
                                       <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                       <path d="M5 12l14 0" />
                                       <path d="M15 16l4 -4" />
                                       <path d="M15 8l4 4" />
                                   </svg>
                               </div>
                           </a>
                           <a href="{{@$s->contact_link_url}}" class="btn btn-secondary m-1 ">{{@$s->contact_link}}</a>
                       </div>
                   </div>
               </div>
         
            @endforeach

               {{-- <div class="carousel-item ">
                   <div class="banner-content text-center pb-120">
                       <h1 class="mb-4">We provide quality legal services for Companies & Individuals</h1>
                       <p class="mb-5">
                           With 11 years of industry experience, we understand the need for focused and customized
                           immigration
                           plans that facilitate smooth transitions
                       </p>
                       <div class="two-btn-align">
                           <a target="_blank" href="https://calendly.com/info-gqjl/100-consultation-with-uk-immigration-lawyer?month=2024-05" class="btn btn-primary  m-1 me-3">
                               Book a meeting
                               <div class="icon">
                                   <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-narrow-right">
                                       <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                       <path d="M5 12l14 0" />
                                       <path d="M15 16l4 -4" />
                                       <path d="M15 8l4 4" />
                                   </svg>
                               </div>
                           </a>
                           <a href="contact.php" class="btn btn-secondary m-1 ">Contact Us</a>
                       </div>
                   </div>
               </div> --}}


               
           </div>
       </div>
       <div class="text-center">
           <img src="{{asset('Client/assets/images/header-bg.png')}}" class="img-fluid" width="900" alt="">
       </div>
   </div>
   <!-- backgrond image -->
   <div class="bg_1 d-none d-lg-block">
       <img src="{{asset('Client/assets/images/bg1.png')}}" class="img-fluid" alt="Image">
   </div>
   <div class="bg_2 d-none d-lg-block">
       <img src="{{asset('Client/assets/images/bg2.png')}}" class="img-fluid" alt="Image">
   </div>
   <!-- backgrond image -->
</section>

@endsection

@section('service')

<section class="services-section pt-120 pb-60 position-relative">
   <!-- shape divider -->
   <div class="custom-shape-divider-top-1713715447">
       <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
           <path d="M600,112.77C268.63,112.77,0,65.52,0,7.23V120H1200V7.23C1200,65.52,931.37,112.77,600,112.77Z" class="shape-fill"></path>
       </svg>
   </div>
   <!-- shape divider -->
   <div class="container">
       <!-- section heading -->
       <div class="section-heading pb-4 text-center">
           <h2 class="text-white mb-2 pt-4 pt-sm-0">We’ve got your back on things like...</h2>
           <p class="text-white m-0">
               We've all worked with clients before, which means we promise:
               <br>
               <span>-</span>
           <ul>
               <li class="text-white">
                   • No lengthy risk notes summarizing the law
               </li>
               <li class="text-white">
                   • No splinters from sitting on the fence
               </li>
           </ul>
           </p>
       </div>
       <!-- section heading -->

       <div class="row d-flex justify-content-center">
           <div class="col-xl-10">
               <div class="row g-0">
                  <h2 class="text-white mt-4 mb-4 pt-4 pt-sm-0 text-center">Business  and Worker Visa</h2>
                   
                  @foreach (@$business_work_visa as $key=>$b)
               
                   <div class="col-lg-3">
                       <div class="card h-100 service_item item-1 p-3 position-relative overflow-hidden border-end border-bottom">
                           <a href="{{route('SingleVisa',@$b->slug)}}" class="stretched-link">
                               <h4>{{@$b->title}}</h4>
                               <span>
                                   View details
                                   <img src="{{asset('Client/assets/images/arrow.png')}}" class="img-fluid" alt="Icon">
                               </span>
                           </a>
                       </div>
                   </div>
                         
                   @endforeach
                
               </div>
           </div>
       </div>
        <div class="row d-flex justify-content-center">
           <div class="col-xl-10">
               <div class="row g-0">
                  <h2 class="text-white mt-4 mb-4 pt-4 pt-sm-0 text-center">Private Visa</h2>
                  {{-- private_visa --}}
                  @foreach (@$private_visa as $key=>$b)
                   <div class="col-lg-3">
                       <div class="card h-100 service_item item-1 p-3 position-relative overflow-hidden border-end border-bottom">
                           <a href="{{route('SingleVisa',@$b->slug)}}" class="stretched-link">
                            <h4>{{@$b->title}}</h4>
                               <span>
                                   View details
                                   <img src="{{asset('Client/assets/images/arrow.png')}}" class="img-fluid" alt="Icon">
                               </span>
                           </a>
                       </div>
                   </div>

                   @endforeach

               
                 
               </div>
           </div>
       </div>

       <div class="text-center mt-4">
           <div class="services-btn-wrapper mb-4 d-flex justify-content-center">
               <a target="_blank" href="https://calendly.com/info-gqjl/100-consultation-with-uk-immigration-lawyer?month=2024-05" class="btn btn-secondary bg-white">
                   Let’s discuss your problem
                   <div class="icon">
                       <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-narrow-right">
                           <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                           <path d="M5 12l14 0"></path>
                           <path d="M15 16l4 -4"></path>
                           <path d="M15 8l4 4"></path>
                       </svg>
                   </div>
               </a>
               <!--<a href="our-services.php" class="btn btn-primary">View service details</a>-->
           </div>
           <p class="text-white m-0">Share your concerns with us, we’re here to help!</p>
       </div>
</section>

@endsection


@section('why_choose')

<section class="why-choose-section pt-60 pb-60 position-relative">
   <!-- image -->
   <div class="bg_1 d-none d-lg-block">
       <img src="{{asset('Client/assets/images/bg4.png')}}" class="img-fluid" alt="Image">
   </div>
   <div class="bg_2 d-none d-lg-block">
       <img src="{{asset('Client/assets/images/mark.png')}}" class="img-fluid" alt="Image">
   </div>
   <!-- image -->
   <div class="container">
       <!-- section heading -->
       <div class="section-heading pb-4 text-center">
           <img src="{{asset('Client/assets/images/bg3.png')}}" width="120" class="img-fluid" alt="Image">
           <h2 class="mb-2 pt-4 pt-sm-0">Why choose <span style="color:#7026FF;">Saimum Chambers</span> over others?
           </h2>
           <p class="m-0">
               Get superior legal support with Saimum Chamber's personalized and flexible approach.Experience
               peace of mind in your legal journey, only with Saimum Chambers
           </p>
       </div>
       <!-- section heading -->

       <div class="row d-flex justify-content-center">
           <div class="col-xl-10">
               <div class="row gy-4">
                @foreach (@$why_choose as $key=>$w)

                
                   <div class="col-lg-4">
                       <div class="card h-100 about_box p-3 p-lg-4" style="background-color: {{@$w->color}}">
                           <span class="mb-4" style="background-color: {{@$w->circle_color}}">{{@$key+1}}</span>
                           <h3 class="mb-5">{{@$w->title}}</h3>
                           <p>
                            {!!@$w->short!!}

                           </p>
                       </div>
                   </div>

             
       
                @endforeach
                   {{-- <div class="col-lg-4">
                       <div class="card h-100 about_box p-3 p-lg-4" style="background-color: #21C6D1;">
                           <span class="mb-4" style="background-color: #FFC900;">2</span>
                           <h3 class="mb-5">Bespoke Immigration Strategies</h3>
                           <p>
                               Recognising that your journey to the UK is as individual as your fingerprint, we extend
                               custom-tailored advisory services. Our adept legal strategists forge bespoke pathways that resonate with your personal
                               objectives and familial landscape. Entrust us with your aspirations; our firm is dedicated to crafting successful immigration
                               outcomes that are as unique as your circumstances.
                           </p>
                       </div>
                   </div>
                   <div class="col-lg-4">
                       <div class="card h-100 about_box p-3 p-lg-4" style="background-color: #0C4944;">
                           <span class="mb-4" style="background-color: #FE5557;">3</span>
                           <h3 class="mb-5">Integral UK Immigration Assistance</h3>
                           <p>
                               Venture into the UK immigration landscape with a guardian that orchestrates every
                               element of your case with unparalleled proficiency. From initiating visa applications to permanent settlement and the pursuit
                               of British citizenship, we deliver an all-encompassing suite of services designed to streamline and demystify your
                               immigration experience.
                           </p>
                       </div>
                   </div> --}}

                  @foreach (@$why_choose_four as $key=>$w)
                      
                 
                   <div class="col-12 mt-5">
                       <div class="card h-100 about_box p-3 p-lg-4" style="background-color: {{@$w->color}}">
                           <div class="d-sm-flex align-items-center">
                               <div class="">
                                   <span class="mb-4" style="background-color: {{@$w->circle_color}}">4</span>
                               </div>
                               <div class="ms-0 ms-sm-4">
                                   <h3 class="mb-4">{{@$w->title}}</h3>
                                   <p>
                                       {!!@$w->short!!}
                                   </p>
                               </div>
                           </div>
                       </div>
                   </div>

                   @endforeach
               </div>
           </div>
       </div>

       <div class="two-btn-align text-center mt-4">
           <a target="_blank" href="https://calendly.com/info-gqjl/100-consultation-with-uk-immigration-lawyer?month=2024-05" class="btn btn-primary  m-1 me-3">
               Book a meeting
               <div class="icon">
                   <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-narrow-right">
                       <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                       <path d="M5 12l14 0"></path>
                       <path d="M15 16l4 -4"></path>
                       <path d="M15 8l4 4"></path>
                   </svg>
               </div>
           </a>
           <a href="{{route('Contact')}}" class="btn btn-secondary m-1 ">Contact Us</a>
       </div>
   </div>
</section>

@endsection

@section('team')
<section class="team-section pt-60 pb-60 position-relative overflow-hidden">
   <!-- image -->
   <div class="bg_1 d-none d-lg-block">
       <img src="{{asset('Client/assets/images/bg5.png')}}" class="img-fluid" width="180" alt="Image">
   </div>
   <!-- image -->
   <div class="container">
       <!-- section heading -->
       <div class="section-heading pb-4 text-center">
           <div class="icon mb-4">
               <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-layout-grid">
                   <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                   <path d="M4 4m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" />
                   <path d="M14 4m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" />
                   <path d="M4 14m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" />
                   <path d="M14 14m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" />
               </svg>
           </div>
           <h2 class="mb-2 pt-4 pt-sm-0">Meet with our <span style="color:#FF5459;">experts</span></h2>
           <p class="m-0">
               Discover your path to immigration success alongside our team of knowledgeable lawyers and
               consultants, ready to guide you every step of the way
           </p>
       </div>
       <!-- section heading -->

       <div class="row d-flex justify-content-center">
           <div class="col-xl-8">
               <div class="row g-5">
                   <!-- team member -->
                   @foreach (@$our_expert_list as $key=>$our)
       
                   <div class="col-md-6 mb-minus-20">
                       <div class="bg-1">
                           <img src="{{asset('Client/assets/images/bg-7.png')}}" class="img-fluid" alt="Image">
                       </div>
                       <div class="card team-member">
                           <div class="member-photo">
                               <a href="{{route('SingleExpertise',@$our->id)}}">
                                   <img src="{{(@$our->image)?url('upload/OurExperts/'.@$our->image):''}}" class="card-img-top img-fluid main-img" alt="MD Shafiqur Rahman">
                                   <img src="{{(@$our->hover_image)?url('upload/OurExperts/'.@$our->hover_image):''}}" class="card-img-top img-fluid hover-img" alt="MD Shafiqur Rahman">
                               </a>
                           </div>
                           <div class="card-body member-info">
                               <div class="mb-4 member-info-text">
                                   <h5>
                                       <a href="{{route('SingleExpertise',@$our->id)}}">{{@$our->name}}</a>
                                   </h5>
                                   <p>{{@$our->designation}}</p>
                                   <p>{{@$our->email}}</p>
                               </div>
                               <div class="card-footer">
                                   <a class="learn-more-btn" href="{{route('SingleExpertise',@$our->id)}}">
                                       Learn more
                                       <span class="ms-3">
                                           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-narrow-right">
                                               <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                               <path d="M5 12l14 0" />
                                               <path d="M15 16l4 -4" />
                                               <path d="M15 8l4 4" />
                                           </svg>
                                       </span>
                                   </a>
                                   <a class="social-media-btn" href="{{@$our->linkedin}}"><i class="fab fa-linkedin-in"></i></a>
                               </div>
                           </div>
                       </div>
                   </div>

                   @endforeach
                   {{-- <!-- team member -->
                   <div class="col-md-6 mb-minus-20">
                       <div class="card team-member">
                           <div class="member-photo">
                               <a href="salahuddin-mahmud.php">
                                   <img src="{{asset('Client/assets/images/team/2.png')}}" class="card-img-top img-fluid main-img" alt="MD Salahuddin Mahmud">
                                   <img src="{{asset('Client/assets/images/team/2-hover.png')}}" class="card-img-top img-fluid hover-img" alt="MD Salahuddin Mahmud">
                               </a>
                           </div>
                           <div class="card-body member-info">
                               <div class="mb-4 member-info-text">
                                   <h5>
                                       <a href="salahuddin-mahmud.php">
                                           Md Salahuddin Mahmud
                                       </a>
                                   </h5>
                                   <p>Legal Executive</p>
                                   <p>salahuddin.mahmud@saimumchambers.com</p>
                               </div>
                               <div class="card-footer">
                                   <a class="learn-more-btn" href="salahuddin-mahmud.php">
                                       Learn more
                                       <span class="ms-3">
                                           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-narrow-right">
                                               <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                               <path d="M5 12l14 0" />
                                               <path d="M15 16l4 -4" />
                                               <path d="M15 8l4 4" />
                                           </svg>
                                       </span>
                                   </a>
                                   <a class="social-media-btn" href="#"><i class="fab fa-linkedin-in"></i></a>
                               </div>
                           </div>
                       </div>
                   </div>
                   <!-- team member -->
                   <div class="col-md-6 mb-minus-20">
                       <div class="card team-member">
                           <div class="member-photo">
                               <a href="khaleda-zaman.php">
                                   <img src="{{asset('Client/assets/images/team/3.png')}}" class="card-img-top img-fluid main-img" alt="Khaleda Zaman">
                                   <img src="{{asset('Client/assets/images/team/3-hover.png')}}" class="card-img-top img-fluid hover-img" alt="Khaleda Zaman">
                               </a>
                           </div>
                           <div class="card-body member-info">
                               <div class="mb-4 member-info-text">
                                   <h5>
                                       <a href="khaleda-zaman.php">
                                           Khaleda Zaman
                                       </a>
                                   </h5>
                                   <p>Legal Executive & Office Manager, UK</p>
                                   <p>khaleda.zaman@saimumchambers.com</p>
                               </div>
                               <div class="card-footer">
                                   <a class="learn-more-btn" href="khaleda-zaman.php">
                                       Learn more
                                       <span class="ms-3">
                                           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-narrow-right">
                                               <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                               <path d="M5 12l14 0" />
                                               <path d="M15 16l4 -4" />
                                               <path d="M15 8l4 4" />
                                           </svg>
                                       </span>
                                   </a>
                                   <a class="social-media-btn" href="#"><i class="fab fa-linkedin-in"></i></a>
                               </div>
                           </div>
                       </div>
                   </div>
                   <!-- team member -->
                   <div class="col-md-6 mb-minus-20">
                       <div class="bg-2">
                           <img src="{{asset('Client/assets/images/bg-6.png')}}" class="img-fluid" alt="Image">
                       </div>
                       <div class="card team-member">
                           <div class="member-photo">
                               <a href="nujcharee-sukrat.php">
                                   <img src="{{asset('Client/assets/images/team/8.png')}}" class="card-img-top img-fluid main-img" alt="Propa Tasnim">
                                   <img src="{{asset('Client/assets/images/team/8-hover.png')}}" class="card-img-top img-fluid hover-img" alt="Propa Tasnim">
                               </a>
                           </div>
                           <div class="card-body member-info">
                               <div class="mb-4 member-info-text">
                                   <h5>
                                       <a href="nujcharee-sukrat.php">
                                           Nujcharee Sukrat
                                       </a>
                                   </h5>
                                   <p>Dedicated Thailand Exploring Executive</p>
                                   <p>nujcharee@saimumchambers.com</p>
                               </div>
                               <div class="card-footer">
                                   <a class="learn-more-btn" href="nujcharee-sukrat.php">
                                       Learn more
                                       <span class="ms-3">
                                           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-narrow-right">
                                               <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                               <path d="M5 12l14 0" />
                                               <path d="M15 16l4 -4" />
                                               <path d="M15 8l4 4" />
                                           </svg>
                                       </span>
                                   </a>
                                   <a class="social-media-btn" href="#"><i class="fab fa-linkedin-in"></i></a>
                               </div>
                           </div>
                       </div>
                   </div> --}}
               </div>
           </div>
       </div>
       <div class="two-btn-align text-center pt-8">
           <a href="{{route('AllExpertList')}}" class="btn btn-secondary m-1">View Full Team</a>
           <a target="_blank" href="https://calendly.com/info-gqjl/100-consultation-with-uk-immigration-lawyer?month=2024-05" class="btn btn-primary m-1 me-3 text-white">
               Schedule a call
               <div class="icon">
                   <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-narrow-right">
                       <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                       <path d="M5 12l14 0"></path>
                       <path d="M15 16l4 -4"></path>
                       <path d="M15 8l4 4"></path>
                   </svg>
               </div>
           </a>
       </div>
   </div>
</section>
@endsection


@section('brand')

<section class="brand-section position-relative overflow-hidden">
   <!-- image -->
   <div class="bg text-center mb-5">
       <img src="{{asset('Client/assets/images/bg-8.png')}}" class="img-fluid" alt="image">
   </div>
   <!-- image -->
   <div class="container">
       <!-- section heading -->
       <div class="section-heading pb-5 pt-80 text-center">
           <img src="{{asset('Client/assets/images/trust.png')}}" class="mb-4 img-fluid" width="80" alt="Image">
           <h2 class="mb-4 pt-4 pt-sm-0">Trusted by the best</h2>
           <p class="m-0 text-white">
               A Testament to Our expertise and reliability, backed by the best in the industry, reinforcing our
               commitment to excellence
           </p>
       </div>
       <!-- section heading -->
   </div>
   <div class="brand-logo-wrap bg-white opacity-75">
       <div class="container">
           <div class="row d-flex justify-content-center">
               <div class="col-xl-11">
                   <div class="brand-logo-grid">
                    @foreach (@$client as $key=>$c)
                        
                  
                       <div class="brand-logo">
                               <img src="{{(@$c->image)?url('upload/Client/'.@$c->image):''}}" class="img-fluid" alt="Image">
                       </div>

                       @endforeach
                       {{-- <div class="brand-logo">
                               <img src="{{asset('Client/assets/images/brand/2.png')}}" class="img-fluid" alt="Image">
                       </div>
                       <div class="brand-logo">
                               <img src="{{asset('Client/assets/images/brand/3.png')}}" class="img-fluid" alt="Image">
                       </div> --}}
                       <!--
                       <div class="col">
                           <div class="brand-logo">
                               <img src="{{asset('Client/assets/images/brand/4.png')}}" class="img-fluid" alt="Image">
                           </div>
                       </div>
                       <div class="col">
                           <div class="brand-logo">
                               <img src="{{asset('Client/assets/images/brand/5.png')}}" class="img-fluid" alt="Image">
                           </div>
                       </div>
                       <div class="col">
                           <div class="brand-logo">
                               <img src="{{asset('Client/assets/images/brand/6.png')}}" class="img-fluid" alt="Image">
                           </div>
                       </div>-->
                   </div>
               </div>
           </div>
       </div>
   </div>
</section>
@endsection

@section('application')
<section class="brand-section position-relative overflow-hidden application-section" style="background-color:#0C4944">
   <!-- image -->
   <div class="bg text-center mb-5">
       <img src="{{asset('Client/assets/images/bg14.png')}}" class="img-fluid" alt="image">
   </div>
   <!-- image -->
   <div class="container">
       <!-- section heading -->
       <div class="section-heading pb-5 pt-80 text-center">
           <img src="{{asset('Client/assets/images/trust.png')}}" class="mb-4 img-fluid" width="80" alt="Image">
           <h2 class="mb-4 pt-4 pt-sm-0">Application Packages</h2>
       </div>
       <!-- section heading -->
       <div class="services-four pb-60 position-relative">
           <div class="row d-flex justify-content-center">
               <div class="col-xl-10">
                   <div class="row g-0">
                     @foreach (@$application_package as $key=>$application)
                         
                     
                       <div class="col-lg-3">
                           <div class="card h-100 service_item item-1 p-3 position-relative overflow-hidden border-end border-bottom">
                               <a href="{{route('SingleVisa',@$application->slug)}}" class="stretched-link">
                                   <h4>{{@$application->title}}</h4>
                                   <span>
                                       View details
                                       <img src="{{asset('Client/assets/images/arrow.png')}}" class="img-fluid" alt="Icon">
                                   </span>
                               </a>
                           </div>
                       </div>

                       @endforeach
                       
                   </div>
               </div>
           </div>
       </div>
   </div>
</section>
@endsection


@section('blog')
<section class="blog-section pt-60 pb-60 position-relative">
   <div class="container">
       <!-- section heading -->
       <div class="section-heading pb-4 text-center">
           <img src="{{asset('Client/assets/images/bg-9.png')}}" width="120" class="img-fluid" alt="Image">
           <h2 class="mb-2 pt-4 pt-sm-0 text-white">Read our latest blogs</h2>
           <p class="m-0 text-white">
               Stay informed, dive into our latest articles
           </p>
       </div>
       <!-- section heading -->

       <div class="row d-flex justify-content-center">
           <div class="col-xl-10">
               <div class="row gy-3 gy-lg-0">


                @foreach (@$Blog as $key=>$b)
          
                   <div class="col-md-6 col-xl-4">
                       <div class="card h-100 blog-wrap">
                           <div class="blog-photo">
                               <a href="{{route('BlogDetails',@$b->slug)}}">
                                   <img src="{{(@$b->image)?url('upload/BlogManage/'.@$b->image):''}}" class="card-img-top img-fluid" alt="How to find a immigration Lawyer online?">
                               </a>
                           </div>
                           <div class="card-body p-4 blog-info">
                               <a href="{{route('BlogDetails',@$b->slug)}}">
                                   <h4>{{@$b->title}}</h4>
                               </a>
                               <p> {{date('F d, Y',strtotime($b->blog_date))}}</p>
                               <p>
                                   {{@$b->short}}
                               </p>
                           </div>
                           <div class="card-footer">
                               <div class="d-flex align-items-center justify-content-between">
                                   <div class="read-more">
                                       <a href="{{route('BlogDetails',@$b->slug)}}" class="btn btn-primary">
                                           Read More
                                           <div class="icon">
                                               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-narrow-right">
                                                   <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                   <path d="M5 12l14 0"></path>
                                                   <path d="M15 16l4 -4"></path>
                                                   <path d="M15 8l4 4"></path>
                                               </svg>
                                           </div>
                                       </a>
                                   </div>

                               </div>
                           </div>
                       </div>
                   </div>
                           
                @endforeach
               </div>
           </div>
       </div>

       <div class="two-btn-align text-center pt-60">
           <a href="{{route('Blog')}}" class="btn btn-secondary m-1 bg-white">
               View all blogs
               <div class="icon">
                   <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-narrow-right">
                       <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                       <path d="M5 12l14 0"></path>
                       <path d="M15 16l4 -4"></path>
                       <path d="M15 8l4 4"></path>
                   </svg>
               </div>
           </a>
       </div>
   </div>
</section>

@endsection

@section('testimonial')

<section class="testimonial-section pt-60 pb-60 position-relative overflow-hidden">
   <!-- image -->
   <div class="bg_1 d-none d-md-block">
       <img src="{{asset('Client/assets/images/bg10.png')}}" class="img-fluid" width="120" alt="Image">
   </div>
   <div class="bg_2 d-none d-md-block">
       <img src="{{asset('Client/assets/images/bg11.png')}}" class="img-fluid" width="120" alt="Image">
   </div>
   <!-- image -->
   <div class="container">
       <!-- section heading -->
       <div class="section-heading pb-4 text-center">
           <h2 class="mb-2 pt-4 pt-sm-0">Listen from <span style="color:#FF5459;">our clients</span> and then make
               your decision</h2>
           <p class="m-0">
               Your Guide to Making an Informed Decision. Get efficient services just like any other clients of
               Saimum Chambers
           </p>
       </div>
       <!-- section heading -->

       <div class="row d-flex justify-content-center">
           <div class="col-xl-10">
               <div class="row g-4">
                   <!-- client review -->
                   @foreach (@$testimonial as $key=>$t)
                       
                 
                   <div class="col-lg-6">
                       <div class="card h-100 client-reviews">
                           <div class="card-body p-4 review-info mb-3">
                               <div class="client-photo mb-4">
                                   <img src="{{(@$t->image)?url('upload/Testimonial/'.@$t->image):''}}" width="70" class="img-fluid" alt="Levin Shikdar">
                               </div>
                               <p>
                                   {!!@$t->description!!}
                               </p>
                           </div>
                           <div class="card-footer">
                               <h4> {!!@$t->name!!}</h4>
                                <h4>{!!@$t->short!!}</h4>
                               <!-- <h6>International Student</h6>
                               <p>
                                   Received Student Immigration & Application service
                               </p> -->
                           </div>
                       </div>
                   </div>

                   @endforeach
                   <!-- client review -->
                   {{-- <div class="col-lg-6">
                       <div class="card h-100 client-reviews">
                           <div class="card-body p-4 review-info mb-3">
                               <div class="client-photo mb-4">
                                   <img src="{{asset('Client/assets/images/clients/2.png')}}" width="70" class="img-fluid" alt="Erfi Zendi">
                               </div>
                               <p>
                                   “I am deeply thankful to Saimum Chambers for their outstanding assistance in navigating the complexities of
                                   the skilled worker visa application process. Their team exhibited a remarkable level of professionalism and expertise, guiding me through each step with precision
                                   and clarity. From compiling the necessary documents to preparing for interviews, they provided invaluable support that instilled confidence throughout the entire
                                   process. Thanks to their dedication and attention to detail, I successfully obtained my skilled worker visa and can now pursue exciting opportunities in the UK. I
                                   highly recommend them to anyone seeking reliable immigration services.
                                   ”
                               </p>
                           </div>
                           <div class="card-footer">
                               <h4>Skilled Worker Visa</h4>
                               
                                <h4>Aftabunnesa, April 2024.</h4>
                               <!--<p>
                                   Received Business Visa Application and Consultation
                               </p> -->
                           </div>
                       </div>
                   </div> --}}
               </div>
           </div>
       </div>

       <div class="two-btn-align text-center pt-60">
           <a href="{{route('TestimonialList')}}" class="btn btn-secondary bg-white">
               View all testimonial
               <div class="icon">
                   <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-narrow-right">
                       <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                       <path d="M5 12l14 0"></path>
                       <path d="M15 16l4 -4"></path>
                       <path d="M15 8l4 4"></path>
                   </svg>
               </div>
           </a>
       </div>
   </div>
</section>

@endsection

@section('hero_section')
<div class="hero-section pt-100 pb-100 position-relative">
   <!-- image -->
   <div class="bg_1">
       <img src="{{asset('Client/assets/images/bg12.png')}}" class="img-fluid" width="120" alt="Image">
   </div>
   <div class="bg_2">
       <img src="{{asset('Client/assets/images/bg13.png')}}" class="img-fluid" width="120" alt="Image">
   </div>
   <!-- image -->
   <div class="container">
       <div class="row align-items-end">
           <div class="col-lg-6">
               <div class="faq-area home-faq">
                   <h2>Frequently Asked Questions</h2>
                   <div class="faq-item">
                       <div class="accordion">

                        @foreach (@$faq as $key=>$f)
                            
                       
                           <div class="accordion-item">
                               <div class="title">
                                   <h6>{{@$f->question}}</h6>
                               </div>
                               <div class="accordion-info">
                                   <p>

                                    {!!@$f->ans!!}

                                   </p>
                               </div>
                           </div>

                           @endforeach
                       </div>
                   </div>
               </div>
           </div>
           <div class="col-lg-6 position-relative">
               <div class="text-center">
                   <img src="{{asset('Client/assets/images/hand.png')}}" width="250" class="img-fluid" alt="Image">
               </div>
               <div class="hero_wrapper text-center">
                   <h3 class="mb-2">{{@$faq_text->title}}</h3>
                   <p class="mb-4">{{@$faq_text->short}}
                   </p>
                   <div class="two-btn-align">
                       <a href="{{route('Contact')}}" class="btn btn-secondary m-1">Contact us</a>
                       <a target="_blank" href="https://calendly.com/info-gqjl/100-consultation-with-uk-immigration-lawyer?month=2024-05" class="btn btn-secondary bg-dark text-white m-1">
                           Schedule a call
                           <div class="icon">
                               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-narrow-right">
                                   <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                   <path d="M5 12l14 0"></path>
                                   <path d="M15 16l4 -4"></path>
                                   <path d="M15 8l4 4"></path>
                               </svg>
                           </div>
                       </a>
                   </div>
               </div>
           </div>
       </div>
   </div>
</div>
@endsection