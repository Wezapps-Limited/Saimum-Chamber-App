@extends('Server.master')
@section('title') Visa Edit | Saimum Chambers Admin @endsection
@section('content')

<div class="container-fluid">
               <form action="{{route('VisaUpdate')}}" method="POST"  enctype="multipart/form-data">
               @csrf
               <input type="hidden" value="{{@$edit->id}}" name="edit_id">
               <div class="row">
                  <div class="col-md-12">
                     <div class="card">
                        <div class="card-body">
                           <h4 class="card-title costom-card-title mb-30">Edit Visa</h4>
                           
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
                                          name="description"
                                          type="text"
                                          
                                          required
                                          class="form-control ckeditor"
                                          placeholder="description"
                                          >{!!@$edit->description!!}</textarea>
                                       </div>
                                    </div>


                                    <div class="col-md-12">
                                       <div class="form-group mb-3">
                                          <label for="VideoTitle" class="costom-label">Single Page Bg Color</label>
                                           <input type="color" name="bg_color" value="{{@$edit->bg_color}}"   class="form-control" placeholder="">
                                       </div>
                                    </div>

                                    <div class="col-md-12">
                                       <div class="form-group mb-3">
                                          <label for="VideoTitle" class="costom-label">Type</label>
                                           <select name="type" class="form-control" id="">
                                             <option value="1" {{(@$edit->type=="1")?"selected":""}}>Business and Worker Visa</option>
                                             <option value="2" {{(@$edit->type=="2")?"selected":""}}>Private Visa</option>
                                             <option value="3" {{(@$edit->type=="3")?"selected":""}}>Application Packages</option>
                                           </select>
                                       </div>
                                    </div>
                                    
                                    
                                    
                                <div class="col-md-12">
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