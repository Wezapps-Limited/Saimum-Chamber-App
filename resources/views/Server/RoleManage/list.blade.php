@extends('Server.master')
@section('content')
<div class="container-fluid">
    <div class="row">
       <div class="col-md-12">
        <style>
            .error-message {
color: red;
font-size: 14px;
}
.success-message {
color: green;
font-size: 14px;
}

.updated-message {
color: green;
font-size: 14px;
}

.deleted-message {
color: green;
font-size: 14px;
}
        </style>
       <div class="card">
                 <div class="card-body">
                     <h4 class="card-title">User Role</h4>
                     <a href="{{route('UserRoleCreate')}}" class="btn waves-effect waves-light btn-dark">Add New User</a>
                     
                     @if(session('success'))
                     <div id="success-message" class="success-message">{{ session('success') }}</div>
                    @endif

                    @if(session('updated'))
                     <div id="updated-message" class="updated-message">{{ session('updated') }}</div>
                    @endif

                    @if(session('deleted'))
                    <div id="deleted-message" class="deleted-message">{{ session('deleted') }}</div>
                   @endif
                
                    </div>
                 <div class="table-responsive">
                     <table class="table table-striped">
                         <thead>
                             <tr>
                                 <th scope="col">Sl</th>
                                 <th scope="col">User Name</th>
                                 <th scope="col">Email</th>
                                 <th scope="col">Role</th>
                                 <th scope="col">Edit</th>
                                 <th scope="col">Delete</th>
                             </tr>
                         </thead>
                         <tbody>
                            @foreach (@$list as $key=>$l)
                            
                             <tr>
                                 <th scope="row">{{@$key+1}}</th>
                                 <td>{{@$l->name}}</td>
                                 <td>{{@$l->email}}</td>
                                 <td>
                                    @if($l->role==2)
                                    Admin
                                    @elseif($l->role==1)
                                     Editor
                                    @endif 
                                 </td>
                                 <td>
                                  <a href="{{route('UserRoleEdit',@$l->id)}}" class="btn waves-effect waves-light btn-rounded btn-info">
                                     Edit
                                  </a>
                                 </td>
                                 @if(Auth::user()->role==2)
                                 <td>
                                  <a id="delete" href="{{route('UserRoleDelete',@$l->id)}}" class="btn waves-effect waves-light btn-rounded btn-danger">
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


 @section('footer')

 <script>
    // Wait for the document to load
    document.addEventListener('DOMContentLoaded', function() {
        // Get the success message element
        const successMessage = document.getElementById('success-message');

        // If the success message exists, hide it after 2 seconds
        if (successMessage) {
            setTimeout(function() {
                successMessage.style.display = 'none';
            }, 2000); // 2000 milliseconds = 2 seconds
        }
    });
</script>

 <script>
    // Wait for the document to load
    document.addEventListener('DOMContentLoaded', function() {
        // Get the success message element
        const successMessage = document.getElementById('updated-message');

        // If the success message exists, hide it after 2 seconds
        if (successMessage) {
            setTimeout(function() {
                successMessage.style.display = 'none';
            }, 2000); // 2000 milliseconds = 2 seconds
        }
    });
</script>
 <script>
    // Wait for the document to load
    document.addEventListener('DOMContentLoaded', function() {
        // Get the success message element
        const successMessage = document.getElementById('deleted-message');

        // If the success message exists, hide it after 2 seconds
        if (successMessage) {
            setTimeout(function() {
                successMessage.style.display = 'none';
            }, 2000); // 2000 milliseconds = 2 seconds
        }
    });
</script>


@endsection

@endsection