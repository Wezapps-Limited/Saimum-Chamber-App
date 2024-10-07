@extends('Server.master')
@section('title') Contact Us Edit @endsection
@section('content')


<div class="container-fluid">

  
  <h3 class="text-black pb-3"><strong>Contact Us Edit</strong></h3>

<form action="{{route('ContactUsPost')}}" method="post" enctype="multipart/form-data">
@csrf

<input type="hidden" name="edit_id" value="{{@$edit->id}}">
<div class="card">
  <div class="card-body">
    <div class="form-layout form-layout-1">
            <div class="row mg-b-25">

            <div class="col-lg-12 mb-3">
                <div class="form-group">
                  <label class="form-control-label" style="font-weight: bold;">Telephone: <span class="tx-danger"></span></label>
                   <input type="text" class="form-control" name="mobile_one" value="{{@$edit->mobile_one}}" placeholder="Enter Number">
                  @error('mobile_one')
                      <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
              </div><!-- col-4 -->


              <div class="col-lg-12 mb-3">
                <div class="form-group">
                  <label class="form-control-label" style="font-weight: bold;">Telephone Two: <span class="tx-danger"></span></label>
                   <input type="text" class="form-control" name="mobile_two" value="{{@$edit->mobile_two}}" placeholder="Enter Number">
                  @error('mobile_two')
                      <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
              </div><!-- col-4 -->


              
              <div class="col-lg-12 mb-3">
                <div class="form-group">
                  <label class="form-control-label" style="font-weight: bold;">Fax: <span class="tx-danger"></span></label>
                   <input type="text" class="form-control" name="fax" value="{{@$edit->fax}}" placeholder="Enter fax">
                  @error('fax')
                      <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
              </div><!-- col-4 -->

              
              <div class="col-lg-12 mb-3">
                <div class="form-group">
                  <label class="form-control-label" style="font-weight: bold;">Mobile: <span class="tx-danger"></span></label>
                   <input type="text" class="form-control" name="tel" value="{{@$edit->tel}}" placeholder="Enter mobile">
                  @error('tel')
                      <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-12 mb-3">
                <div class="form-group">
                  <label class="form-control-label" style="font-weight: bold;">Email: <span class="tx-danger"></span></label>
                   <input type="text" class="form-control" name="email_one" value="{{@$edit->email_one}}" placeholder="Enter email">
                  @error('email_one')
                      <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
              </div><!-- col-4 -->


              
              <div class="col-lg-12 mb-3">
                <div class="form-group">
                  <label class="form-control-label" style="font-weight: bold;">Google Map: <span class="tx-danger"></span></label>
                   <input type="text" class="form-control" name="email_two" value="{{@$edit->email_two}}" placeholder="Enter map">
                  @error('email_two')
                      <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
              </div><!-- col-4 -->
               
        
              <div class="col-lg-12 mb-3">
                <div class="form-group">
                  <label class="form-control-label" style="font-weight: bold;">Office Address: <span class="tx-danger"></span></label>
                 <textarea name="office_address" class="form-control" id="" cols="30" rows="10">{!!@$edit->office_address!!}</textarea>
                  @error('office_address')
                      <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
              </div><!-- col-4 -->

              

            </div><!-- row -->



            <div class="form-layout-footer mb-3">
              <button type="submit" class="btn btn-info">Update Form</button>
              <button type="button" class="btn btn-secondary">Cancel</button>
            </div><!-- form-layout-footer -->
          </div>
          </div>
          </div>

          </form>


 </div>



@endsection