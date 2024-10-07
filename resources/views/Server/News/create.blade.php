@extends('Server.master')
@section('title') News Create  @endsection
@section('content')

<div class="container-fluid">
    <h3 class="text-black pb-3"><strong>Add New News</strong></h3>
    <form action="{{route('NewsPost')}}" method="POST" enctype="multipart/form-data">
        @csrf
       <div class="row">
          <!-- News Info -->
          <div class="col-md-12">
             <div class="card">
                <div class="card-body">
                   
                      <div class="form-body">
                      <div class="form-group mb-3">
                                  <label for="NewsTitle" class="costom-label">News Title</label>
                                  <input
                                  id="NewsTitle"
                                  name="title"
                                  type="text"
                                  
                                  required
                                  class="form-control custom-shadow bg-white"
                                  placeholder="New News Title"
                                  />
                               </div>
                               
                               
                               
                               <div class="form-group mb-3">
                                  <label for="blogTitle" class="costom-label">News Date</label>
                                  <input
                                  id="NewwTitle"
                                  name="news_date"
                                  type="date"
                                  
                                  required
                                  class="form-control custom-shadow bg-white"
                                  placeholder="New Blog Title"
                                  />
                               </div>
                               
                               
                               <div class="form-group mb-3">
                                  <label for="NewsDesc" class="costom-label">Description</label>
                                  <textarea id="editor" class="form-control custom-shadow bg-white ckeditor" rows="3"
                                  name="description" required placeholder="Text Here..."></textarea>
                               </div>
                               <div class="form-group mb-3">
                                        <label for="metaDesc" class="costom-label">News Cover Photo </label>
                                        <span class="badge badge-soft-info">Ratio 1:1 (1980 x 500 px)</span>
                            
                                        <div class="input-group mb-3 flex-nowrap">
                                           <div class="custom-file w-100">
                                              <input class="form-control" type="file" id="News-banner-input" name="image">
                                           </div>
                                           <button id="upload-button" class="btn btn-info" type="button">
                                              Browse
                                           </button>
                                        </div>
                               </div>
                               <div class="form-group mb-3">
                               <img id="News-banner-image" src="{{asset('Server/assets/images/image-not-available.png')}}" class="preview-image" alt="Profile Image">
                            </div>   
                            
                            
                              <div class="form-group mb-3">
                                  <label for="PortfolioTitle" class="costom-label">Meta Title</label>
                                  <input
                                  id="PortfolioTitle"
                                  name="meta_title"
                                  type="text"
                                  required
                                  class="form-control custom-shadow bg-white"
                                  placeholder="meta_title "
                                  />
                               </div>
                               
                               
                                <div class="form-group mb-3">
                                  <label for="blogDesc" class="costom-label">Meta Description</label>
                                  <textarea id="editor" class="form-control custom-shadow bg-white ckeditor" rows="3"
                                  name="meta_des" required placeholder="Text Here..."></textarea>
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

 
    const fileInput = document.getElementById('News-banner-input');
    const image = document.getElementById('News-banner-image');
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