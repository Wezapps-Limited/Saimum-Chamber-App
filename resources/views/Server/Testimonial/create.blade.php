@extends('Server.master')
@section('title') Testimonial Create @endsection
@section('content')

<div class="container-fluid">
   
        <h3 class="text-black pb-3"><strong>Testimonial Create</strong></h3>
<form action="{{route('TestimonialStore')}}" method="post" enctype="multipart/form-data">
@csrf

    
<div class="card">
  <div class="card-body">
            <div class="row mg-b-25">
              
              <div class="col-lg-12 mb-3">
                <div class="form-group">
                  <label class="form-control-label">Name: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="name"  placeholder="name">
                  @error('name')
                      <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
              </div><!-- col-4 -->

               
              <div class="col-lg-12 mb-3">
                <div class="form-group">
                  <label class="form-control-label" >Short: <span class="tx-danger">*</span></label>
                  <textarea type="text" class="form-control @error('short') is-invalid @enderror" name="short" id="imgInp" placeholder="Enter  short"> </textarea>
                  @error('short')
                      <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
              </div><!-- col-4 -->

               
              <div class="col-lg-12 mb-3">
                <div class="form-group">
                  <label class="form-control-label" >Descrption: <span class="tx-danger">*</span></label>
                  <textarea type="text" class="form-control ckeditor @error('description') is-invalid @enderror" name="description" id="imgInp" placeholder="Enter  title"> </textarea>
                  @error('description')
                      <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
              </div><!-- col-4 -->




              <div class="col-lg-12 mb-3">
                <div class="form-group">
                  <label class="form-control-label" >Image: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="file" name="image"  placeholder="short">
                  <span style="color:red">Max Size: Width:73px, Height:73px</span>
                
                  @error('image')
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


<script>
    $(document).on('click','#mega',function(){


        if($(this).prop("checked") == true){

            // alert('ok');

            $('.singlse').css({
                display:'none'
            })
        }
        else if($(this).prop("checked") == false){
            $('.singlse').css({
                display:''
            })
        }


    })



    $(document).on('click','#single',function(){


        if($(this).prop("checked") == true){

            $('.mega').css({
                display:'none'
            })

            $('.single').css({
                display:''
            })
        }
        else if($(this).prop("checked") == false){
            $('.mega').css({
                display:''
            })

            $('.single').css({
                display:'none'
            })
        }


    })

</script>




@endsection

@endsection
