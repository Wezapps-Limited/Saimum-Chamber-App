<!DOCTYPE html>
<html dir="ltr">

<head>
     @include('Server.Common.header')
      <title>Super Admin Login Panel</title>
      <meta name="keywords" content="" />
</head>

<body>

<!-- Start Preloader Area -->
    <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
    </div>
    <!-- End Preloader Area -->

    <div class="main-wrapper">

        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center position-relative"
            style="background:rgb(249 250 251 / 1);">
            <div class="auth-box row">
                <div class="col-lg-6 col-md-5 modal-bg-img" style="background-image: url(../Server/assets/images/big/3.jpg);">
                </div>
                <div class="col-lg-6 col-md-7 bg-white">
                    <div class="p-4">
                        <h2 class="mt-4 text-black alert-link">Forgot password</h2>
                        <form class="mt-4 mb-5" action="{{route('SuperAdminForgotSubmit')}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group mb-3">
                                        <label class="form-label text-dark" for="email">Email</label>
                                        <input class="form-control" id="email" type="email" name="email" required
                                            placeholder="john@doe.com">
                                    </div>
                                </div>
                                <div class="col-lg-12 text-center">
                                    <button type="submit" class="btn w-100 btn-success">Recover password</button>
                                </div>
                                <div class="col-lg-12 mt-3">
                                    <a href="{{route('showAdminLoginForm')}}" class="text-success">Already have an account? Login</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery Start -->

    @include('Server.Common.script')

    <script>
        $(".preloader ").fadeOut();
    </script>
    <!-- jQuery End -->
</body>

</html>
