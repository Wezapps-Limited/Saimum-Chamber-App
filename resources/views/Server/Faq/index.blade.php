@extends('Server.master')
@section('title') Faq Manage List  @endsection
@section('content')

<div class="container-fluid">
  <h3 class="text-black pb-3"><strong>@if($edit_status==true) Faq Edit @else Faq Setup @endif</strong></h3>
  <form @if($edit_status==true) action="{{route('FaqUpdate')}}" @else action="{{route('FaqPost')}}" @endif method="POST" enctype="multipart/form-data">
    @csrf
    @if($edit_status==true)
     <input type="hidden" value="{{@$edit->id}}" name="edit_id">
    @endif
     <div class="row">
        <div class="col-md-12">
           <div class="card">
              <div class="card-body row">
                 <div class="col-md-12">
                    <div class="form-body">

                     <div class="form-group mb-3">
                        <label for="categoryName" class="costom-label">Question*</label>
                        <input
                        id="categoryName"
                        name="question"
                        type="text"
                        @if($edit_status==true)
                        value="{{@$edit->question}}"
                        @endif

                        required
                        class="form-control custom-shadow bg-white"
                        placeholder="Ex: question"
                        />
                     </div>


                     
                     <div class="form-group mb-3">
                        <label for="categoryName" class="costom-label">Ans*</label>
                         <textarea name="ans" class="form-control ckeditor" id="" cols="30" rows="10"> @if($edit_status==true)
                           {!!@$edit->ans!!}
                           @endif</textarea>
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
              <h5><strong>Faq List <span class="badge badge-soft-dark rounded-circle">{{@$category_count??'0'}}</span></strong></h5>
              <form >
                 <div class="input-group mb-3 flex-nowrap">

                  <a href="{{route('FaqTextPage')}}" class="btn waves-effect waves-light btn-info btn-sm" >
                     <i class="fas fa-plus me-1"></i> Faq Info
                   </a>

                  <a href="{{route('FaqIndex')}}" class="btn waves-effect waves-light btn-success btn-sm" >
                    <i class="fas fa-list me-1"></i> All Faq
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
                             <th>Question</th>
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
                              {{$cat->question??'0'}}

                             </div>
                          </td>
                          {{-- <td>{{@$cat->category_name??'not found'}}</td> --}}
                          <td>{{$cat->sequence??'0'}}</td>
                         
                          <td>
                          <span class="justify-content-around">
                             <a href="{{route('FaqEdit',@$cat->id)}}" class="link-secondary btn btn-success btn-sm">
                                   <i style="color:white" class="far fa-edit"></i>
                             </a>
                             <a href="{{route('FaqDelete',@$cat->id)}}" class="link-secondary btn btn-danger btn-sm" id="delete">
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
