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
        </style>
       <div class="card">
          <div class="card-body">
             <h4 class="card-title mb-20">Account Setting</h4>
             @if(session('success'))
             <div id="success-message" class="success-message">{{ session('success') }}</div>
         @endif
             <form action="{{route('AccountSettingPost')}}" method="POST">
                @csrf
                <div class="form-body">
                   <div class="row">
                      
                      <div class="col-md-12">
                         <div class="form-group mb-3">
                         <label for="oldPassword" class="costom-label">Old Password</label>
                         <input 
                            type="password" 
                            id="oldPassword"
                            name="old_password"
                            
                            required
                            class="form-control" 
                            placeholder="Old Password" 
                             />
                             @error('old_password')
                             <p class="error-message">{{ $message }}</p>
                         @enderror
                         </div>
                      </div>
                   </div>
                   <div class="row">
                      <div class="col-md-12">
                         <div class="form-group mb-3">
                         <label for="password" class="costom-label">New Password</label>
                            <input 
                            type="password" 
                            id="password"
                            name="password"
                           
                            required
                            class="form-control" 
                            placeholder="New Password" 
                             />
                             @error('password')
                             <p class="error-message">{{ $message }}</p>
                         @enderror
                         </div>
                      </div>
                     
                   </div>
                   <div class="row">
                   <div class="col-md-12">
                         <div class="form-group mb-3">
                            <label for="confirmPassword" class="costom-label">Confirm New Password</label>
                            <input id="confirmPassword"
                            name="password_confirmation"
                            type="password"
                           
                            required 
                            class="form-control" 
                            placeholder="Confirm New Password" />
                             @error('password_confirmation')
                                <p class="error-message">{{ $message }}</p>
                            @enderror
                         </div>
                      </div>
                      
                   </div>
                  
                </div>
                <div class="form-actions">
                   <div class="text-start">
                      <button type="submit" class="btn btn-info">Update</button>
                      
                   </div>
                </div>
             </form>
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
 @endsection


@endsection