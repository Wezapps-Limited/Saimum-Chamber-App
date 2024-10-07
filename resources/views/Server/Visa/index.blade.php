@extends('Server.master')
@section('title') Visa List | Saimum Chambers Admin  @endsection
@section('content')

<div class="container-fluid">
               <div class="row">
                  <div class="col-md-12">
                  <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Visa List</h4>
                                {{-- <button class="btn waves-effect waves-light btn-danger me-2 mailsend"><i class=" far fa-trash-alt me-1"></i>Delete</button> --}}
                                <a href="{{route('VisaCreate')}}" class="btn waves-effect waves-light btn-dark">Add Visa</a>
                                <a href="{{route('VisaMultiGalleryIndex')}}" class="btn waves-effect waves-light btn-primary">Gallery</a>
                            </div>
                             
                        </div>


                        <div class="card">
                           <div class="card-body">
                              <div class="table-responsive">
                              <table class="table table-striped "  id="default_order">
                                    <thead>
                                         <tr>
                                           
                                            <th >Sl</th>
                                            <th >Type</th>
                                            <th >Count</th>
                                          
                                            <th >Option</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       @foreach(@$index as $key=>$l)
                                        <tr>
                                      
                                            <td>{{@$key+1}}</td>
                                            <td>
                                             @if(@$l->type==1)
                                             Business and Worker Visa
                                             @elseif(@$l->type==2)
                                             Private Visa
                                             @elseif(@$l->type==3)
                                             Application Packages
                                             @endif
                                            </td>
                                            <td>{{@$l->count}}</td>
                                           
                                            <td>
                                             
                                             <a href="{{route('VisaTypeIndex',@$l->type)}}" class="btn waves-effect waves-light btn-rounded btn-info">
                                                View
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
