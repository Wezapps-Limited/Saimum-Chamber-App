@extends('Client.master')
@section('title') Contact Us @endsection
@section('meta_title') Contact Us @endsection
@section('meta_des') Contact Us @endsection
@section('content')


    <!-- contact start -->
    <div class="contact-section pb-8">
      <div class="">
          <div class="contact_bg mb-5" style="background-image: url('Client/assets/images/contact-bg.jpg');">
              <div class="container">
                  <div class="contact-info">
                      <div class="info-bg">
                          <img src="{{asset('Client/assets/images/bg1.png')}}" alt="">
                      </div>
                      <div class="info">
                          <img src="{{asset('Client/assets/images/bg3.png')}}" width="120" class="img-fluid" alt="Image">
                          <h4 class="mb-4">CONTACT US</h4>
                          <span>Telephone</span> <br>
                          <p><a href="tel:{{@$contact_us->mobile_one}}">{{@$contact_us->mobile_one}}</a> &
                              <a href="tel:{{@$contact_us->mobile_two}}">{{@$contact_us->mobile_two}}</a>
                          </p>
                          <span>Mobile</span> <br>
                          <p><a href="tel:{{@$contact_us->tel}}">{{@$contact_us->tel}}</a></p>
                          <span>Fax</span> <br>
                          <p><a href="tel:{{@$contact_us->fax}}">{{@$contact_us->fax}}</a></p>
                          <span>Email</span> <br>
                          <p><a href="maito:{{@$contact_us->email_one}}">{{@$contact_us->email_one}}</a></p>
                          <p>
                              <span>Address <br></span>
                             {!!@$contact_us->office_address!!}
                          </p>
                      </div>
                  </div>
              </div>
          </div>

          <div class="container pt-4">
              <div class="row gy-4 g-5">
                  <div class="col-lg-6 order-lg-2">
                      <div class="contact_form bg-white">
                          <!-- Check if the 'mailsent' query parameter exists and its value is 'success' -->
                               <form action="{{route('ContactUsFormPost')}}" method="post">
                                 @csrf
                              <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-floating mb-3">
                                          <input type="text" name="name" class="form-control" id="first_name" placeholder="First Name" autofocus required>
                                          <label class="form-label" for="first_name">First Name <span class="text-danger">*</span></label>
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-floating mb-3">
                                          <input type="text" name="l_name" class="form-control" id="last_name" placeholder="Last Name" required>
                                          <label class="form-label" for="last_name">Last Name <span class="text-danger">*</span></label>
                                      </div>
                                  </div>
                                  <div class="col-12">
                                      <div class="form-floating mb-3">
                                          <input type="email"  class="form-control" id="email" placeholder="name@example.com" required name="email">
                                          <label class="form-label" for="email">Email address <span class="text-danger">*</span></label>
                                      </div>
                                  </div>
                                  <div class="col-12">
                                      <div class="form-floating mb-3">
                                          <textarea class="form-control" name="message" placeholder="Leave a comment here" id="message" rows="5" style="height:130px  !important;" required></textarea>
                                          <label class="form-label" for="message">Write your comments <span class="text-danger">*</span></label>
                                      </div>
                                  </div>
                                  <div class="col-12">
                                      <button type="submit" class="btn btn-primary rounded border-0 d-flex align-items-center" name="submit" value="Submit">
                                          <span class="me-2">Submit</span>
                                          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-send">
                                              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                              <path d="M10 14l11 -11" />
                                              <path d="M21 3l-6.5 18a.55 .55 0 0 1 -1 0l-3.5 -7l-7 -3.5a.55 .55 0 0 1 0 -1l18 -6.5" />
                                          </svg>
                                      </button>
                                  </div>
                              </div>
                          </form>


                          {{-- <script>
                              // Hide the success message after 3 seconds
                              window.onload = function() {
                                  setTimeout(function() {
                                      var successMessage = document.getElementById("successMessage");
                                      if (successMessage) {
                                          successMessage.style.transition = "opacity 1s ease";
                                          successMessage.style.opacity = "0";
                                          setTimeout(function() {
                                              successMessage.remove();
                                          }, 1000); // 1000 milliseconds = 1 second
                                      }
                                  }, 3000); // 3000 milliseconds = 3 seconds
                              };

                          </script> --}}

                      </div>
                  </div>
                  <div class="col-lg-6 order-lg-1">
                      <div class="map">
                          <iframe src="{{@$contact_us->email_two}}" width="100%" height="350" class="rounded" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                          </iframe>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- contact end -->























@endsection
