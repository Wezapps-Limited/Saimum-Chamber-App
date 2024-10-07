@extends('Server.master')
@section('title') About Us Edit @endsection
@section('content')



<div class="container-fluid">

        <h3 class="text-black pb-3"><strong>About Us Edit</strong></h3>
<form action="{{route('AboutUsPost')}}" method="post" enctype="multipart/form-data">
@csrf

<input type="hidden" name="edit_id" value="{{@$edit->id}}">

<div class="card">
  <div class="card-body">
            <div class="row mg-b-25">

              <div class="col-lg-6 mb-3">
                <div class="form-group">
                  <label class="form-control-label" >Title: <span class="tx-danger">*</span></label>
                  <input type="text" class="form-control" name="title" value="{{@$edit->title}}" placeholder="Enter title">
                  @error('title')
                      <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
              </div><!-- col-4 -->

              
              <div class="col-lg-6 mb-3">
                <div class="form-group">
                  <label class="form-control-label" >Short Title: <span class="tx-danger">*</span></label>
                  <input type="text" class="form-control" name="short" value="{{@$edit->short}}" placeholder="Enter short title">
                  @error('short')
                      <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
              </div><!-- col-4 -->



              
              <div class="col-lg-12 mb-3">
                <div class="form-group">
                  <label class="form-control-label" >Our Story: <span class="tx-danger">*</span></label>
                  <input type="text" class="form-control" name="story" value="{{@$edit->story}}" placeholder="Enter story">
                  @error('story')
                      <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
              </div><!-- col-4 -->
               
              
             
        
              <div class="col-lg-12 mb-3">
                <div class="form-group">
                  <label class="form-control-label" >Story Short: <span class="tx-danger">*</span></label>
                 <textarea name="story_text" class="form-control ckeditor" id="" cols="30" rows="10">{!!@$edit->story_text!!}</textarea>
                  @error('story_text')
                      <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-12 mb-3 mt-2">
                <div class="form-group">
                  <label class="form-control-label" >Our mission: <span class="tx-danger">*</span></label>
                  <input type="text" class="form-control" name="mission" value="{{@$edit->mission}}" placeholder="Enter mission">
                  @error('mission')
                      <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
              </div><!-- col-4 -->
               
              
             
        
              <div class="col-lg-12 mb-3">
                <div class="form-group">
                  <label class="form-control-label" >Our mission Short: <span class="tx-danger">*</span></label>
                 <textarea name="mission_short" class="form-control ckeditor" id="" cols="30" rows="10">{!!@$edit->mission_short!!}</textarea>
                  @error('mission_short')
                      <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-12 mb-3 mt-2">
                <div class="form-group">
                  <label class="form-control-label" >Our values: <span class="tx-danger">*</span></label>
                  <input type="text" class="form-control" name="value" value="{{@$edit->value}}" placeholder="Enter value">
                  @error('value')
                      <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
              </div><!-- col-4 -->
               
              
             
        
              <div class="col-lg-12 mb-3">
                <div class="form-group">
                  <label class="form-control-label" >Our values Short: <span class="tx-danger">*</span></label>
                 <textarea name="value_short" class="form-control ckeditor" id="" cols="30" rows="10">{!!@$edit->value_short!!}</textarea>
                  @error('value_short')
                      <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
              </div><!-- col-4 -->



              <div class="col-lg-3 mb-3 mt-2">
                <div class="form-group">
                  <label class="form-control-label" >Title: <span class="tx-danger">*</span></label>
                  <input type="text" class="form-control" name="smt_one" value="{{@$edit->smt_one}}" placeholder="Enter smt_one">
                  @error('smt_one')
                      <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-3 mb-3 mt-2">
                <div class="form-group">
                  <label class="form-control-label" >Title: <span class="tx-danger">*</span></label>
                  <input type="text" class="form-control" name="smt_one_color" value="{{@$edit->smt_one_color}}" placeholder="Enter smt_one">
                  @error('smt_one_color')
                      <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-3 mb-3 mt-2">
                <div class="form-group">
                  <label class="form-control-label" >Title: <span class="tx-danger">*</span></label>
                  <input type="text" class="form-control" name="smt_two" value="{{@$edit->smt_two}}" placeholder="Enter smt_one">
                  @error('smt_two')
                      <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-3 mb-3 mt-2">
                <div class="form-group">
                  <label class="form-control-label" >Title: <span class="tx-danger">*</span></label>
                  <input type="text" class="form-control" name="smt_two_color" value="{{@$edit->smt_two_color}}" placeholder="Enter smt_one">
                  @error('smt_two_color')
                      <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
              </div><!-- col-4 -->
               

              <div class="col-lg-12 mb-3">
                <div class="form-group">
                  <label class="form-control-label" >Description: <span class="tx-danger">*</span></label>
                 <textarea name="description" class="form-control ckeditor" id="" cols="30" rows="10">{!!@$edit->description!!}</textarea>
                  @error('description')
                      <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-12 mb-3">
                <div class="form-group">
                  <label class="form-control-label" >Image: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="file" name="image"  placeholder="Reg Url">
                  <span style="color:red">Max Size: Width:451px,Height:451px</span>
                  <br>
                  <span>Old logo</span>
                  <br>
                  @if(isset($edit->image))
                  <img style="width:100px" src="{{(@$edit->image)?url('upload/AboutUs/'.@$edit->image):''}}" alt="">
                  @endif
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



@endsection