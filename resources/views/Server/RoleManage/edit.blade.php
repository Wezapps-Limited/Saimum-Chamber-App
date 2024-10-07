@extends('Server.master')
@section('content')

<div class="container-fluid">
    <form action="{{route('UserRoleUpdate')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title costom-card-title mb-30">Edit User</h4>

                        <input type="hidden" name="edit_id" value="{{@$edit->id}}">

                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label for="username" class="costom-label">User Name</label>
                                        <input id="username" name="name" value="{{@$edit->name}}" type="text" required class="form-control" placeholder="User Name" />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label for="email" class="costom-label">Email Address</label>
                                        <input id="email" name="email" type="email" value="{{@$edit->email}}" required class="form-control" placeholder="Email Address" />
                                        @error('email')
                                        <p class="error-message">{{ $message }}</p>
                                       @enderror
                                    </div>
                                </div>
                                
                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label for="userrole" class="costom-label">Select User Role</label>
                                        <select class="form-select mr-sm-2" id="userrole" name="role" required>
                                            <option value="1" {{(@$l->role==1)?'selected':''}}>Editor</option>
                                            <option value="2" {{(@$l->role==2)?'selected':''}}>Admin</option>
                                        </select>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="form-actions">
                            <div class="text-start">
                                <button type="submit" class="btn btn-info">Update</button>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </form>


</div>

@endsection