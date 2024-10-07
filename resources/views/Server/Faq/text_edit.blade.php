@extends('Server.master')
@section('title') Faq Text Edit @endsection
@section('content')


<div class="container-fluid">

    <h3 class="text-black pb-3"><strong>Faq Text Edit</strong></h3>
  
<form action="{{ route('FaqTextUpdate') }}" method="post" enctype="multipart/form-data">
@csrf



        
<div class="card">
    <div class="card-body">
            <div class="row mg-b-25">
              
            
              {{-- <div class="col-md-12">
                <div class="form-body">
                          <div class="form-group mb-3">
                             <label for="metaDesc" class="costom-label">Image* </label>
                             <span class="badge badge-soft-info">Ratio 1:1 (2000 x 2000 px)</span>

                             <div class="input-group mb-3 flex-nowrap">
                                <div class="custom-file w-100">
                                   <input class="form-control" type="file" id="news-banner-input" name="image">
                                </div>
                                <button id="upload-button" class="btn btn-info" type="button">
                                   Browse
                                </button>
                             </div>
                          </div>

                             
                </div>

             </div> --}}


             <div class="col-md-12">
               <div class="form-body">
                         <div class="form-group mb-3">
                            <label for="metaDesc" class="costom-label">Title</label>
                           
                            <div class="input-group mb-3 flex-nowrap">
                               <div class="custom-file w-100">
                                  <input class="form-control" type="text" id="news-banner-input" name="title"  value="{{@$edit->title}}" placeholder="Enter title">
                               </div>
                              
                            </div>
                         </div>

                            
               </div>

            </div>



            
            <div class="col-md-12">
               <div class="form-body">
                         <div class="form-group mb-3">
                            <label for="metaDesc" class="costom-label">Short</label>
                           
                            <div class="input-group mb-3 flex-nowrap">
                               <div class="custom-file w-100">
                                  <input class="form-control" type="text" id="news-banner-input" name="short"  value="{{@$edit->short}}" placeholder="Enter title">
                               </div>
                              
                            </div>
                         </div>

                            
               </div>

            </div>





{{-- 
             <div class="col-md-12">
                      <div class="form-group mb-3">
                        @if($edit->image!=null)
                         <img id="news-banner-image" @if(@$edit->image==null) src="{{asset('Server/assets/images/demo-image.jpg')}}"  @else src="{{asset('upload/TestimonialText/'.@$edit->image)}}" @endif class="preview-image" alt="Profile Image">
                          @else
                         <img id="news-banner-image" src="{{asset('Server/assets/images/demo-image.jpg')}}" class="preview-image" alt="Profile Image">
                          @endif
                        </div>
             </div>

                --}}
             



            
         
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

