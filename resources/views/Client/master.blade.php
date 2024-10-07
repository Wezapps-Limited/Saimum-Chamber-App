<!DOCTYPE html>
<html lang="en">
   <head>

     @include('Client.common.head')
   </head>

   <body>

    <!-- Navbar Area Start -->
    @include('Client.common.header')
    @include('Client.common.fixed_menu')
    <!-- Navbar Area End -->

    <!-----banner------>
    @yield('banner')
    <!-----banner------>

     @yield('content')

    <!-----service------>
    @yield('service')
    <!-----service------>


    <!-----Why choose------>
    @yield('why_choose')
    <!-----Why choose------>

    <!-----Team------>
    @yield('team')
    <!-----Team------>

    <!-----Brand------>
    @yield('brand')
    <!-----Brand------>

    
    <!-----Application------>
    @yield('application')
    <!-----Application------>


    <!-----blog------>
    @yield('blog')
    <!-----blog------>

    <!-----testimonial------>
    @yield('testimonial')
    <!-----testimonial------>

    <!-----hero section------>
    @yield('hero_section')
    <!-----hero section------>


 
    <!-- Footer Section Start -->
    @include('Client.common.footer')
    <!-- Footer Section End -->

    <!-- Footer Section Start -->
    @include('Client.common.bottom-fixed-bar')
    <!-- Footer Section End -->

    <!-- Site All Jquery Js -->
    @include('Client.common.script')

    <!-- Footer Section End -->


   </body>
</html>
