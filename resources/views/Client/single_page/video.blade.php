@extends('Client.master')
@section('title') Videos - Rancon Electronics Ltd @endsection
@section('meta_title') Videos - Rancon Electronics Ltd @endsection
@section('meta_des') Videos - Rancon Electronics Ltd @endsection
@section('content')



      <!-- Media Inner Banner Section Start -->
      <section class="media-inner-banner" id="video">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="media-inner-banner_title">
                     <h2>Videos</h2>
                  </div>
               </div>
            </div>
         </div>
      </section>
     <!-- Media Inner Banner Section End -->


     <section class="image-area pt-100 pb-100">
      <div class="container">
         <div class="gallery-container_video">
            <div class="row">
               @foreach(@$video as $key=>$ga)
               <div class="col-md-4">
                  <div class="video-single">
                     <a href="{{@$ga->video_link}}" class="poping">
                        <div class="image-single">
                           <img src="{{(@$ga->image)?url('upload/VideoImage/'.@$ga->image):''}}" alt="">
                        </div>
                        <div class="video-button">
                           <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="25"
                              height="34"
                              viewBox="0 0 25 34"
                              fill="none"
                           >
                              <path d="M25 17L0.249999 33.4545L0.25 0.545516L25 17Z" fill="#D0D0D0" />
                           </svg>
                        </div>
                     </a>
                     <!-- title -->
                     <!-- <h4>Rancon Electronics Limited</h4> -->
                  </div>
               </div>

               @endforeach
            </div>
         </div>
      </div>
   </section>

   



    @endsection
