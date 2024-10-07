@extends('Server.master')
@section('title') Blog Edit  @endsection
@section('content')

<div class="container-fluid">
    <h3 class="text-black pb-3"><strong>Edit Blog</strong></h3>
    <form action="{{route('BlogUpdate')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" value="{{@$edit->id}}" name="edit_id">
       <div class="row">
          <!-- Blog Info -->
          <div class="col-md-12">
             <div class="card">
                <div class="card-body">
                   
                      <div class="form-body">
                      <div class="form-group mb-3">
                                  <label for="blogTitle" class="costom-label">Blog Title </label>
                                  <input
                                  id="blogTitle"
                                  name="title"
                                  type="text"
                                  value="{{@$edit->title}}"
                                  
                                  required
                                  class="form-control custom-shadow bg-white"
                                  placeholder="New Blog Title"
                                  />
                               </div>


                               <div class="form-group mb-3">
                                 <label for="blogTitle" class="costom-label">Short</label>
                                 <input
                                 id="blogTitle"
                                 name="short"
                                 type="text"
                                 value="{{@$edit->short}}"
                                 required
                                 class="form-control custom-shadow bg-white"
                                 placeholder="Blog short"
                                 />
                              </div>
                               
                               
                                <div class="form-group mb-3">
                                  <label for="blogTitle" class="costom-label">Blog Date</label>
                                  <input
                                  id="blogDate"
                                  name="blog_date"
                                  type="date"
                                  value="{{date('Y-m-d',strtotime(@$edit->blog_date))}}"
                                  
                                  required
                                  class="form-control custom-shadow bg-white"
                                  placeholder="New Blog"
                                  />
                               </div>
                               
                               
                               <div class="form-group mb-3">
                                  <label for="blogDesc" class="costom-label">Description</label>
                                  <textarea id="editor" class="form-control custom-shadow bg-white ckeditor" rows="3"
                                  name="description" required placeholder="Text Here...">{!!@$edit->description!!}</textarea>
                               </div>
                               <div class="form-group mb-3">
                                        <label for="metaDesc" class="costom-label">Blog Cover Photo </label>
                                        <span class="badge badge-soft-info" style="color:red">Ratio 1:1 (370 x 226 px)</span>
                            
                                        <div class="input-group mb-3 flex-nowrap">
                                           <div class="custom-file w-100">
                                              <input class="form-control" type="file" id="blog-banner-input" name="image">
                                           </div>
                                           <button id="upload-button" class="btn btn-info" type="button">
                                              Browse
                                           </button>
                                        </div>
                               </div>
                               <div class="form-group mb-3">
                              
                               @if($edit->image!=null)
                               <img id="blog-banner-image" src="{{asset('upload/BlogManage/'.@$edit->image)}}"  class="preview-image" alt="Profile Image">
                                @else
                               <img id="blog-banner-image" src="{{asset('Server/assets/images/image-not-available.png')}}" class="preview-image" alt="Profile Image">
                                @endif
                           
                            </div> 
                            
                            
                             <div class="form-group mb-3">
                                  <label for="PortfolioTitle" class="costom-label">Meta Title</label>
                                  <input
                                  id="PortfolioTitle"
                                  name="meta_title"
                                  type="text"
                                  value="{{@$edit->meta_title}}"
                                  required
                                  class="form-control custom-shadow bg-white"
                                  placeholder="meta_title "
                                  />
                               </div>
                               
                               
                                <div class="form-group mb-3">
                                  <label for="blogDesc" class="costom-label">Meta Description</label>
                                  <textarea id="editor" class="form-control custom-shadow bg-white" rows="3"
                                  name="meta_des" required placeholder="Text Here...">{!!@$edit->meta_des!!}</textarea>
                               </div>
                            
                            
                      </div>
                      
                   
                </div>
             </div>
          </div>

          <!-- Submit Button -->
          <div class="col-md-12">
             <div class="form-actions">
                         <div class="text-end">
                            <button type="button" class="btn btn-light">Reset</button>
                            <button type="submit" class="btn btn-info">Submit</button>
                            
                         </div>
                      </div>
          </div>
       </div>
    </form>
    
    
 </div>

 @section('footer')
 <script>


    const fileInput = document.getElementById('blog-banner-input');
    const image = document.getElementById('blog-banner-image');
     const uploadButton = document.getElementById('upload-button');

    // Listen for changes in the file input element
    fileInput.addEventListener('change', function() {
       const selectedFile = fileInput.files[0];
       if (selectedFile) {
          const reader = new FileReader();
          reader.addEventListener('load', function() {
          image.src = reader.result;
          });

          // Read the selected file as a data URL
          reader.readAsDataURL(selectedFile);
       }
    });

    // Listen for clicks on the upload button
    uploadButton.addEventListener('click', function() {
       fileInput.click();
    });


       
 </script>
 @endsection


@endsection