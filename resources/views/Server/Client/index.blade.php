@extends('Server.master')
@section('title') Trusted By List  @endsection
@section('content')

<div class="container-fluid">
  <h3 class="text-black pb-3"><strong>@if($edit_status==true) Trusted By  Edit @else Trusted By  Add @endif</strong></h3>
  <form @if($edit_status==true) action="{{route('ClientUpdate')}}" @else action="{{route('ClientPost')}}" @endif method="POST" enctype="multipart/form-data">
    @csrf
    @if($edit_status==true)
     <input type="hidden" value="{{@$edit->id}}" name="edit_id">
    @endif
     <div class="row">
        <div class="col-md-12">
           <div class="card">
              <div class="card-body row">
                 <div class="col-md-6">
                    <div class="form-body">
                              <div class="form-group mb-3">
                                 <label for="metaDesc" class="costom-label">Trusted By Image* </label>
                                 <span class="badge badge-soft-info">Ratio 1:1 (100 x 100 px)</span>

                                 <div class="input-group mb-3 flex-nowrap">
                                    <div class="custom-file w-100">
                                       <input class="form-control" type="file" id="news-banner-input" name="image">
                                    </div>
                                    <button id="upload-button" class="btn btn-info" type="button">
                                       Browse
                                    </button>
                                 </div>
                              </div>

                                   <div class="form-group mb-3">
                                      <label for="priority" class="costom-label">Priority</label>
                                      <select class="form-select mr-sm-2 custom-shadow bg-white" name="sequence" id="inlineFormCustomSelect">
                                         <option selected="" disabled>Set Priority</option>
                                         @for($i=1; $i<60;$i++)
                                         <option value="{{$i}}"  @if($edit_status==true)
                                          {{(@$edit->sequence==@$i)?'selected':''}}
                                         @endif>{{$i}}</option>
                                         @endfor

                                      </select>
                                   </div>
                                 
                    </div>

                 </div>
                 <div class="col-md-6">
                          <div class="form-group mb-3">
                            @if($edit_status==true)
                             <img id="news-banner-image" @if(@$edit->image==null) src="{{asset('Server/assets/images/demo-image.jpg')}}"  @else src="{{asset('upload/Client/'.@$edit->image)}}" @endif class="preview-image" alt="Profile Image">
                              @else
                             <img id="news-banner-image" src="{{asset('Server/assets/images/demo-image.jpg')}}" class="preview-image" alt="Profile Image">
                              @endif
                            </div>
                 </div>
                 <div class="col-md-12">
                    <!-- Submit Button -->
                    <div class="form-actions mt-3">
                       <div class="text-end">
                          <button type="button" class="btn btn-light">Reset</button>
                          <button type="submit" class="btn btn-info">@if($edit_status==true) Update @else Submit @endif</button>

                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>

     </div>
  </form>

  <!-- Start Category Table -->
  <div class="card">
     <div class="card-body row">
        <div class="col-12">
           <div class="d-md-flex justify-content-between mb-4">
              <h5><strong>Trusted By List <span class="badge badge-soft-dark rounded-circle">{{@$category_count??'0'}}</span></strong></h5>
              <form >
                 <div class="input-group mb-3 flex-nowrap">
                  <a href="{{route('ClientIndex')}}" class="btn waves-effect waves-light btn-success btn-sm" >
                    <i class="fas fa-list me-1"></i> Trusted By List
                  </a>
                 </div>
              </form>

           </div>


           <div class="table-responsive">
                    <table
                    id="default_order"
                       class="table border text-nowrap"
                       style="width: 100%"
                    >
                       <thead  class="bg-light">
                          <tr>
                             <th>ID</th>
                             <th>Image</th>
                             {{-- <th>Name</th> --}}
                             <th>Priority</th>
                            
                             <th>Action</th>
                          </tr>
                       </thead>
                       <tbody>


                        @foreach (@$index as $key=>$cat)
                        @php
                        $checkboxId = 'myCheckbox_' . $key; // Generate a unique ID for each checkbox
                        @endphp
                        <tr>
                          <td>{{$key+1}}</td>
                          <td>
                             <div class="cat-table-image">
                                <img src="{{(@$cat->image)?url('upload/Client/'.@$cat->image):''}}" alt="Category Image">

                             </div>
                          </td>
                          {{-- <td>{{@$cat->category_name??'not found'}}</td> --}}
                          <td>{{$cat->sequence??'0'}}</td>
                         
                          <td>
                          <span class="justify-content-around">
                             <a href="{{route('ClientEdit',@$cat->id)}}" class="link-secondary btn btn-success btn-sm">
                                   <i style="color:white" class="far fa-edit"></i>
                             </a>
                             <a href="{{route('ClientDelete',@$cat->id)}}" class="link-secondary btn btn-danger btn-sm" id="delete">
                                   <i style="color:white" class="far fa-trash-alt"></i>
                             </a>

                          </span>
                          </td>
                       </tr>
                        @endforeach

                       </tbody>

                    </table>
           </div>
        </div>
     </div>
  </div>

   

</div>

@section('footer')

<script>
  // Get the file input element and the image tag element
  const fileInput = document.getElementById('news-banner-input');
  const image = document.getElementById('news-banner-image');
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
<!-- jQuery End -->

@endsection


@endsection
