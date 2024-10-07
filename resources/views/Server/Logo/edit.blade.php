@extends('Server.master')
@section('title') Logo Edit @endsection
@section('content')



<div class="container-fluid">

        <h3 class="text-black pb-3"><strong>Logo Edit</strong></h3>
<form action="{{route('LogoPost')}}" method="post" enctype="multipart/form-data">
@csrf

<input type="hidden" name="edit_id" value="{{@$edit->id}}">

<div class="card">
  <div class="card-body">
            <div class="row mg-b-25">
               
        

           

              <div class="col-lg-12 mb-3">
                <div class="form-group">
                  <label class="form-control-label" >Logo: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="file" name="logo"  placeholder="Reg Url">
                  <span style="color:red">Max Size: Width:160px,Height:47px</span>
                  <br>
                  <span>Old logo</span>
                  <br>
                  @if(isset($edit->logo))
                  <img style="width:100px" src="{{(@$edit->logo)?url('upload/Logo/'.@$edit->logo):''}}" alt="">
                  @endif
                  @error('logo')
                      <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
              </div><!-- col-4 -->



              <div class="col-lg-12 mb-3">
                <div class="form-group">
                  <label class="form-control-label" >Side Menu Logo: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="file" name="left_logo"  placeholder="Reg Url">
                  <span style="color:red">Max Size: Width:272px,Height:116px</span>
                  <br>
                  <span>Old Sidebar Menu logo</span>
                  <br>
                  @if(isset($edit->left_logo))
                  <img style="width:100px" src="{{(@$edit->left_logo)?url('upload/Logo/'.@$edit->left_logo):''}}" alt="">
                  @endif
                  @error('left_logo')
                      <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
              </div><!-- col-4 -->


              <div class="col-lg-12 mb-3">
                <div class="form-group">
                  <label class="form-control-label" >Footer Logo: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="file" name="footer_logo"  placeholder="Reg Url">
                  <span style="color:red">Max Size: Width:67px,Height:90px</span>
                  <br>
                  <span>Old FOOTER logo</span>
                  <br>
                  @if(isset($edit->footer_logo))
                  <img style="width:100px" src="{{(@$edit->footer_logo)?url('upload/Logo/'.@$edit->footer_logo):''}}" alt="">
                  @endif
                  @error('footer_logo')
                      <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
              </div><!-- col-4 -->



              <div class="col-lg-12 mb-3">
                <div class="form-group">
                  <label class="form-control-label" >Registration No: <span class="tx-danger">*</span></label>
                  <input type="text" class="form-control" name="registration_number" value="{{@$edit->registration_number}}">
                  @error('registration_number')
                      <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
              </div><!-- col-4 -->


              <div class="col-lg-12 mb-3">
                <div class="form-group">
                  <label class="form-control-label" >Description: <span class="tx-danger">*</span></label>
                 <textarea name="description" class="form-control ckeditor" id="" cols="30" rows="10">{!!@$edit->description!!}</textarea>
                  @error('des')
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



@endsection