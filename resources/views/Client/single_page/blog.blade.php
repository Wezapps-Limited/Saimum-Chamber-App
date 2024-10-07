@extends('Client.master')
@section('title') Blog @endsection
@section('meta_title') Blog @endsection
@section('meta_des') Blog @endsection
@section('content')

    <!-- Page Title Area Start -->
    <div class="page-title-area curve bg-purple">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>Blogs</h2>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Title Area End -->








      <!-- blog start -->
      <section class="blog-section pt-60 pb-60 position-relative" id="service">
        <div class="container">
            <!-- section heading -->
            <div class="section-heading pb-4 text-center">
                <img src="{{asset('Client/assets/images/bg-9.png')}}" width="120" class="img-fluid" alt="Image">
                <h2 class="mb-2 pt-4 pt-sm-0">Read our latest blogs</h2>
                <p class="m-0">
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

           
        </div>
    </section>
    <!-- blog end -->

    <!-- <div class="text-center pt-60">
                <a href="#" class="btn btn-secondary m-1 bg-white">
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
            </div> -->
    </div>
    </section>
    <!-- blog section end -->

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