@extends('Server.master')
@section('title') Social Icon Create | Saimum Chambers Admin   @endsection
@section('content')

<div class="container-fluid">
               <form action="{{route('SocialIconPost')}}" method="POST"  enctype="multipart/form-data">
               @csrf
               <div class="row">
                  <div class="col-md-12">
                     <div class="card">
                        <div class="card-body">
                           <h4 class="card-title costom-card-title mb-30">Add New Icon</h4>
                           
                              <div class="form-body">
                                 <div class="row">

                                    <div class="col-md-12">
                                       <div class="form-group mb-3">
                                          <label for="VideoTitle" class="costom-label">Icon Name</label>
                                          <input
                                          id="VideoTitle"
                                          name="icon"
                                          type="text"
                                          
                                          required
                                          class="form-control"
                                          placeholder="icon"
                                          />
                                       </div>
                                    </div>
                                    
                                    <div class="col-md-12">
                                       <div class="form-group mb-3">
                                          <label for="VideoTitle" class="costom-label">Link/Url</label>
                                          <input
                                          id="VideoTitle"
                                          name="url"
                                          type="text"
                                          
                                          required
                                          class="form-control"
                                          placeholder="url"
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