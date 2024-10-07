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

    <!-- Main div Start -->
    <div class="main-wrapper">

        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center position-relative"
            style="background:rgb(249 250 251 / 1);">
            <div class="auth-box row">
                <div class="col-lg-7 col-md-5 modal-bg-img" style="background-image: url(../Server/assets/images/3.jpg);">
                </div>

                <div class="col-lg-5 col-md-7 bg-white">
                    <div class="p-3">

                            @if(Session::has('successMessage'))
                            <p style="background: #62bb5d;padding: 9px;border-radius: 6px;color: antiquewhite;">{{Session::get('successMessage')}}</p>
                        @endif

                        <div class="text-center">
                            <img src="{{asset('Server/assets/images/logo.png')}}" class="w-50" alt="">
                        </div>
                        <h2 class="mt-3 text-center">Sign In</h2>
                        <p class="text-center">Enter your email address and password to access admin panel.</p>


                        <form class="mt-4 mb-4" action="{{ route('login') }}" method="POST">
                          @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group mb-3">
                                        <label class="form-label text-dark" for="email">Username</label>
                                        <input class="form-control @error('email') is-invalid @enderror" id="email" type="email" name="email" required
                                            placeholder="enter your username">
                                          @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                            </span>
                                    @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group mb-3">
                                        <label class="form-label text-dark" for="pwd">Password</label>
                                        <input class="form-control @error('password') is-invalid @enderror" id="pwd" type="password" name="password" required
                                            placeholder="enter your password">
                                             @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                            </span>
                                    @enderror
                                    </div>
                                </div>
                                
                                   
                                  @php
                    $first_number = rand(1,9);
                    $second_number = rand(1,9);
                @endphp
                
                <input type="hidden" id="first_number" name="first_number" value="{{@$first_number}}">
                <input type="hidden" id="second_number" name="second_number" value="{{@$second_number}}">
                <input type="hidden" name="correct_ans" value="{{@$first_number+$second_number}}">
                
                  <div class="col-md-2">
                    <div class="form-group">
                    <input type="text" readonly style="width: 43px;" class="form-control" value="{{@$first_number}}">
                   </div>
                 </div>

                 <div class="col-md-1">
                   
                      <span style="font-size:35px;color:#4a4949;padding-top:5px">+</span>
                   
                 </div>


                 <div class="col-md-2">
                    <div class="form-group">
                    <input type="text" readonly style="width: 43px;" class="form-control" value="{{@$second_number}}">
                </div>
                 </div>
                 
                    <div class="col-md-1">
                   
                    <span style="font-size:35px;color:black;padding-top:5px;font-weight:bold">=</span>
                 
               </div>

               <div class="col-md-3">
                <div class="form-group">
                <input type="number" id="right_ans" style="width: 63px;" name="right_ans" class="form-control">
                </div>
             </div>
                                
                                <div class="col-lg-12 text-center">
                                    <button type="button"  id="submitButton" class="btn w-100 btn-dark" onclick="checkSum()">Sign In</button>
                                </div>
                                <!-- <div class="col-lg-12 mt-3">
                                    <a href="{{route('SuperAdminForgotPass')}}" class="text-success">Forgot your password</a>
                                </div> -->
                                <div class="col-lg-12 text-center mt-5">
                                    Copyright <a href="#" class="text-danger">LCS</a>
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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(".preloader ").fadeOut();
    </script>
    <!-- jQuery End -->
      <script>
   
        $("#right_ans").on('keyup', function() {
          
            var firstNumber = parseFloat($("#first_number").val());
            var secondNumber = parseFloat($("#second_number").val());
            var rightAns = parseFloat($(this).val());

            // Calculate the sum
            var sum = firstNumber + secondNumber;

            // Check if the sum matches the entered value
            if (sum === rightAns) {
                
                $("#submitButton").attr('type', 'submit'); // Change button type to submit
            } else {
                
                $("#submitButton").attr('type', 'button'); // Change button type to button
            }
        });
   
</script>
 <style>
    .swal2-container {
        position: fixed;
        top: 0;
        right: 0;
        margin: 10px;
    }
    </style>
 <script>
    function checkSum() {
        var button = document.getElementById('submitButton');
        
        if (button.type === 'button') {
            // Ensure jQuery is used correctly
            var firstNumber = parseFloat($("#first_number").val());
            var secondNumber = parseFloat($("#second_number").val());
            var rightAns = parseFloat($("#right_ans").val());
            var sum = firstNumber + secondNumber;
            
            // Check for NaN values in case of invalid input
            if (isNaN(firstNumber) || isNaN(secondNumber) || isNaN(rightAns)) {
                
                const Toast = Swal.mixin({
              toast: true,
              position: "top-end",
              showConfirmButton: false,
              timer: 3000,
              timerProgressBar: true,
              didOpen: (toast) => {
                toast.onmouseenter = Swal.stopTimer;
                toast.onmouseleave = Swal.resumeTimer;
              }
            });
            Toast.fire({
              icon: "error",
              title: "Please enter the correct CAPTCHA answer"
            });
                      
                return;
            }
            
            // Use a small tolerance for floating-point comparison
            var tolerance = 0.0001;
            if (Math.abs(sum - rightAns) < tolerance) {
                 $("#submitButton").attr('type', 'submit'); 
                // alert('Button clicked! Sum is correct.');
            } else {
                                const Toast = Swal.mixin({
                      toast: true,
                      position: "top-end",
                      showConfirmButton: false,
                      timer: 3000,
                      timerProgressBar: true,
                      didOpen: (toast) => {
                        toast.onmouseenter = Swal.stopTimer;
                        toast.onmouseleave = Swal.resumeTimer;
                      }
                    });
                    Toast.fire({
                      icon: "error",
                      title: "Sum is incorrect."
                    });
                // alert('Sum is incorrect.');
            }
        } 
    }
    </script>
</body>

</html>
