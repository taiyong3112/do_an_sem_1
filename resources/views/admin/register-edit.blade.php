@extends('layouts.master')

@section('title')
Edit Register Roles | Wend Travel 
@endsection


@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Edit Role for Registered Users</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <form action="{{route('admin.update',$users->id)}}" method="POST">
                            @csrf
                            @method('PUT')
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" name="name" value="{{$users->name}}">
                                </div>
                                <div class="form-group">
                                    <label>Give Role</label>
                                    <select name="role" class="form-control">
                                        <option value="admin">Admin</option>
                                        <option value="vendor">Vendor</option>
                                        <option value="">None</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-success">Update</button> 
                                <a href="{{route('admin.role-register')}}" type="submit" class="btn btn-danger">Cancel</a> 
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


@section('scripts')

@endsection