@extends('Server.master')
@section('title') Gallery | Rancon Electronics Ltd Admin  @endsection
@section('content')
<form action="{{route('GalleryMultipleDelete')}}" method="post" id="formsubmit">
   @csrf
<div class="container-fluid">
               <div class="row">
                  <div class="col-md-12">
                  <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Gallery</h4>
                                <button class="btn waves-effect waves-light btn-danger me-2 mailsend"><i class=" far fa-trash-alt me-1"></i>Delete</button>
                                <a href="{{route('GalleryCreate')}}" class="btn waves-effect waves-light btn-dark">Add New Image</a>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                              <th>
                           <input type="checkbox" class="custom-control-input toggle-all-checkbox" name="selectAll" id="toggleAll">
                           </th>
                                            <th scope="col">Alt Title</th>
                                            <th scope="col">Sequence</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Edit</th>
                                            <th scope="col">Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       @foreach(@$index as $key=>$l)
                                        <tr>
                                            <td>
                                   <input type="checkbox"  name="prints[]" id="allchec" value="{{@$l->id}}" multiple class="custom-control-input individual-checkbox">
                                </td>
                                            <td>{{@$l->title}}</td>
                                            <td><span class="badge-badge-sucess">{{@$l->sequence}}</span></td>
                                            <td>

                                               <img class="table-small-image" src="{{(@$l->image)?url('upload/CategoryManage/'.@$l->image):asset('Server/assets/images/gallery-image.jpg')}}" alt="Gallery Image">
                                             
                                             </td>
                                            
                                               <td>{{date('m/d/Y',strtotime($l->created_at))}}</td>

                                            <td>
                                             <a href="{{route('GalleryEdit',@$l->id)}}" class="btn waves-effect waves-light btn-rounded btn-info">
                                                Edit
                                             </a>
                                            </td>
                                            <td>
                                             <a href="{{route('GalleryDelete',@$l->id)}}" id="delete" class="btn waves-effect waves-light btn-rounded btn-danger">
                                                Delete
                                             </a>
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
             @endsection

@endsection
