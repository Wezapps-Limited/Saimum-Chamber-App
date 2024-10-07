@extends('Server.master')
@section('title') Testimonial Text Edit @endsection
@section('content')


<div class="container-fluid">

    <h3 class="text-black pb-3"><strong>Testimonial Text Edit</strong></h3>
  
<form action="{{ route('TestimonialTextUpdate') }}" method="post" enctype="multipart/form-data">
@csrf



        
<div class="card">
    <div class="card-body">
            <div class="row mg-b-25">
              
            
              <div class="col-lg-12 mb-3">
                <div class="form-group">
                  <label class="form-control-label" >Short: <span class="tx-danger">*</span></label>
                  <textarea type="text" class="form-control ckeditor @error('short') is-invalid @enderror" name="short" id="imgInp" placeholder="Enter  short">{{@$edit->short}}</textarea>
                  @error('short')
                      <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
              </div><!-- col-4 -->

               
             



            
         
            </div><!-- row -->



            <div class="form-layout-footer">
              <button type="submit" class="btn btn-info">Update Form</button>
              <button type="button" class="btn btn-secondary">Cancel</button>
            </div><!-- form-layout-footer -->
          </div>
          </div>

          </form>


 </div>

 @section('footer')


@endsection


@endsection

