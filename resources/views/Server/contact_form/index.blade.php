@extends('Server.master')
@section('title') Contact List  @endsection
@section('content')

<div class="container-fluid">
    <h3 class="text-black mb-30"><strong>Customer Message</strong></h3>
    <!-- Start Customer Table -->
    <div class="card">
       <div class="card-body row">
          <div class="col-12">
             <div class="d-md-flex justify-content-md-between align-items-md-baseline">
                <div class="col-md-4">
                   <h5 class="mb-3">
                      <strong>
                         Customer message table
                         <span class="badge badge-soft-dark rounded-circle ms-1">{{@$index_count??'0'}}</span>
                      </strong>
                   </h5>
                </div>
                <div class="col-md-4 mb-4">


                </div>
             </div>

             <div class="table-responsive">
                      <table
                         class="table border text-nowrap"
                         style="width: 100%"
                         id="default_order"
                      >
                         <thead  class="bg-light">
                            <tr>
                               <th>SL</th>
                               <th>Customer Name</th>
                               <th>Email</th>
                               <th>Phone</th>
                               <th>Message</th>
                               <th class="text-center">Action</th>
                            </tr>
                         </thead>
                         <tbody>

                            @foreach (@$index as $key=>$contact)
                            <tr>
                               <td>{{@$key+1}}</td>
                               <td>{{@$contact->name}}</td>
                               <td>{{@$contact->email}}</td>
                               <td>{{@$contact->mobile}}</td>

                               <td>
                                  <span class="message-content" data-full-message="For ordering the digital product digital payment is the only payment method?"></span>

                                  <button type="button" class="btn btn-secondary mt-2 read-more-btn" data-bs-toggle="modal"
                                        data-bs-target="#message-modal{{@$key}}" data-message="This is a long message for Neha Ahmed...">
                                  Read More
                                  </button>
                               </td>
                               <td>
                                  <span class="d-flex justify-content-around">
                                     <a href="{{route('ContactDelete',@$contact->id)}}" id="delete" class="link-secondary">
                                           <i class="far fa-trash-alt"></i>
                                     </a>
                                  </span>
                               </td>
                            </tr>



                            <!-- Message Modal -->
                      <div class="modal fade" id="message-modal{{@$key}}" tabindex="-1" role="dialog" aria-labelledby="messageModalTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable" role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                              <h5 class="modal-title" id="messageModalTitle">View Message</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                              <p class="full-message">
                                  {{@$contact->message}}
                              </p>
                              </div>
                              <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              </div>
                           </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                     </div>
                     <!-- end Message Modal -->

                            @endforeach

                         </tbody>

                      </table>

             </div>
       </div>
    </div>

     <!-- End Customer Table -->


 </div>

 @endsection
