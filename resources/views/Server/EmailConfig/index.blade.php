@extends('Server.master')
@section('title') Email Config @endsection
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
             <h4 class="card-title mb-20">Email Config</h4>
             @if(session('success'))
             <div id="success-message" class="success-message">{{ session('success') }}</div>
         @endif
             <form action="{{route('EmailConfigPost')}}" method="POST">
                @csrf
                <div class="form-body">
                   <div class="row">
                      
                      <div class="col-md-6">
                         <div class="form-group mb-3">
                         <label for="oldPassword" class="costom-label">Mail Mailer</label>
                         <input 
                            type="text" 
                            id="oldPassword"
                            name="mailer"
                            value="{{@$edit->mailer}}"
                            required
                            class="form-control" 
                            placeholder="mailer" 
                             />
                             @error('mailer')
                             <p class="error-message">{{ $message }}</p>
                         @enderror
                         </div>
                      </div>


                      <div class="col-md-6">
                        <div class="form-group mb-3">
                        <label for="oldPassword" class="costom-label">Mail Host</label>
                        <input 
                           type="text" 
                           id="oldPassword"
                           name="mail_host"
                           value="{{@$edit->mail_host}}"
                           required
                           class="form-control" 
                           placeholder="mail host" 
                            />
                            @error('mail_host')
                            <p class="error-message">{{ $message }}</p>
                        @enderror
                        </div>
                     </div>


                     
                     <div class="col-md-6">
                        <div class="form-group mb-3">
                        <label for="oldPassword" class="costom-label">Mail Port</label>
                        <input 
                           type="text" 
                           id="oldPassword"
                           name="mail_port"
                           value="{{@$edit->mail_port}}"
                           required
                           class="form-control" 
                           placeholder="mail port" 
                            />
                            @error('mail_host')
                            <p class="mail_port-message">{{ $message }}</p>
                        @enderror
                        </div>
                     </div>


                     <div class="col-md-6">
                        <div class="form-group mb-3">
                        <label for="oldPassword" class="costom-label">Mail Username</label>
                        <input 
                           type="text" 
                           id="oldPassword"
                           name="mail_username"
                           value="{{@$edit->mail_username}}"
                           required
                           class="form-control" 
                           placeholder="mail username" 
                            />
                            @error('mail_username')
                            <p class="mail_port-message">{{ $message }}</p>
                        @enderror
                        </div>
                     </div>


                     <div class="col-md-6">
                        <div class="form-group mb-3">
                        <label for="oldPassword" class="costom-label">Mail Password</label>
                        <input 
                           type="text" 
                           id="oldPassword"
                           name="mail_password"
                           value="{{@$edit->mail_password}}"
                           required
                           class="form-control" 
                           placeholder="mail Encryption" 
                            />
                            @error('mail_password')
                            <p class="mail_port-message">{{ $message }}</p>
                        @enderror
                        </div>
                     </div>

                     <div class="col-md-6">
                        <div class="form-group mb-3">
                        <label for="oldPassword" class="costom-label">Mail Encryption</label>
                        <input 
                           type="text" 
                           id="oldPassword"
                           name="mail_encryption"
                           value="{{@$edit->mail_encryption}}"
                           required
                           class="form-control" 
                           placeholder="mail Encryption" 
                            />
                            @error('mail_encryption')
                            <p class="mail_port-message">{{ $message }}</p>
                        @enderror
                        </div>
                     </div>

                     <div class="col-md-6">
                        <div class="form-group mb-3">
                        <label for="oldPassword" class="costom-label">Mail From Address</label>
                        <input 
                           type="text" 
                           id="oldPassword"
                           name="mail_form_address"
                           value="{{@$edit->mail_form_address}}"
                           required
                           class="form-control" 
                           placeholder="Mail From Address" 
                            />
                            @error('mail_form_address')
                            <p class="mail_port-message">{{ $message }}</p>
                        @enderror
                        </div>
                     </div>

                     <div class="col-md-6">
                        <div class="form-group mb-3">
                        <label for="oldPassword" class="costom-label">Mail From Name</label>
                        <input 
                           type="text" 
                           id="oldPassword"
                           name="mail_form_name"
                           value="{{@$edit->mail_form_name}}"
                           required
                           class="form-control" 
                           placeholder="Mail From Name" 
                            />
                            @error('mail_form_name')
                            <p class="mail_port-message">{{ $message }}</p>
                        @enderror
                        </div>
                     </div>

                     <div class="col-md-12">
                        <div class="form-group mb-3">
                        <label for="oldPassword" class="costom-label">Mail Send To</label>
                        <input 
                           type="text" 
                           id="oldPassword"
                           name="mail_to"
                           value="{{@$edit->mail_to}}"
                           required
                           class="form-control" 
                           placeholder="Mail Send To" 
                            />
                            @error('mail_to')
                            <p class="mail_port-message">{{ $message }}</p>
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