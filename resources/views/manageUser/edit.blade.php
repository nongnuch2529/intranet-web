@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Users.') }}</div>
                    <div class="card-body">
                        <form action="{{ route('user.update', $users->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                            <div class="form-group row">
                                <label for="colFormLabel" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name" name="name" value="{{$users->name}}">
                                </div>                                
                            </div>
                             <div class="form-group row">
                                <label for="colFormLabel" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="email" name="email" value="{{$users->email}}" readonly>
                                </div>                                
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabel" class="col-sm-2 col-form-label">Phone</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="phone" name="phone" value="{{$users->phone}}">
                                </div>                                
                            </div>
                             <div class="form-group row">
                                <label for="colFormLabel" class="col-sm-2 col-form-label">Status</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="status" name="status">
                                        <option value="" disabled>--- Change Status User ---</option>
                                        <option value="1" {{ $users->status == "1"  ? 'selected':'' }}>Activate</option>
                                        <option value="0" {{ $users->status == "0"  ? 'selected':'' }}>Deactivate</option>                                    
                                    </select>
                                </div>                                
                            </div>
                             <div class="form-group row">
                                <label for="colFormLabel" class="col-sm-2 col-form-label">Role Name</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="role_name" name="role_name">
                                        <option value="" disabled>--- Change Role ---</option>
                                        <option value="admin" {{ $users->role_name == "admin"  ? 'selected':'' }}>admin</option>
                                        <option value="user" {{ $users->role_name == "user"  ? 'selected':'' }}>user</option>                                    
                                    </select>
                                </div>                                
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>                            
                        </form>                        
                    </div>
                </div>
            </div>
        </div>
    </div>         
</div>
@endsection



