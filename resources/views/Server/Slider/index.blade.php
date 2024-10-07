@extends('Server.master')
@section('title') Slider List | Saimum Chambers Admin  @endsection
@section('content')
<form action="{{route('SliderMultiDelete')}}" method="post" id="formsubmit">
   @csrf
<div class="container-fluid">
               <div class="row">
                  <div class="col-md-12">
                  <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Slider List</h4>
                                <button class="btn waves-effect waves-light btn-danger me-2 mailsend"><i class=" far fa-trash-alt me-1"></i>Delete</button>
                                <a href="{{route('SliderCreate')}}" class="btn waves-effect waves-light btn-dark">Add Slider</a>
                            </div>
                             
                        </div>


                        <div class="card">
                           <div class="card-body">
                              <div class="table-responsive">
                              <table class="table table-striped "  id="default_order">
                                    <thead>
                                         <tr>
                                              <th>
                                  <input type="checkbox" class="custom-control-input toggle-all-checkbox" name="selectAll" id="toggleAll">
                                    </th>
                                            <th >Title</th>
                                            <th >Button 01 Name</th>
                                            <th >Button 02 Name</th>
                                          
                                            <th >Option</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       @foreach(@$index as $key=>$l)
                                        <tr>
                                            <td>
                                   <input type="checkbox"  name="prints[]" id="allchec" value="{{@$l->id}}" multiple class="custom-control-input individual-checkbox">
                                </td>
                                            <td>{{@$l->title}}</td>
                                            <td>{{@$l->book_meeting_link}}</td>
                                            <td>{{@$l->contact_link}}</td>
                                           
                                            <td>
                                             
                                             <a href="{{route('SliderEdit',@$l->id)}}" class="btn waves-effect waves-light btn-rounded btn-info">
                                                Edit
                                             </a>
                                             <a href="{{route('SliderDelete',@$l->id)}}" id="delete" class="btn waves-effect waves-light btn-rounded btn-danger">
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
