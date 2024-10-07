@extends('Client.master')
@section('title') {{@$person->name}} @endsection
@section('meta_title') {{@$person->name}} @endsection
@section('meta_des') {{@$person->name}} @endsection
@section('content')

   <!-- Profile Hero Inner Start -->
   <div class="profile-hero-inner">
    <div class="container">
        <div class="profile-hero-inner-content">
            <h2>{{@$person->name}}</h2>
            <p>{{@$person->designation}}</p>
            <a href="{{route('Contact')}}" class="contact-btn">
                <div class="icon">
                    <i class="fa-regular fa-share-from-square"></i>
                </div>
                <span> Contact</span>
            </a>
        </div>
        <div class="profile-hero-inner-media">
            <div class="profile-hero-inner-media_image">
                <img src="{{(@$person->image)?url('upload/OurExperts/'.@$person->image):''}}" alt="{{@$person->name}}" loading="lazy">
            </div>
        </div>
    </div>
</div>
<!-- Profile Hero Inner End -->

<!-- Service details Section Start -->
<section class="service-details-area pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="service-details profile">
                   
                    {!!@$person->designation!!}
                    
                </div>
            </div>
            <div class="col-lg-4">
                <div class="contact-help-sidebar bg-gray">
                    <h4>Connect with {{@$person->name}}</h4>
                    <p class="info">
                        <img src="https://www.bindmans.com/wp-content/uploads/2022/08/icon-phone.svg">
                        <span>
                            <a href="tel:{{@$person->mobile}}">{{@$person->mobile}}</a>
                            <br>
                            <a href="tel:{{@$person->mobile_one}}">{{@$person->mobile_one}}</a>
                        </span>
                    </p>
                    <p class="info">
                        <img src="{{asset('Client/assets/images/mobile-phoe.png')}}" alt="Mobile">
                        <a href="tel:{{@$person->tel}}">{{@$person->tel}}</a>
                    </p>
                    <p class="info">
                        <img src="https://www.bindmans.com/wp-content/uploads/2022/08/icon-email.svg">
                        <a href="mailto:{{@$person->email}}">{{@$person->email}}</a>
                    </p>
                    <p class="info">
                        <svg width="24" height="24" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
                            <path d="M19.7,3H4.3C3.582,3,3,3.582,3,4.3v15.4C3,20.418,3.582,21,4.3,21h15.4c0.718,0,1.3-0.582,1.3-1.3V4.3 C21,3.582,20.418,3,19.7,3z M8.339,18.338H5.667v-8.59h2.672V18.338z M7.004,8.574c-0.857,0-1.549-0.694-1.549-1.548 c0-0.855,0.691-1.548,1.549-1.548c0.854,0,1.547,0.694,1.547,1.548C8.551,7.881,7.858,8.574,7.004,8.574z M18.339,18.338h-2.669 v-4.177c0-0.996-0.017-2.278-1.387-2.278c-1.389,0-1.601,1.086-1.601,2.206v4.249h-2.667v-8.59h2.559v1.174h0.037 c0.356-0.675,1.227-1.387,2.526-1.387c2.703,0,3.203,1.779,3.203,4.092V18.338z"></path>
                        </svg>
                        <a href="{{@$person->linkedin}}" target="_blank">Linkedin</a>
                    </p>
                </div>

                <div class="contact-help-sidebar bg-gray expertise mt-3">
                    <h4>Expertise</h4>

                    @foreach (@$person_expertise as $key=>$p)
                        
                  
                    <p class="info">
                        <a href="#">
                            <i class="fa-solid fa-arrow-right-long"></i>
                            {{@$p->name}}

                        </a>
                    </p>


                    @endforeach
                   
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Service details Section End -->



@endsection