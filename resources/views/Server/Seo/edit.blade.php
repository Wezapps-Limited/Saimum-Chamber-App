@extends('Server.master')
@section('title') Seo Edit @endsection
@section('content')

<style type="text/css">
	.form-group{
		margin-bottom: 13px !important;
	}

  .payment_input{
    margin-left:10px;
    display:none;
    width: 139px;
    height: 30px;
  }
</style>

<div class="br-section-wrapper">
        <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10" style="margin-bottom:40px">Seo Edit </h6>

<form action="{{route('SeoToolPost')}}" method="post" enctype="multipart/form-data">
@csrf

<input type="hidden" name="edit_id" value="{{@$edit->id}}">

    <div class="form-layout form-layout-1">
            <div class="row mg-b-25">

            <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-control-label" style="font-weight: bold;">Meta Title: <span class="tx-danger">*</span></label>
                   <input type="text" class="form-control" name="meta_title" value="{{@$edit->meta_title}}" placeholder="meta_title">
                  @error('meta_title')
                      <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
              </div><!-- col-4 -->


               
        
              <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-control-label" style="font-weight: bold;">Meta Description: <span class="tx-danger">*</span></label>
                 <textarea name="meta_des" class="form-control" id="" cols="30" rows="10">{!!@$edit->meta_des!!}</textarea>
                  @error('meta_des')
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

          </form>


 </div>



@endsection