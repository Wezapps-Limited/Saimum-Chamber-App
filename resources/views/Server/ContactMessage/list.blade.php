@extends('Server.master')
@section('title') Contact Message List  @endsection
@section('content')
<form action="{{route('ContactMultipleDelete')}}" method="post" id="formsubmit">
   @csrf
<div class="container-fluid">
    <div class="row">
       <div class="col-md-12">
       <div class="card">
                 <div class="card-body">
                     <h4 class="card-title">Contact List</h4>
                            <div class="row">
      <div class="col-12">
         <div class="card">
            <div class="card-body d-flex justify-content-end">
               <button class="btn waves-effect waves-light btn-danger me-2 mailsend"><i class=" far fa-trash-alt me-1"></i>Delete</button>
               
            </div>
         </div>
      </div>
   </div>
                 </div>
                 <div class="table-responsive">
                     <table class="table border table-bordered text-nowrap bg-white" id="example">
                         <thead>
                             <tr>
                                   <th>
                           <input type="checkbox" class="custom-control-input toggle-all-checkbox" name="selectAll" id="toggleAll">
                           </th>
                                 <!--<th scope="col">Sl</th>-->
                                 <th scope="col"> Name</th>
                                 <!-- <th scope="col">Last Name</th> -->
                                 <th scope="col">Email</th>
                                 {{-- <th scope="col">Phone Number</th> --}}
                                 <th scope="col">Message</th>
                                 <th scope="col">Date & Time</th>
                                 <th scope="col">Action</th>
                             </tr>
                         </thead>
                         <tbody>
                            @foreach (@$list as $key=>$l)
                                
                           
                             <tr>
                                  <td>
                                   <input type="checkbox"  name="prints[]" id="allchec" value="{{@$l->id}}" multiple class="custom-control-input individual-checkbox">
                                </td>
                                 <!--<th scope="row">{{$key+1}}</th>-->
                                 <td>{{$l->name}} {{$l->l_name}}</td>
                                 <!-- <td>{{$l->l_name}}</td> -->
                                 <td>{{$l->email}}</td>
                                 {{-- <td>{{$l->mobile}}</td> --}}
                                 <td><a class="btn btn-info btn-sm" onclick="showmessage('{{ $l->message }}')">Click Me</a></td>
                                 <td> {{ \Carbon\Carbon::parse($l->created_at)->timezone('Asia/Dhaka')->format('m-d-Y (g:i A)') }}
</td>
                                 
                                 @if(Auth::user()->role==2)
                                 
                                   <td>
                                    <a id="delete" href="{{route('ContactMessageDelete',@$l->id)}}" class="btn waves-effect waves-light btn-rounded btn-danger btn-sm">
                                       Delete
                                    </a>
                                   </td>

                                   @endif
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
   function showmessage(Mesage){
     $('.modal').modal('show',4000)
     $('#message').val(Mesage);
   }

   function hidemessage(){
     $('.modal').modal('hide',4000)
   
   }
 </script>
 
 
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

 

<div class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Message View</h5>
          <button type="button" onclick="hidemessage()" class="close btn btn-danger btn-sm" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
       
          <textarea class="form-control" name="message" cols="10" rows="20" id="message"></textarea>
          <input type="hidden" id="showid" name="">
        
        </div>
       
      </div>
    </div>
  </div>
<input type="hidden"  id="hplss" value="hpl_one">
@endsection