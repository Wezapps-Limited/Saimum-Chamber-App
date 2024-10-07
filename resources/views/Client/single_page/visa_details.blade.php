@extends('Client.master')
@section('title') {{@$visa->title}} @endsection
@section('meta_title') {{@$visa->meta_title}} @endsection
@section('meta_des') {!!@$visa->meta_des!!} @endsection
@section('content')

<style>
    .page-title-area.curve .page-title-content p::before {
    background: #ffffff;
}

.t_color{
    color: white !important;
}

</style>

   <!-- Page Title Area Start -->
   <div class="page-title-area curve" style="background: {{@$visa->bg_color}} !important">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2 class="t_color">{{@$visa->title}}</h2>
                    <p class="t_color">We have extensive experience in the following areas</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Title Area End -->

<!-- Service details Section Start -->
<section class="service-details-area pt-100" id="service">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="service-details">

                     {!!@$visa->description!!}
                   
                </div>
            </div>
            <div class="col-md-4">
                <div class="key-contacts-sidebar">
                    <h3>Key contacts</h3>

                    @foreach (@$key_contact as $key=>$person)
                        
                
                    <div class="person">
                        <a class="person-image" href="{{@$person->url}}">
                            <img src="{{(@$person->image)?url('upload/KeyContact/'.@$person->image):''}}" alt="{{@$person->name}}">
                        </a>
                        <h4 class="person-name">
                            <a href="shafiqur-rahman.php">
                               {{@$person->name}}
                            </a>
                        </h4>
                        <p> {{@$person->designation}}</p>
                        <p class="email"><a href="mailto:{{@$person->email}}">{{@$person->email}}</a></p>

                    </div>

                    @endforeach

                    
                </div>
                <div class="contact-help-sidebar">
                    <h4>How can we help you?</h4>
                    <p>Speak to one of our experts today</p>
                    <p class="info">
                        <img src="https://www.bindmans.com/wp-content/uploads/2022/08/icon-phone.svg">
                        <span>
                            <a href="tel:{{@$contact_us->mobile_one}}">{{@$contact_us->mobile_one}}</a>
                            <br>
                            <a href="tel:{{@$contact_us->mobile_two}}">{{@$contact_us->mobile_two}}</a>
                        </span>
                    </p>
                    <p class="info">
                        <img src="{{asset('Client/assets/images/mobile-phoe.png')}}" alt="Mobile">
                        <a href="tel:{{@$contact_us->tel}}">{{@$contact_us->tel}}</a>
                    </p>
                    <p class="info">
                        <img src="https://www.bindmans.com/wp-content/uploads/2022/08/icon-email.svg">
                        <a href="mailto:{{@$contact_us->email_one}}">{{@$contact_us->email_one}}</a>
                    </p>
                    <p class="info">
                        <img src="https://www.bindmans.com/wp-content/uploads/2022/08/icon-enquiry.svg">
                        <a href="{{route('Contact')}}">Make an enquiry</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Service details Section End -->

<!-- Faq Section Start -->
<section class="faq-area pt-100 pb-100">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-lg-6 col-md-12 faq-item">
            <h2>Frequently Asked Questions</h2>
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
            <div class="col-lg-6 col-md-12 faq-item">
                <div class="faq-image-grid">
                    @foreach (@$visa_gallery as $key=>$g)
                        
             
                    <img src="{{(@$g->image)?url('upload/VisaGallery/'.@$g->image):''}}" class="img-fluid" alt="faq">
                    @endforeach
                    {{-- <img src="assets/images/faq-2.jpg" class="img-fluid" alt="faq">
                    <img src="assets/images/faq-3.jpg" class="img-fluid" alt="faq">
                    <img src="assets/images/faq-4.jpg" class="img-fluid" alt="faq"> --}}
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Faq Section End -->


@endsection