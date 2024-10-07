@extends('Server.master')
@section('title') Why Choose Edit | Saimum Chambers Admin @endsection
@section('content')

<div class="container-fluid">
               <form action="{{route('WhyChoosePost')}}" method="POST"  enctype="multipart/form-data">
               @csrf
               <input type="hidden" value="{{@$edit->id}}" name="edit_id">
               <div class="row">
                  <div class="col-md-12">
                     <div class="card">
                        <div class="card-body">
                           <h4 class="card-title costom-card-title mb-30">Edit Why Choose</h4>
                           
                              <div class="form-body">
                                 <div class="row">

                                    <div class="col-md-12">
                                       <div class="form-group mb-3">
                                          <label for="VideoTitle" class="costom-label">Title</label>
                                          <input
                                          id="VideoTitle"
                                          name="title"
                                          value="{{@$edit->title}}"
                                          type="text"
                                          
                                          required
                                          class="form-control"
                                          placeholder=" title"
                                          />
                                       </div>
                                    </div>
                                    
                                    <div class="col-md-12">
                                       <div class="form-group mb-3">
                                          <label for="VideoTitle" class="costom-label">Description</label>
                                          <textarea
                                          id="VideoTitle"
                                          name="short"
                                          type="text"
                                          
                                          required
                                          class="form-control ckeditor"
                                          placeholder="Description"
                                          >{!!@$edit->short!!}</textarea>
                                       </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                           <label for="VideoTitle" class="costom-label">Color</label>
                                           <input
                                           id="VideoTitle"
                                           name="color"
                                           value="{{@$edit->color}}"
                                           type="color"
                                           
                                           required
                                           class="form-control"
                                           placeholder=" color"
                                           />
                                        </div>
                                     </div>


                                     
                                    <div class="col-md-6">
                                       <div class="form-group mb-3">
                                          <label for="VideoTitle" class="costom-label">Circle Color</label>
                                          <input
                                          id="VideoTitle"
                                          name="circle_color"
                                          value="{{@$edit->circle_color}}"
                                          type="color"
                                          
                                          required
                                          class="form-control"
                                          placeholder=" color"
                                          />
                                       </div>
                                    </div>

                                
                                    
                                 </div>
                                 
                                
                              </div>
                              <div class="form-actions mt-5">
                                 <div class="text-start">
                                    <button type="submit" class="btn btn-info">Submit</button>
                                    
                                 </div>
                              </div>
                           
                        </div>
                     </div>
                  </div>
               </div>
               </form>
               
               
            </div>
          

 

@endsection