@extends('Server.master')
@section('title') Slider Edit | Saimum Chambers Admin @endsection
@section('content')

<div class="container-fluid">
               <form action="{{route('SliderUpdate')}}" method="POST"  enctype="multipart/form-data">
               @csrf
               <input type="hidden" value="{{@$edit->id}}" name="edit_id">
               <div class="row">
                  <div class="col-md-12">
                     <div class="card">
                        <div class="card-body">
                           <h4 class="card-title costom-card-title mb-30">Edit Slider</h4>
                           
                              <div class="form-body">
                                 <div class="row">

                                    <div class="col-md-12">
                                       <div class="form-group mb-3">
                                          <label for="VideoTitle" class="costom-label">Slider Title</label>
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
                                          <label for="VideoTitle" class="costom-label">Short Description</label>
                                          <input
                                          id="VideoTitle"
                                          name="short sescription"
                                          value="{{@$edit->short}}"
                                          type="text"
                                          
                                          required
                                          class="form-control"
                                          placeholder="short"
                                          />
                                       </div>
                                    </div>


                                    
                                    <div class="col-md-6">
                                       <div class="form-group mb-3">
                                          <label for="VideoTitle" class="costom-label">Button 1 name</label>
                                          <input
                                          id="VideoTitle"
                                          name="book_meeting_link"
                                          type="text"
                                          value="{{@$edit->book_meeting_link}}"
                                          required
                                          class="form-control"
                                          placeholder="Button 1 name"
                                          />
                                       </div>
                                    </div>
                                    
                                    
                                     <div class="col-md-6">
                                       <div class="form-group mb-3">
                                          <label for="VideoTitle" class="costom-label">Button 1 Link</label>
                                          <input
                                          id="VideoTitle"
                                          name="book_meeting_link_url"
                                          type="text"
                                          value="{{@$edit->book_meeting_link_url}}"
                                          required
                                          class="form-control"
                                          placeholder="Button 1 Link"
                                          />
                                       </div>
                                    </div>


                                    <div class="col-md-6">
                                       <div class="form-group mb-3">
                                          <label for="VideoTitle" class="costom-label">Button 2 name</label>
                                          <input
                                          id="VideoTitle"
                                          name="contact_link"
                                          type="text"
                                          value="{{@$edit->contact_link}}"
                                          required
                                          class="form-control"
                                          placeholder="Button 2 name"
                                          />
                                       </div>
                                    </div>
                                    
                                    
                                    
                                    <div class="col-md-6">
                                       <div class="form-group mb-3">
                                          <label for="VideoTitle" class="costom-label">Button 2 link</label>
                                          <input
                                          id="VideoTitle"
                                          name="contact_link_url"
                                          type="text"
                                          value="{{@$edit->contact_link_url}}"
                                          required
                                          class="form-control"
                                          placeholder="Button 2 link"
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