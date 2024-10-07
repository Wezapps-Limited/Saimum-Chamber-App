@extends('Client.master')
@section('title') Career - Rancon Electronics Ltd @endsection
@section('meta_title') Career - Rancon Electronics Ltd @endsection
@section('meta_des') Career - Rancon Electronics Ltd @endsection
@section('content')

   <!-- Career Intro Section Start -->
   <section class="career-intro">
    <div class="container">
       <div class="career-intro_top">
          <div class="career-intro_top_text">
             <h2>
                Take ownership,<br />
                chase ideas and build the future
             </h2>
             <a href="javascript:void(0)">
                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
                   <path
                      d="M17.9998 30.24C11.2318 30.24 5.75977 24.768 5.75977 18C5.75977 11.232 11.2318 5.76 17.9998 5.76C24.7678 5.76 30.2398 11.232 30.2398 18C30.2398 24.768 24.7678 30.24 17.9998 30.24ZM17.9998 7.2C12.0238 7.2 7.19977 12.024 7.19977 18C7.19977 23.976 12.0238 28.8 17.9998 28.8C23.9758 28.8 28.7998 23.976 28.7998 18C28.7998 12.024 23.9758 7.2 17.9998 7.2Z"
                      fill="#4A4A4A"
                   />
                   <path
                      d="M17.7834 24.984L16.7754 23.976L22.7514 18L16.7754 12.024L17.7834 11.016L24.7674 18L17.7834 24.984Z"
                      fill="#4A4A4A"
                   />
                   <path d="M11.5195 17.28H23.7595V18.72H11.5195V17.28Z" fill="#4A4A4A" />
                </svg>
                <span>Jump to jobs</span>
             </a>
          </div>
          <div class="career-intro_top_image">
             <img src="{{asset('Client/assets/images/dynamic/career-intro.jpg')}}" alt="Career Image" />
          </div>
       </div>
       <div class="career-intro_bottom row">
          <div class="col-lg-4">
             <div class="career-intro_bottom_single">
                <h5>Diversity & inclusivity</h5>
                <p>
                   We understand that the world is a beautifully diverse place, and we celebrate the unique
                   perspectives and experiences that each individual brings to our team.
                </p>
             </div>
          </div>
          <div class="col-lg-4">
             <div class="career-intro_bottom_single">
                <h5>Flexibility & satisfaction</h5>
                <p>
                   To embrace work life balance and job satisfaction we prioritize freedom to unleash your
                   creativity while achieving personal fulfillment
                </p>
             </div>
          </div>
          <div class="col-lg-4">
             <div class="career-intro_bottom_single">
                <h5>Supportive culture</h5>
                <p>
                   We foster a culture of support and encouragement. At Rancon you'll thrive in an environment that
                   values collaboration, growth, and success.
                </p>
             </div>
          </div>
       </div>
    </div>
 </section>
 <!-- Career Intro Section End -->




  <!-- Gallery Section Start -->
  <section class="gallery-area pb-60">
    <div class="container">
       <div class="gallery-grid">
          <div class="gallery-single">
             <div class="gallery-single_image">
                <img src="{{asset('Client/assets/images/dynamic/g1.jpg')}}" alt="Gallery Image" />
             </div>
          </div>
          <div class="gallery-single">
             <div class="gallery-single_text">
                <h3>Life at Rancon</h3>
                <p>
                   We are proud of living our Values across our diverse operations and locations As a Group, we
                   value integrity, initiative, challenge convention, progression, and teamwork. We strive to be an
                   employer of choice and to create an environment where our people can fulfill their personal and
                   professional potential.
                </p>
             </div>
          </div>
          <div class="gallery-single">
             <div class="gallery-single_image">
                <img src="{{asset('Client/assets/images/dynamic/g2.jpg')}}" alt="Gallery Image" />
             </div>
          </div>
          <div class="gallery-single">
             <div class="gallery-single_image">
                <img src="{{asset('Client/assets/images/dynamic/g3.jpg')}}" alt="Gallery Image" />
             </div>
          </div>
          <div class="gallery-single">
             <div class="gallery-single_image">
                <img src="{{asset('Client/assets/images/dynamic/g4.jpg')}}" alt="Gallery Image" />
             </div>
          </div>
          <div class="gallery-single">
             <div class="gallery-single_image">
                <img src="{{asset('Client/assets/images/dynamic/g5.jpg')}}" alt="Gallery Image" />
             </div>
          </div>
          <div class="gallery-single">
             <div class="gallery-single_image">
                <img src="{{asset('Client/assets/images/dynamic/g6.jpg')}}" alt="Gallery Image" />
             </div>
          </div>
       </div>
    </div>
 </section>
 <!-- Gallery Section End -->



  <!-- Jobs Section Start -->
  <section class="job-area">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div class="section-title">
                <h2>Apply for Jobs</h2>
             </div>
          </div>
       </div>
       <form class="form" action="{{route('CareerPost')}}" method="POST" enctype="multipart/form-data">
        @csrf
          <div class="controls">
             <div class="row">
                <div class="col-lg-12 col-md-12">
                   <div class="form-group has-error has-danger">
                      <input id="form_name" type="text" name="name" placeholder="Full Name*" required="required" />
                   </div>
                </div>
                <div class="col-lg-12 col-md-12">
                   <div class="form-group has-error has-danger">
                      <input
                         id="form_email"
                         type="email"
                         name="email"
                         placeholder="Email Address*"
                         required="required"
                      />
                   </div>
                </div>
                <div class="col-lg-12 col-md-12">
                   <div class="form-group has-error has-danger">
                      <input
                         id="form_phone"
                         type="tel"
                         name="phone"
                         placeholder="Contact Number*"
                         pattern="[0-9]{11}"
                         title="Please enter a valid phone number in the format: XXXXXXXXXXX"
                         required="required"
                      />

                   </div>
                </div>
                <div class="col-lg-12 col-md-12">
                   <div class="form-group has-error has-danger">
                      <input id="form_linkedin" type="text" name="linkedin" placeholder="Linkedin Profile" />
                   </div>
                </div>
                <div class="col-lg-12 col-md-12">
                   <div class="form-group has-error has-danger">
                      <label class="form-label" for="experience"> Your Preferred Depertment </label>
                      <div class="form-radio-wrapper">
                         <div class="form-check">
                            <input
                               class="form-check-input check"
                               type="radio"
                               name="ex"
                               id="dep1"
                               value="Corporate"
                               checked
                            />
                            <label class="form-check-label" for="dep1"> Corporate </label>
                         </div>
                         <div class="form-check">
                            <input
                               class="form-check-input check"
                               type="radio"
                               name="ex"
                               id="dep2"
                               value="Marketing"
                            />
                            <label class="form-check-label" for="dep2"> Marketing </label>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="col-lg-12 col-md-12">
                   <div class="form-group has-error has-danger">
                      <label class="form-label" for="resume"> Resume </label>
                      <input
                         id="form_resume"
                         type="file"
                         name="resume"
                         placeholder="Choose file or drop here"
                         required="required"
                         onchange="validateFile(this)"
                      />

                   </div>
                </div>
                <div class="col-lg-12 col-md-12">
                   <div class="form-group has-error has-danger form-check pl-0">
                      <input class="check" type="checkbox" name="accecpt_condition" id="concent-check" required="required" />
                      <label class="form-check-label" for="concent-check">
                         I consent to the processing of my personal data for the purposes of this job application.
                      </label>
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
                    <input type="text" readonly class="form-control" value="{{@$first_number}}">
                   </div>
                 </div>

                 <div class="col-md-1">
                   
                      <span style="font-size:35px;color:black;padding-top:5px">+</span>
                   
                 </div>


                 <div class="col-md-2">
                    <div class="form-group">
                    <input type="text" readonly class="form-control" value="{{@$second_number}}">
                </div>
                 </div>

                 <div class="col-md-1">
                   
                    <span style="font-size:35px;color:black;padding-top:5px;font-weight:bold">=</span>
                 
               </div>

               <div class="col-md-3">
                <div class="form-group">
                <input type="number" id="right_ans" name="right_ans" class="form-control">
                </div>
             </div>

                <div class="col-md-12">
                   <button
                      type="button"
                      id="submitButton"
                      class="button g-recaptcha"
                     
                   >
                      Apply Now
                   </button>
                </div>
             </div>
          </div>
       </form>
    </div>
 </section>
 <!-- Jobs Section End -->

 
@section('footer')
<script>
    $(document).ready(function() {
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
    });
</script>

@endsection


  

        <!-- Banner Section Start -->
        <section class="banner-area pt-60 pb-60">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="section-title">
                        <h2>It’s not just a job, its a journey</h2>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12">
                     <div class="banner-image">
                        <img src="{{asset('Client/assets/images/dynamic/banner.jpg')}}" alt="Banner Image" />
                     </div>
                     <div class="banner-title">
                        <h2>Rancon is waiting for you!</h2>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- Banner Section End -->


    @endsection