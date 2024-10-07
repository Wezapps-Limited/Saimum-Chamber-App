@extends('Server.master')
@section('title') News Manage List  @endsection
@section('content')
<form action="{{route('NewsMultipleDelete')}}" method="post" id="formsubmit">
   @csrf
<div class="container-fluid">
   <h3 class="text-black mb-30"><strong>Newss</strong></h3>
   <div class="row">
      <div class="col-12">
         <div class="card">
            <div class="card-body d-flex justify-content-end">
               <button class="btn waves-effect waves-light btn-danger me-2 mailsend"><i class=" far fa-trash-alt me-1"></i>Delete</button>
               <a href="{{route('NewsCreate')}}" class="btn waves-effect waves-light btn-dark"><i class="fas fa-plus me-1"></i>Add News</a>
            </div>
         </div>
      </div>
   </div>
   <!-- Start Newss Table -->
   <div class="row">
      <div class="col-12">
      <div class="table-responsive">
                  <table
                     class="table border table-bordered text-nowrap bg-white"
                     style="width: 100%"
                     id="default_order"
                  >
                     <thead  class="bg-light">
                        <tr>
                           <th>
                           <input type="checkbox" class="custom-control-input toggle-all-checkbox" name="selectAll" id="toggleAll">
                           </th>
                           <th>News Title</th>
                           <th>News Description</th>
                           <th>News Date</th>
                           <th>Actions</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach (@$index as $key=>$i)
                           
                      
                        <tr>
                           <td>
                           <input type="checkbox"  name="prints[]" id="allchec" value="{{@$i->id}}" multiple class="custom-control-input individual-checkbox">
                           </td>
                           <td>{{Str::limit(@$i->title,30)}}</td>
                           <td>{!!Str::limit($i->description,50)!!}</td>
                           <td>{{date('d-m-Y',strtotime($i->news_date))}}</td>
                           <td>
                            <span class="d-flex justify-content-around">
                                <a href="{{route('NewsEdit',@$i->id)}}" class="link-secondary">
                                    <i class="far fa-edit"></i>
                                </a>
                                <a href="{{route('NewsDelete',$i->id)}}" id="delete" class="link-secondary">
                                    <i class="far fa-trash-alt"></i>
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
    
    <!-- End Newss Table -->
   
   
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
