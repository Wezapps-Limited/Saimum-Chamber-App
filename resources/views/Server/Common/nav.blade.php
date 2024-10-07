<nav class="navbar top-navbar navbar-expand-lg">
    <div class="navbar-header" data-logobg="skin6">
        <!-- This is for the sidebar toggle which is visible on mobile only -->
        <a class="nav-toggler waves-effect waves-light d-block d-lg-none" href="javascript:void(0)"><i
                class="ti-menu ti-close"></i></a>
  
        <!-- Logo -->
  
        <div class="navbar-brand">
            <!-- Logo icon -->
            <a href="{{route('home')}}">
                <img src="{{asset('Server/assets/images/logo.png')}}" alt="" class="img-fluid">
            </a>
        </div>
  
        <!-- End Logo -->
  
  
        <!-- Toggle which is visible on mobile only -->
  
        <a class="topbartoggler d-block d-lg-none waves-effect waves-light" href="javascript:void(0)"
            data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="ti-more"></i>
        </a>
    </div>
    <!-- End Logo -->
    <div class="navbar-collapse collapse" id="navbarSupportedContent">
        <ul class="navbar-nav sidebar-hide-btn_wrapper float-left me-auto ms-3 ps-1">
            <li class="nav-item d-none d-md-block">
                <a id="sidebar-hide-btn" class="nav-link" href="javascript:void(0)">
                    <i class="fa fa-bars"></i>
                </a>
            </li>
        </ul>
  
  
  @php
  
   $profile = App\Models\User::where('id',Auth::user()->id)->first();
  @endphp
        <!-- Right side toggle and nav items -->
  
        <ul class="navbar-nav float-end">
  
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-bs-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <img src="{{(@$profile->image)?url('upload/Profile/'.@$profile->image):asset('Server/assets/images/users/profile-pic.jpg')}}" alt="user" class="rounded-circle"
                   
                        width="40">
                    <span class="ms-2 d-lg-inline-block"><span
                            class="text-dark">{{@$profile->name??'Admin'}}</span> <i data-feather="chevron-down"
                            class="svg-icon"></i></span>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-right user-dd animated flipInY">
                    <a class="dropdown-item" href="{{route('Profile')}}"><i data-feather="user"
                            class="svg-icon me-2 ms-1"></i>
                        Edit Profile</a>

                        <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{route('AccountSettingForm')}}"><i data-feather="settings"
                                        class="svg-icon me-2 ms-1"></i>
                                    Account Setting</a>
                    
                    
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"><i data-feather="power"
                            class="svg-icon me-2 ms-1"></i>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        Logout</a>
                    
                   
                </div>
            </li>
            
        </ul>
    </div>
  </nav>