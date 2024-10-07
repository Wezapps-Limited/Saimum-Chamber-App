<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      
      <title>@yield('title')</title>
      <meta name="description" content="@yield('meta_des')">
      <meta name="keywords" content="Rancon Electronics Ltd" />
      <meta name="google-site-verification" content="bhnzwLkVmWV45AKb0Zuxtui_9dHlnTTJAXsONadtNmA" />
     
     @include('Client.common.head')
   </head>

   <body>

       <!-- Start Preloader Area -->
       <div class="preloader">
        <div class="preloader-inner"> <span></span>
            <span></span>
        </div>
    </div>
    <!-- End Preloader Area -->

    <!-- Navbar Area Start -->
    @include('Client.common.header')
    <!-- Navbar Area End -->

    @yield('content')

    <!-- Home Section Start -->
     @yield('slider')
    <!-- Home Section End -->

    <!-- Service Section Start -->
     @yield('product')
    <!-- Service Section End -->

    <!-- Counter Section Start -->
     @yield('who_we_are')
    <!-- Counter Section End -->

    <!-- Mini Feature Section Start -->
    @yield('why_us')
    <!-- Mini Feature Section End -->

    <!-- Awards Section Start -->
    @yield('counter')
    <!-- Awards Section End -->


    <!-- About Section Start -->
   @yield('values')
    <!-- About Section End -->

    <!-- Works Section Start -->
    @yield('join_us')
    <!-- Works Section End -->


   


 



      <!-- Footer Section Start -->
      @include('Client.common.footer')
      <!-- Footer Section End -->

      <!-- Site All Jquery Js -->
      @include('Client.common.script')

      <!-- Footer Section End -->


   </body>
</html>
