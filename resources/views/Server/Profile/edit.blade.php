@extends('Server.master')
@section('title') My Profile | Rancon Electronics Ltd Admin @endsection
@section('content')

  
<div class="container-fluid">
    <form action="{{route('ProfileUpdate')}}" method="POST" enctype="multipart/form-data" id="forms">
        @csrf
        <div class="row">

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

            <div class="col-md-4">
                <div class="card">
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="upload-image-wrapper">
                                    <div class="upload-round-image">
                                        @if(Auth::user()->image!=null)
                                        <img id="profile-image" src="{{asset('upload/Profile/'.Auth::user()->image)}}" class="rounded-circle" alt="Profile Image">
                                         @else
                                         <img id="profile-image" src="{{asset('Server/assets/images/users/user.jpg')}}" class="rounded-circle" alt="Profile Image">
                                         @endif
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="profile-image-input" class="custom-file-upload">
                                            <input type="file" name="image" id="profile-image-input" required class="form-control" />
                                            <span class="upload-placeholder btn btn-hover">Upload New Photo</span>
                                        </label>
                                    </div>
                                    <h4>Member Since: <span>{{date('d M Y',strtotime(Auth::user()->created_at))}}</span></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title costom-card-title mb-30">Edit Profile</h4>
                        @if(session('success'))
                        <div id="success-message" class="success-message">{{ session('success') }}</div>
                    @endif
                        <div class="form-body">
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="fullName" class="costom-label">Full Name</label>
                                        <input id="fullName" name="name" value="{{Auth::user()->name}}" type="text" required class="form-control" placeholder="Full Name" />
                                   
                                        @error('name')
                                        <p class="error-message">{{ $message }}</p>
                                       @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="username" class="costom-label">Username</label>
                                        <input id="username" name="user_name" value="{{@$profile->user_name}}" type="text" readonly required class="form-control" placeholder="Username" />
                                    
                                        @error('username')
                                        <p class="error-message">{{ $message }}</p>
                                       @enderror
                                    
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="email" class="costom-label">Email Address</label>
                                        <input id="email" name="email" readonly value="{{Auth::user()->email}}" type="email" required disabled class="form-control" placeholder="Email Address" />
                                        
                                        <input type="hidden" name="email" value="{{Auth::user()->email}}" />
                                    
                                        @error('email')
                                        <p class="error-message">{{ $message }}</p>
                                       @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="phone" class="costom-label">Mobile Number</label>
                                        <input id="phone"  name="phone" value="{{Auth::user()->phone}}" type="tel" required class="form-control" placeholder="Mobile Number" />
                                   
                                        @error('phone')
                                        <p class="error-message">{{ $message }}</p>
                                       @enderror
                                   
                                    </div>
                                </div>

                            </div>


                        </div>
                        <div class="form-actions">
                            <div class="text-start">
                                <button type="submit" id="submits" class="btn btn-hover">Update Info</button>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </form>


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
    // Get the file input element and the image tag element
    const fileInput = document.getElementById('profile-image-input');
    const image = document.getElementById('profile-image');

    // Listen for changes in the file input element
    fileInput.addEventListener('change', function() {
        const selectedFile = fileInput.files[0];
        if (selectedFile) {
            const reader = new FileReader();
            reader.addEventListener('load', function() {
                image.src = reader.result;
            });

            // Read the selected file as a data URL
            reader.readAsDataURL(selectedFile);
        }
    });

</script>

<script>
    
    $('#submits').on('click',function(){
        
        $('#forms').submit();
    })
    
</script>

@endsection

@endsection