@extends('Client.inner_master')
@section('title') {{@$page->meta_title}} @endsection
@section('meta_title') {{@$page->meta_title}} @endsection
@section('meta_des') {{@$page->meta_des}} @endsection
@section('content')


      
      <section class="page-header">
            <div class="page-header__top">
                <div class="page-header-bg" style="background-image: url(../Client/assets/images/backgrounds/page-header-bg.jpg)">
                </div>
                <div class="page-header-bg-overly"></div>
                <div class="container">
                    <div class="page-header__top-inner">
                        <h2>{{@$page->title}}</h2>
                    </div>
                </div>
            </div>
            <div class="page-header__bottom">
                <div class="container">
                    <div class="page-header__bottom-inner">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="{{route('Index')}}">Home</a></li>
                            <li><span>.</span></li>
                            <li>Pages</li>
                            <li><span>.</span></li>
                            <li class="active">{{@$page->title}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>


      <div class="blog-details-wrapper ">
   <div class="container position-relative pb-40">
      <div class="row">
         <div class="col-lg-12">
            <div class="blog-details">
            @if(@$page->image!='default.png')
               <div class="blog-d-top">
                  <div class="blog-d-thumb">
                     <img style="width:500px;margin:0 auto; display:block" src="{{ asset('upload/page/'.@$page->image) }}" alt="">
                  </div>
               </div>

               @endif
               <div class="blog-body">
                  
                  {!! @$page->description !!}

               </div>
            </div>
         </div>
         
      </div>
   </div>
</div>

@endsection