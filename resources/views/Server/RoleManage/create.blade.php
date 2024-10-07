@extends('Server.master')
@section('content')

<div class="container-fluid">
    <form action="{{route('UserRoleStore')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title costom-card-title mb-30">Add New User</h4>

                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label for="username" class="costom-label">User Name</label>
                                        <input id="username" name="name" type="text" required class="form-control" placeholder="User Name" />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label for="email" class="costom-label">Email Address</label>
                                        <input id="email" name="email" type="email" required class="form-control" placeholder="Email Address" />
                                        @error('email')
                                        <p class="error-message">{{ $message }}</p>
                                       @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label for="userPassword" class="costom-label">Password</label>
                                        <input id="userPassword" name="password" type="password" required class="form-control" placeholder="Password" />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label for="userrole" class="costom-label">Select User Role</label>
                                        <select class="form-select mr-sm-2" id="userrole" name="role" required>
                                            <option value="1">Editor</option>
                                            <option value="2">Admin</option>
                                        </select>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="form-actions">
                            <div class="text-start">
                                <button type="submit" class="btn btn-info">Submit</button>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </form>


</div>

@endsection