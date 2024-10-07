@extends('Client.master')
@section('title') Blog Details @endsection
@section('meta_title') {{@$News->meta_title}} @endsection
@section('meta_des') {!!@$News->meta_des!!} @endsection
@section('content')
   
    <!-- Page Title Area Start -->
    <div class="page-title-area curve bg-purple">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>{{@$News->title}}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Title Area End -->



   <!-- Service details Section Start -->
   <section class="service-details-area pt-100" id="service">
	<div class="container">
		<div class="service-details">
			<h2 class="mb-5">{{@$News->title}}</h2>
			{!!@$News->description!!}

		</div>
	</div>
</section>
<!-- Service details Section End -->






    @endsection