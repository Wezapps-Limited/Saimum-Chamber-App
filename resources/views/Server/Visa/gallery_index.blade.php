@extends('Server.master')
@section('title') Gallery List | Saimum Chambers Admin  @endsection
@section('content')

<div class="container-fluid">
    <form action="{{route('VisaMultiGalleryUpdate')}}" method="POST"  enctype="multipart/form-data">
    @csrf
    {{-- <input type="hidden" value="{{@$edit->id}}" name="edit_id"> --}}
    <div class="row">
       <div class="col-md-12">
          <div class="card">
             <div class="card-body">
                <h4 class="card-title costom-card-title mb-30">Gallery Edit</h4>
                
                   <div class="form-body">
                      <div class="row">

                         <div class="col-md-12">
                            <div class="form-group mb-3">
                               <label for="VideoTitle" class="costom-label">Image ( <span style="color:red">Max Size: Width:600px,Height:400px</span> )</label>
                               <input
                               id="VideoTitle"
                               name="image[]"
                              
                               type="file"
                               multiple
                               
                               required
                               class="form-control"
                               placeholder=" title"
                               />
                               
                            </div>
                            <span>Old Gallery</span> <br>
                            @foreach (@$index as $key=>$i)
                                <img style="width:100px" src="{{(@$i->image)?url('upload/VisaGallery/'.@$i->image):''}}" alt="">
                            @endforeach
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
