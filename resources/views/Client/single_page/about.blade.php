@extends('Client.master')
@section('title') About  @endsection
@section('meta_title') About  @endsection
@section('meta_des') About  @endsection
@section('content')

    <!-- Page Title Area Start -->
    <div class="profile-hero-inner bg-purple about-title-area">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-md-7">
                    <div class="profile-hero-inner-content">
                        <h2>
                            {{@$about->title}}
                            {{-- More than meets
                            <br>
                            the eye --}}
                        </h2>
                        <p>{{@$about->short}}</p>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="about-title_image">
                        <img src="{{asset('Client/assets/images/about-bg.png')}}" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Title Area End -->

   <!-- Our Story start -->
   <section class="why-choose-section our-story-section pb-60 position-relative">
    <div class="bg-curve-wrapper">
        <span class="gradient-curve"></span>
    </div>
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
        @php
        // Extract the first three characters
        $first_three_chars = mb_substr($about->story, 0, 3);
        
        // The remaining text
        $remaining_text = mb_substr($about->story, 3);
    @endphp

        <div class="section-heading pb-4 text-center">
            <img src="{{asset('Client/assets/images/bg3.png')}}" width="120" class="img-fluid" alt="Image">
            <h2 class="mb-2 pt-4 pt-sm-0"> {{@$first_three_chars}} <span style="color:#7026FF;">{{@$remaining_text}}</span>
            </h2>

        </div>
        <!-- section heading -->

        <div class="row d-flex justify-content-center">
            <div class="col-md-12">
                <div class="our-story-single">
                    <p>
                      {!!@$about->story_text!!}
                    </p>
                </div>
            </div>

        </div>
        <div class="row d-flex justify-content-center mt-5">
            <div class="col-md-12">
                <div class="our-story-single mb-5">
                    <h3>{{@$about->mission}}</h3>
                    <p>

                        {!!@$about->mission_short!!}

                    </p>
                </div>
                <div class="our-story-single">
                    <h3>{{@$about->value}}</h3>
                    {!!@$about->value_short!!}

                </div>
            </div>
        </div>

    </div>
</section>
<!-- Our Story end -->


    <!-- Team start -->
    <section class="team-section about-purpose-section pt-60 pb-60 position-relative overflow-hidden">
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
            </div>
            <!-- section heading -->

            <div class="row">
                <div class="col-lg-6">
                    <div class="about-purpose-image">
                        <img src="{{(@$about->image)?url('upload/AboutUs/'.@$about->image):''}}" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-purpose-text section-heading">
                        <h2>{{@$about->smt_one}} <span>{{@$about->smt_one_color}}</span> <br> {{@$about->smt_two}} <span>{{@$about->smt_two_color}}</span></h2>
                        <p>
                           {!!@$about->description!!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team end -->




      <!-- testimonial start -->
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
                        @foreach (@$list as $key=>$t)
                        <div class="col-lg-6 col-xl-4 mt_8">
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
                                    <!-- <h6>International Student</h6>
                                    <p>
                                        Received Student Immigration & Application service
                                    </p> -->
                                </div>
                            </div>
                        </div>
                      @endforeach

                       
                    </div>
                </div>
            </div>

            {{-- <div class="text-center pt-60">
                <a href="what-our-clients-say.php" class="btn btn-secondary bg-white">
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
            </div> --}}
        </div>
    </section>
    <!-- testimonial end -->

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
    <!-- hero section end -->



    @endsection
