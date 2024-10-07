@extends('Client.master')
@section('title') Our Teams @endsection
@section('meta_title') Our Teams @endsection
@section('meta_des') Our Teams @endsection
@section('content')

   <!-- Page Title Area Start -->
   <div class="page-title-area curve bg-purple">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2>Our Teams</h2>
                    <p></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Title Area End -->


  <!-- Team section start -->
  <section class="team-section pt-60 pb-60 position-relative overflow-hidden" id="service">
    <!-- image -->
    <div class="bg_1 d-none d-lg-block">
        <img src="assets/images/bg5.png" class="img-fluid" width="180" alt="Image">
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
            <h2 class="mb-2 pt-4 pt-sm-0 text-black">Meet with our <span style="color:#FF5459;">experts</span></h2>
            <p class="m-0 text-black">
                Discover your path to immigration success alongside our team of knowledgeable lawyers and
                consultants, ready to guide you every step of the way
            </p>
        </div>
        <!-- section heading -->

        <div class="row d-flex justify-content-center">
            <div class="col-xl-8">
                <div class="row g-5">
                    <!-- team member -->
                    @foreach (@$list as $key=>$our)
       
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
                   


                </div>
            </div>
        </div>
        <!-- <div class="text-center pt-80">
            <a href="#" class="mb-4 btn btn-secondary bg-white">
                See All
                <div class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-narrow-right">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M5 12l14 0"></path>
                        <path d="M15 16l4 -4"></path>
                        <path d="M15 8l4 4"></path>
                    </svg>
                </div>
            </a>
        </div> -->
    </div>
</section>
<!-- Team section end -->

<!-- hero section start -->
<div class="hero-section pt-0 pb-60 position-relative">
    <!-- image -->
    <div class="bg_1">
        <img src="{{asset('Client/assets/images/bg12.png')}}" class="img-fluid" width="120" alt="Image">
    </div>
    <div class="bg_2">
        <img src="{{asset('Client/assets/images/bg13.png')}}" class="img-fluid" width="120" alt="Image">
    </div>
    <!-- image -->
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-9 position-relative">
                <div class="text-center">
                    <img src="{{asset('Client/assets/images/hand.png')}}" width="250" class="img-fluid" alt="Image">
                </div>
                <div class="hero_wrapper text-center">
                    <h3 class="mb-2">Share your case with us, we have got your back</h3>
                    <p class="mb-4">Let us help you navigate your legal issues with efficient service & consultation
                    </p>
                    <div class="two-btn-align">
                        <a href="contact.php" class="btn btn-secondary m-1">Contact us</a>
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
<!-- hero section end -->

@endsection