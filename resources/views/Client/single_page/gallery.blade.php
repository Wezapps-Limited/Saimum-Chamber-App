@extends('Client.master')
@section('title') Gallery - Rancon Electronics Ltd @endsection
@section('meta_title') Gallery - Rancon Electronics Ltd @endsection
@section('meta_des') Gallery - Rancon Electronics Ltd @endsection
@section('content')



      <!-- Media Inner Banner Section Start -->
      <section class="media-inner-banner" id="image">
        <div class="container">
           <div class="row">
              <div class="col-md-12">
                 <div class="media-inner-banner_title">
                    <h2>Images</h2>
                 </div>
              </div>
           </div>
        </div>
     </section>
     <!-- Media Inner Banner Section End -->

   <!-- Images section start -->
   <section class="image-area pt-100 pb-100">
    <div class="container">
       <div class="gallery-container">
          <div class="row">
            @foreach(@$gallery as $key=>$ga)
             <div class="col-lg-4 col-md-6">
                <div class="image-single">
                   <a href="{{(@$ga->image)?url('upload/CategoryManage/'.@$ga->image):''}}" class="poping">
                      <img src="{{(@$ga->image)?url('upload/CategoryManage/'.@$ga->image):''}}" alt="{{@$ga->title}}" />
                      <div class="image_icon">
                         <i class="fas fa-search-plus"></i>
                      </div>
                   </a>
                </div>
                <!-- title -->
                <!-- <h4>Rancon Electronics Limited</h4> -->
             </div>

             @endforeach
          </div>
       </div>
    </div>
 </section>
 <!-- Images section end -->





    @endsection
