 <!-- cookie -->
 <div class="site_cookie">
    <div class="p-4 bg-white rounded">
        <h5>We value your privacy</h5>
        <p>
            We use cookies to enhance your browsing experience, serve personalized ads or content, and analyze our traffic.
            By clicking "Accept All", you consent to our use of cookies.
        </p>
        <a href="javascript:void(0)" class="reject_cookie btn btn-secondary m-1 me-2 m-1">Reject All</a>
        <a href="javascript:void(0)" class="accept_cookie btn btn-primary m-1">Accept All</a>
    </div>
</div>
<!-- cookie -->

<!-- js -->
<script src="{{asset('Client/assets/js/jquery.min.js')}}"></script>
<script src="{{asset('Client/assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('Client/assets/js/main.js')}}"></script>


<!-- Footer Section End -->

<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="{{asset('toastr.min.js')}}"></script>

      @yield('footer')


<script>
    // Function to handle the fade-in effect for Brand logos
    function handleLogoFadeIn(entries, observer) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = 1;
            } else {
                entry.target.style.opacity = 0;
            }
        });
    }

    // Create an intersection observer
    const logoObserver = new IntersectionObserver(handleLogoFadeIn, {
        root: null,
        rootMargin: '0px',
        threshold: 0.1
    });

    // Select the brand logo elements
    const brandLogos = document.querySelectorAll('.brand-logo');

    // Observe each brand logo
    brandLogos.forEach(logo => {
        logoObserver.observe(logo);
    });

</script>



      {!!@$google_analytics->pixel_analytics!!}

      {!!@$google_analytics->google_tag_manager!!}

<script>
    @if(Session::has('message'))

    var type ="{{ Session::get('alert-type','success') }}";

    switch(type){
    case "success":
        toastr.success("{{ Session::get('message') }}");
        break;
    case "error":
        toastr.error("{{ Session::get('message') }}");
        break;
    }

    @endif
</script>




   

