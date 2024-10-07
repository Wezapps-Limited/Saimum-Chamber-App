@extends('Server.master')
@section('content')

<div class="container-fluid">
    <div class="row">
       <div class="col-md-12">
       <div class="card">
                 <div class="card-body">
                     <h4 class="card-title">Log List</h4>
                    
                 </div>
                 <div class="table-responsive">
                     <table class="table table-striped" >
                         <thead>
                             <tr>
                                 <th scope="col">Sl</th>
                                 <th scope="col">Username</th>
                                 <th scope="col">Role</th>
                                 <th scope="col">Date & Time</th>
                                 <th scope="col">IP</th>
                                 <th scope="col">Device</th>
                             </tr>
                         </thead>
                         <tbody>
                            @foreach (@$user as $key=>$u)
                                
                           
                             <tr>
                                 <th scope="row">{{@$key+1}}</th>
                                 <td>{{@$u->user_name}}</td>
                                 <td>
                                    @if(@$u->role=='2')
                                    Admin
                                    @else
                                     Editor
                                    @endif
                                 </td>
                                 <td>{{ $u->last_login_ip }}</td>
                                 <td>{{ $u->last_login_time }}</td>
                                 <td style="width: 366px;">{{ $u->last_device_name }}</td>
                                 
                             </tr>

                             @endforeach
                         </tbody>
                     </table>
                 </div>
             </div>
       </div>
    </div>
    
    
 </div>

@endsection