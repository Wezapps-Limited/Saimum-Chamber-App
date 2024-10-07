 <header class="header-section py-4 w-100 fixed-top">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between">
                <!-- logo -->
                <div class="logo">
                    <a href="{{route('Index')}}">
						<img src="{{(@$logo->logo)?url('upload/Logo/'.@$logo->logo):asset('Client/assets/images/logo.png')}}" class="img-fluid" alt="Logo" >
					</a>
                </div>
                <!-- search -->
                <div class="search_box d-none d-lg-block">
                    <form action="{{route('Search')}}" method="get">
                        @csrf
                        <div class="input-group">
                            <button type="button" class="icon border-0 bg-transparent input-group-text">
                                <i class="fa fa-angle-down"></i>
                            </button>
                            <input type="text" name="search" id="search" class="form-control" required
                                placeholder="Search for services, blogs and more...">
                            <button type="submit" class="search_btn input-group-text border-end">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </form>
                </div>
                <!-- right sidebar menu -->
                <div class="right_sidebar d-flex align-items-center justify-content-between">
                    <!-- social media -->
                    <div class="social_media me-3 d-none d-md-block">
                        <ul class="d-flex align-items-center">
                            @foreach (@$social_icon as $key=>$s)

                            <li><a href="{{@$s->url}}" class="me-1" target="_blank"><i class="{{@$s->icon}}"></i></a></li>
                           
                            @endforeach

                           
                        </ul>
                    </div>
                    <!-- metting btn -->
                    <div class="me-3">
                        <a target="_blank" href="https://calendly.com/info-gqjl/100-consultation-with-uk-immigration-lawyer?month=2024-05" class="btn btn-primary">
                            <span>Book a meeting</span>
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-narrow-right">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M5 12l14 0" />
                                    <path d="M15 16l4 -4" />
                                    <path d="M15 8l4 4" />
                            </svg>
                            </div>
                        </a>
                    </div>
                    <!-- offcanvas -->
                    <div class="offcanvas_icon">
                        <a href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
                            aria-controls="offcanvasExample"><i class="fa fa-bars"></i></a>
                    </div>
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample"
                        aria-labelledby="offcanvasExampleLabel" style="width:320px;">
                        <div class="offcanvas-header mb-4">
                            <h5 class="offcanvas-title" id="offcanvasExampleLabel"></h5>
                            <button type="button" class="btn_close" data-bs-dismiss="offcanvas" aria-label="Close">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                    fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-x">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M18 6l-12 12" />
                                    <path d="M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                        <div class="offcanvas-body p-0">
                            <div class="offcanvas_menu">
                                <div class="logo">
                                    <a href="{{route('Index')}}"><img src="{{(@$logo->left_logo)?url('upload/Logo/'.@$logo->left_logo):asset('Client/assets/images/logo.png')}}" class="img-fluid" alt="Logo"></a>
                                </div>
                                <ul>
                                    <li><a href="{{route('Index')}}">Home</a></li>
                                    <li><a href="{{route('About')}}">About Us</a></li>
                                    <li><a href="{{route('AllExpertList')}}">Our Teams</a></li>
                                    <li><a href="{{route('TestimonialList')}}">What Our Clients Say</a></li>
                                    <li><a href="{{route('Blog')}}">Blog</a></li> 
                                    <li><a href="{{route('Contact')}}">Contact Us</a></li>
                                </ul>
                                <div class="info">
                                    <h4 class="mb-4">Get in touch</h4>
                                    <p>
                                        <span class="d-block mb-2">Mobile</span>
                                        <a href="tel:{{@$contact_us->mobile_one}}">{{@$contact_us->mobile_one}}</a>
                                        <br>
                                        <a href="tel:{{@$contact_us->mobile_two}}">{{@$contact_us->mobile_two}}</a>
                                    </p>
                                    <p>
                                        <span class="d-block mb-2">Telephone</span>
                                        <a href="tel:{{@$contact_us->tel}}">{{@$contact_us->tel}}</a>
                                    </p>
                                    <p>
                                        <span class="d-block mb-2">Email</span>
                                        <a href="maito:{{@$contact_us->email_one}}">{{@$contact_us->email_one}}</a></p>
                                    <p>
                                        <span class="d-block mb-2">Location</span>
                                        {!!@$contact_us->office_address!!}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- mobile search box -->
            <div class="search_box d-block d-lg-none mt-4">
                <form action="#" method="post">
                    <div class="input-group">
                        <button type="button" class="icon border-0 bg-transparent input-group-text">
                            <i class="fa fa-angle-down"></i>
                        </button>
                        <input type="text" name="search" id="search" class="form-control" required
                            placeholder="Search for services, blogs and more...">
                        <button type="submit" class="search_btn input-group-text border-end">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </header>