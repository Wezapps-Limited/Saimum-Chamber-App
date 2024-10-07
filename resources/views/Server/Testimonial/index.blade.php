@extends('Server.master')
@section('title') Testimonial List  @endsection
@section('content')

<form action="{{route('TestimonialMultiDelete')}}" method="post" id="formsubmit">
  @csrf
<div class="container-fluid">


    <h3 class="text-black mb-30"><strong>Testimonial List </strong></h3>

    <div class="row">
      <div class="col-12">
         <div class="card">
            <div class="card-body d-flex justify-content-end">

               <a  href="{{route('TestimonialTextPage')}}"  class="btn waves-effect waves-light btn-info me-2" ><i class="fas fa-plus me-1"></i>Update Text</a>
               <a type="button" class="btn waves-effect waves-light btn-danger me-2 mailsend" ><i class=" fas fa-trash-alt me-1"></i>Delete</a>

               <a href="{{route('TestimonialCreate')}}" class="btn waves-effect waves-light btn-success"><i class="fas fa-plus me-1"></i>Add Testimonial</a>
            </div>
         </div>
      </div>
   </div>

   <div class="card">
    <div class="card-body row">
    <div class="table-wrapper">
        <div id="datatable1_wrapper" style="overflow-x:auto;">
         
            
            <table id="default_order" class="table display table-responsive nowrap dataTable no-footer dtr-inline" >
                <thead class="bg-light">
                    <tr>
                      <th>
                        <input type="checkbox" class="custom-control-input toggle-all-checkbox" name="selectAll" id="toggleAll">
                        </th>
                        <th >Sl</th>
                        <th >Name</th>
                        {{-- <th >URI</th> --}}
                    
                        <th >Image</th>
                        <th class="text-center">Home Status</th>
                        <th>Active</th>
                        
                  
                    </tr>
                </thead>
                <tbody>
                
                @foreach(@$page as $key=>$list)
                @php
                        $checkboxId = 'myCheckbox_' . $key; // Generate a unique ID for each checkbox
                        @endphp
                <tr>
                  <td>
                    <input type="checkbox" name="prints[]" id="allchec" value="{{@$list->id}}" multiple class="custom-control-input individual-checkbox">
                    </td>
                  <td>{{$key+1}}</td>
                  <td>{{@$list->name}}</td>

                  
              
                  {{-- <td>{{@$list->title_uri}}</td> --}}
                  <td><img src="{{ asset('upload/Testimonial/'.$list->image) }}" class="img-thumbnail" width="50" height="50" /></td>
                  <td>
                    @if($list->status == 1)
                        <div class="toggle-whitch">
                            <input type="checkbox" class="myCheckbox"  id="{{ $checkboxId }}" data-id="{{ $list->id }}" data-status="{{ $list->status }}" @if($list->status == 1) checked @endif />
                        </div>

                        @elseif($list->status == 2)
                        <div class="toggle-whitch">
                          <input type="checkbox" class="myCheckboxTwo"  id="{{ $checkboxId }}" data-id="{{ $list->id }}" data-status="{{ $list->status }}" @if($list->status == 1) checked @endif />
                      </div>

                    @endif
                </td>
                  <td>
                      
           
              <a href="{{route('TestimonialEdite',@$list->id)}}" class="btn btn-outline-info btn-sm m_hov"><i id="hov" class="fa fa-edit"></i></a>
            
              
                
              <a href="{{route('TestimonialDelete',@$list->id)}}" id="delete" class="btn btn-outline-danger btn-sm m_hov"><i id="hov" class="fa fa-trash"></i></a>
            
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
</form>
<input type="hidden" value="hpl_one" id="hplss">






  <!-- End Category Table -->
  <style>
    /* Define common styles for the checkboxes */
    .toggle-whitch input[type="checkbox"] {
        position: absolute;
        -webkit-appearance: none;
        height: 20px;
        width: 35px;
        border-radius: 40px;
        left: 50%;
        transform: translate(-50%);
        outline: none;
        cursor: pointer;
    }

    /* Define style for checked checkbox with status 1 */
    .toggle-whitch input[type="checkbox"][data-status="1"]:checked {
        background-color: #c1c9c1;
    }

    /* Define style for checkbox with status 2 */
    /* .toggle-whitch input[type="checkbox"][data-status="2"] {
        background-color: green;
    } */
</style>

@section('footer')

<script>
            $("[name='selectAll']").on('click',function () {

                $('input:checkbox').not(this).prop('checked', this.checked);
            })


        </script>

     <script>
            $('.mailsend').on('click',function () {

               $('#formsubmit').submit();
            });
    </script>

<script>
    // Event listener for checkboxes with class 'myCheckbox' and 'myCheckboxTwo'
    document.querySelectorAll('.myCheckbox, .myCheckboxTwo').forEach(function(checkbox) {
        checkbox.addEventListener('click', function() {
            let id = this.getAttribute('data-id');
            if (this.click) {
                if (this.classList.contains('myCheckbox')) {
                    window.location.href = "{{ route('TestimonialActive', ':id') }}".replace(':id', id);
                } else if (this.classList.contains('myCheckboxTwo')) {
                    window.location.href = "{{ route('TestimonialDeActive', ':id') }}".replace(':id', id);
                }
            }
        });
    });
</script>
@endsection

@endsection