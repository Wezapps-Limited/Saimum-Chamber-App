@extends('Server.master')
@section('title') Our Experts Manage List  @endsection
@section('content')

<div class="container-fluid">
  <h3 class="text-black pb-3"><strong>@if($edit_status==true) Our Experts Edit @else Our Experts Setup @endif</strong></h3>
  <form @if($edit_status==true) action="{{route('OurExpertUpdate')}}" @else action="{{route('OurExpertPost')}}" @endif method="POST" enctype="multipart/form-data">
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
                        <label for="categoryName" class="costom-label">Name</label>
                        <input
                        id="categoryName"
                        name="name"
                        type="text"
                        @if($edit_status==true)
                        value="{{@$edit->name}}"
                        @endif

                        required
                        class="form-control custom-shadow bg-white"
                        placeholder="Ex: name"
                        />
                     </div>


                     <div class="form-group mb-3">
                        <label for="categoryName" class="costom-label">Designation</label>
                        <input
                        id="categoryName"
                        name="designation"
                        type="text"
                        @if($edit_status==true)
                        value="{{@$edit->designation}}"
                        @endif

                        required
                        class="form-control custom-shadow bg-white"
                        placeholder="Ex: designation"
                        />
                     </div>


                     
                     <div class="form-group mb-3">
                        <label for="categoryName" class="costom-label">Email</label>
                        <input
                        id="categoryName"
                        name="email"
                        type="email"
                        @if($edit_status==true)
                        value="{{@$edit->email}}"
                        @endif

                        required
                        class="form-control custom-shadow bg-white"
                        placeholder="Ex: email"
                        />
                     </div>

                      
                     <div class="form-group mb-3">
                        <label for="categoryName" class="costom-label">Description*</label>
                         <textarea name="description" class="form-control ckeditor" id="" cols="30" rows="10"> @if($edit_status==true)
                           {!!@$edit->description!!}
                           @endif</textarea>
                     </div>


                     <div class="row">
                        <h4>Contact Information:</h4>
                        <div class="col-md-4">
                           <div class="form-group mb-3">
                              <label for="categoryName" class="costom-label">Telephone</label>
                              <input
                              id="categoryName"
                              name="mobile"
                              type="text"
                              @if($edit_status==true)
                              value="{{@$edit->mobile}}"
                              @endif
      
                              required
                              class="form-control custom-shadow bg-white"
                              placeholder="Ex: Telephone"
                              />
                           </div>
                        </div>


                        <div class="col-md-4">
                           <div class="form-group mb-3">
                              <label for="categoryName" class="costom-label">Telephone 02</label>
                              <input
                              id="categoryName"
                              name="mobile_one"
                              type="text"
                              @if($edit_status==true)
                              value="{{@$edit->mobile_one}}"
                              @endif
      
                              required
                              class="form-control custom-shadow bg-white"
                              placeholder="Ex: Telephone 02"
                              />
                           </div>
                        </div>

                        <div class="col-md-4">
                           <div class="form-group mb-3">
                              <label for="categoryName" class="costom-label">Mobile</label>
                              <input
                              id="categoryName"
                              name="tel"
                              type="text"
                              @if($edit_status==true)
                              value="{{@$edit->tel}}"
                              @endif
      
                              required
                              class="form-control custom-shadow bg-white"
                              placeholder="Ex: Mobile"
                              />
                           </div>
                        </div>


                        <div class="col-md-12">
                           <div class="form-group mb-3">
                              <label for="categoryName" class="costom-label">Linkedin Link</label>
                              <input
                              id="categoryName"
                              name="linkedin"
                              type="text"
                              @if($edit_status==true)
                              value="{{@$edit->linkedin}}"
                              @endif
      
                              required
                              class="form-control custom-shadow bg-white"
                              placeholder="Ex: Telephone"
                              />
                           </div>
                        </div>

                     </div>

                     
                    

                                   <div class="form-group mb-3">
                                      <label for="priority" class="costom-label">Status</label>
                                      <select class="form-select mr-sm-2 custom-shadow bg-white" name="status" id="inlineFormCustomSelect">
                                         <option selected="" disabled>Set Status</option>
                                         @for($i=1; $i<3;$i++)
                                         <option value="{{$i}}"  @if($edit_status==true)
                                          {{(@$edit->status==@$i)?'selected':''}}
                                         @endif>
                                        @if(@$i==1)
                                            Pending
                                        @else
                                         Approved
                                        @endif
                                       </option>
                                         @endfor

                                      </select>
                                   </div>


                                   <div class="form-group mb-3">
                                    <label for="categoryName" class="costom-label">Image ( <span style="color:red">Max Size: Width:300px, Height:300px</span> )</label>
                                    <input
                                    id="categoryName"
                                    name="image"
                                    type="file"
                                   
            
                                   
                                    class="form-control custom-shadow bg-white"
                                    placeholder="Ex: image"
                                    />

                                    @if($edit_status==true)
                                     <img style="width:100px" src="{{(@$edit->image)?url('upload/OurExperts/'.@$edit->image):''}}" alt="">
                                    @endif
                                 </div>



                                 <div class="form-group mb-3">
                                    <label for="categoryName" class="costom-label">Hover Image ( <span style="color:red">Max Size: Width:300px, Height:300px</span> )</label>
                                    <input
                                    id="categoryName"
                                    name="hover_image"
                                    type="file"
                                   
            
                                   
                                    class="form-control custom-shadow bg-white"
                                    placeholder="Ex: image"
                                    />

                                    @if($edit_status==true)
                                     <img style="width:100px" src="{{(@$edit->hover_image)?url('upload/OurExperts/'.@$edit->hover_image):''}}" alt="">
                                    @endif
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
              <h5><strong>Our Experts List <span class="badge badge-soft-dark rounded-circle">{{@$category_count??'0'}}</span></strong></h5>
              <form >
                 <div class="input-group mb-3 flex-nowrap">

                  {{-- <a href="{{route('Our ExpertsTextPage')}}" class="btn waves-effect waves-light btn-info btn-sm" >
                     <i class="fas fa-plus me-1"></i> Our Experts Image
                   </a> --}}

                  <a href="{{route('OurExpertIndex')}}" class="btn waves-effect waves-light btn-success btn-sm" >
                    <i class="fas fa-list me-1"></i> All Our Experts
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
                             <th>Name</th>
                             <th>Designation</th>
                             <th>Image</th>
                             <th>Status</th>
                            
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
                             
                           {{$cat->name??'demo'}}

                          </td>

                          <td>
                             
                           {{$cat->designation??'demo'}}

                          </td>


                          <td>
                             
                           <img style="width:100px" src="{{(@$cat->image)?url('upload/OurExperts/'.@$cat->image):''}}" alt="">

                          </td>

       

                          {{-- <td>{{@$cat->category_name??'not found'}}</td> --}}
                          <td>
                            @if(@$cat->status==1)
                            <span  style="background: orange;
    padding: 3px;
    border-radius: 2px;
    color: white;">Pending</span>
                            @else
                            <span  style="background: green;
                            padding: 3px;
                            border-radius: 2px;
                            color: white;">Approved</span>
                            @endif
                          </td>
                         
                          <td>
                          <span class="justify-content-around">
                             <a href="{{route('OurExpertInfoList',@$cat->id)}}" title="Expertise" class="link-secondary btn btn-success btn-sm">
                                   <i style="color:white" class="fa fa-plus-circle"></i>
                             </a>

                             <a href="{{route('OurExpertEdit',@$cat->id)}}" class="link-secondary btn btn-success btn-sm">
                                   <i style="color:white" class="far fa-edit"></i>
                             </a>
                             <a href="{{route('OurExpertDelete',@$cat->id)}}" class="link-secondary btn btn-danger btn-sm" id="delete">
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
