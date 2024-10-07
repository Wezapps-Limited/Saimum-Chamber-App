@extends('Client.master')
@section('title') News - Wezapps Limited @endsection
@section('meta_title') News - Wezapps Limited @endsection
@section('meta_des') News - Wezapps Limited @endsection
@section('content')
    <!-- Start Page Title Area -->
    <div class="page-title-area" id="ournews">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>News</h2>
                        <ul>
                            <li><a href="{{route('Index')}}">Home</a>
                            </li>
                            <li>News</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->


     <!-- Blog Section Start -->
     <section id="blog" class="blog-area blog-page-area section-padding">
        <div class="container">
            <div class="row">
            @foreach(@$News as $key=>$n)
                <div class="col-lg-4 col-md-6 blog-item wow fadeInUp" data-wow-delay="0.2s">
                    <div class="single-blog">
                        <div class="post-img">
                            <a href="#">
                                <img src="{{(@$n->image)?url('upload/NewsManage/'.@$n->image):''}}" alt="" />
                            </a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-tag">
                            </div>
                            <div class="blog-body-title">
                                <h5><a href="#">{{@$n->title}}</a></h5>
                            </div>
                            <div class="blog-body-text">
                                <p>{!!Str::limit($n->description,70)!!}</p>
                            </div>
                            <div class="blog-bottom-text-link"> <span>Posted {{ date('Y-d-m',strtotime(@$n->news_date))}}</span>
                                <a href="#">Read Story</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach


                <!-- <div class="col-lg-12 col-md-12">
                    <div class="pagination-area"> <a href="#" class="prev page-numbers"><i class="fa fa-angle-double-left"></i></a>
                        <a href="#" class="page-numbers">1</a>
                        <span class="page-numbers current" aria-current="page">2</span>
                        <a href="#" class="page-numbers">3</a>
                        <a href="#" class="page-numbers">4</a>
                        <a href="#" class="next page-numbers"><i class="fa fa-angle-double-right"></i></a>
                    </div>
                </div> -->

            </div>
        </div>
    </section>
    <!-- Blog Section End -->

@endsection