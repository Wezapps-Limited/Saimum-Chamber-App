@extends('Client.master')
@section('title') News Details - Wezapps Limited @endsection
@section('meta_title') {{@$News->meta_title}} @endsection
@section('meta_des') {!!@$News->meta_des!!} @endsection
@section('content')
    <!-- Start Page Title Area -->
    <div class="page-title-area" id="ournews">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>News Details</h2>
                        <ul>
                            <li><a href="{{route('Index')}}">Home</a>
                            </li>
                            <li>News Details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->


    
	<!-- Start Blog Details Area -->
	<section class="blog-details-area section-padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-12">
					<div class="blog-details-desc">
						<div class="article-image">
							<img src="{{(@$News->image)?url('upload/NewsManage/'.@$News->image):''}}" alt="image">
						</div>
						<div class="article-content">
							<div class="entry-meta">
								<ul>
									<li> <span>Posted On:</span>  <a href="#">{{ date('Y-d-m',strtotime(@$News->news_date))}}</a>
									</li>
									
								</ul>
							</div>
							{!!@$News->description!!}
						</div>
						
						<div class="post-navigation">
							<div class="navigation-links">
								<div class="nav-previous">
									<a href="{{@$previousNews}}"> <i class="fa fa-arrow-left"></i> Prev Post</a>
								</div>
								<div class="nav-next"> <a href="{{@$nextNews}}">
                                            Next Post 
                                            <i class="fa fa-arrow-right"></i>
                                        </a>
								</div>
							</div>
						</div>
						
					</div>
				</div>
				<div class="col-lg-4 col-md-12">
					<aside class="widget-area" id="secondary">
						
           
						<section class="widget widget_snoki_posts_thumb">
							<h3 class="widget-title">Recent Posts</h3>
                            @foreach(@$recent as $key=>$News)
                            <article class="item">
								<a href="{{route('NewsDetails',@$News->slug)}}" class="thumb"> <span class="fullimage cover" style="background-image: url('{{ asset('upload/NewsManage/' . $News->image) }}');" role="img"></span>
								</a>
								<div class="info">
									<span>{{date('d-m-Y',strtotime(@$News->news_date))}}</span>
									<h4 class="title usmall">
                                            <a href="{{route('NewsDetails',@$News->slug)}}">{{@$News->title}}</a>
                                        </h4>
								</div>
							</article>


						  @endforeach
						</section>
						
						
					</aside>
				</div>
			</div>
		</div>
	</section>
	<!-- End Blog Details Area -->


    @endsection