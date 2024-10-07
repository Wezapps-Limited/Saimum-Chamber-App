@extends('Server.master')
@section('title') Video Create | Wezapps Admin  @endsection
@section('content')

<div class="container-fluid">
               <form action="{{route('VideoPost')}}" method="POST"  enctype="multipart/form-data">
               @csrf
               <div class="row">
                  <div class="col-md-12">
                     <div class="card">
                        <div class="card-body">
                           <h4 class="card-title costom-card-title mb-30">Add New Image</h4>
                           
                              <div class="form-body">
                                 <div class="row">

                                    <div class="col-md-12">
                                       <div class="form-group mb-3">
                                          <label for="VideoTitle" class="costom-label">Video Title</label>
                                          <input
                                          id="VideoTitle"
                                          name="title"
                                          type="text"
                                          
                                          required
                                          class="form-control"
                                          placeholder="title"
                                          />
                                       </div>
                                    </div>
                                    
                                    <div class="col-md-12">
                                       <div class="form-group mb-3">
                                          <label for="VideoTitle" class="costom-label">Video Link</label>
                                          <input
                                          id="VideoTitle"
                                          name="video_link"
                                          type="text"
                                          
                                          required
                                          class="form-control"
                                          placeholder="link"
                                          />
                                       </div>
                                    </div>
                                    <div class="col-md-12">
                                       <div class="form-group mb-3">
                                          <label for="VideoTitle" class="costom-label">Sequence</label>
                                          <input
                                          id="VideoTitle"
                                          name="sequence"
                                          type="number"
                                          
                                          required
                                          class="form-control"
                                          placeholder="sequence"
                                          />
                                       </div>
                                    </div>
                                    <div class="col-md-12">
                                       <label for="imageUpload" class="costom-label">Image Upload</label>
                                       <div class="input-group mb-3 flex-nowrap">
                                          <div class="custom-file w-100">
                                             <input class="form-control" type="file" id="gallery-image-input" name="image">
                                          </div>
                                          <button id="upload-button" class="btn btn-hover" type="button">
                                             Upload
                                          </button>
                                       </div>
                                    </div>
                                    <div class="col-md-12">
                                       <div class="form-group mb-3">
                                          <label class="costom-label">Selected Image</label>
                                          <img id="gallery-image" src="{{asset('Server/assets/images/image-not-available.png')}}" class="preview-image" alt="Profile Image">
                                       </div>
                                    </div>
                                   
                                 </div>
                                 
                                
                              </div>
                              <div class="form-actions mt-5">
                                 <div class="text-start">
                                    <button type="submit" class="btn btn-hover">Submit</button>
                                    
                                 </div>
                              </div>
                           
                        </div>
                     </div>
                  </div>
               </div>
               </form>
               
               
            </div>
          

        
            @section('footer')

            <script>
         // Get the file input element and the image tag element
         const fileInput = document.getElementById('gallery-image-input');
         const image = document.getElementById('gallery-image');
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

         // ck editor
         ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
      </script>
            @endsection

@endsection