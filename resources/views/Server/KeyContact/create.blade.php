@extends('Server.master')
@section('title') Key Contact Create | Saimum Chambers Admin   @endsection
@section('content')

<div class="container-fluid">
               <form action="{{route('VisaKeyContactPost')}}" method="POST"  enctype="multipart/form-data">
               @csrf
               <div class="row">
                  <div class="col-md-12">
                     <div class="card">
                        <div class="card-body">
                           <h4 class="card-title costom-card-title mb-30">Add Key Contact Person</h4>
                           
                              <div class="form-body">
                                 <div class="row">

                                    <div class="col-md-12">
                                       <div class="form-group mb-3">
                                          <label for="VideoTitle" class="costom-label">Name</label>
                                          <input
                                          id="VideoTitle"
                                          name="name"
                                          type="text"
                                          
                                          required
                                          class="form-control"
                                          placeholder="name "
                                          />
                                       </div>
                                    </div>
                                    
                                    <div class="col-md-12">
                                       <div class="form-group mb-3">
                                          <label for="VideoTitle" class="costom-label">Email</label>
                                          <input
                                          id="VideoTitle"
                                          name="email"
                                          type="email"
                                          
                                          required
                                          class="form-control"
                                          placeholder="enter email"
                                          />
                                       </div>
                                    </div>

                                    <div class="col-md-12">
                                       <div class="form-group mb-3">
                                          <label for="VideoTitle" class="costom-label">Designation</label>
                                          <input
                                          id="VideoTitle"
                                          name="designation"
                                          type="text"
                                          
                                          required
                                          class="form-control"
                                          placeholder="designation"
                                          />
                                       </div>
                                    </div>


                                    <div class="col-md-12">
                                       <div class="form-group mb-3">
                                          <label for="VideoTitle" class="costom-label">Url/Link</label>
                                          <input
                                          id="VideoTitle"
                                          name="url"
                                          type="text"
                                      
                                          class="form-control"
                                          placeholder="url"
                                          />
                                       </div>
                                    </div>


                                    <div class="col-md-12">
                                       <div class="form-group mb-3">
                                          <label for="VideoTitle" class="costom-label">Image <span style="color:red">Max Size: Width:300px;Height:300px</span> </label>
                                          <input
                                          id="VideoTitle"
                                          name="image"
                                          type="file"
                                          
                                          required
                                          class="form-control"
                                          placeholder="image"
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