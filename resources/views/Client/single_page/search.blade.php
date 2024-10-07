@extends('Client.master')
@section('title') Search Content  @endsection
@section('meta_title') Search Content  @endsection
@section('meta_des') Search Content  @endsection
@section('content')

   <!-- Page Title Area Start -->
   <div class="page-title-area curve bg-purple">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2>Search Results for "{{ $search }}"</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Title Area End -->
<section class="service-details-area pt-100" id="service">
    <div class="container">
        <div class="service-details">


    @php
    function highlightKeyword($text, $keyword) {
        // Escape special characters in the keyword
        $escaped_keyword = preg_quote($keyword, '/');

        // Perform case insensitive search and highlight
        $text = preg_replace('/\b(' . $escaped_keyword . ')\b/i', '<span style="background-color: yellow;">$1</span>', $text);
        
        return $text;
    }
@endphp

    <h2>Blogs</h2>
    @if ($blog->count() > 0)
        <ul>
            @foreach ($blog as $blog)
                <li><a href="{{route('BlogDetails',@$blog->slug)}}">{!! highlightKeyword($blog->title, $search) !!}</a></li>
                <p><a href="{{route('BlogDetails',@$blog->slug)}}">{!! highlightKeyword($blog->description, $search) !!}</a></p>
            @endforeach
        </ul>
    @else
        <p>No blogs found.</p>
    @endif

    <h2>Visas</h2>
    @if ($visa->count() > 0)
        <ul>
            @foreach ($visa as $visa)
                <li><a href="{{route('SingleVisa',@$visa->slug)}}">{!! highlightKeyword($visa->title, $search) !!}</a></li>
                <p><a href="{{route('SingleVisa',@$visa->slug)}}">{!! highlightKeyword($visa->description, $search) !!}</a></p>
            @endforeach
        </ul>
    @else
        <p>No visas found.</p>
    @endif
</div>
</div>
</div>


@endsection


