@extends('Client.master')
@section('title') What Our Clients Say @endsection
@section('meta_title') What Our Clients Say @endsection
@section('meta_des') What Our Clients Say @endsection
@section('content')

    <!-- Page Title Area Start -->
    <div class="page-title-area curve bg-purple">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>What Our Clients Say</h2>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Title Area End -->



       <!-- testimonial section start -->
       <section class="testimonial-section pt-60 pb-60 position-relative overflow-hidden" id="service">
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
            <div class="section-heading pb-8 text-center">
                <h2 class="mb-4 pt-4 pt-sm-0">Listen from <span style="color:#FF5459;">our clients</span> and then make
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
    <!-- testimonial section end -->

  
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