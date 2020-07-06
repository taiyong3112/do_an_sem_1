@extends('layouts.master')

@section('title')
Edit Package | Wend Travel 
@endsection


@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Edit Package</h4>
            </div>
            <div class="card-body col-md-6">
                <form action="{{route('package.update',$package->id)}}" method="POST" role="form" class="form" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" value="{{$package->name}}">
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <div class="custom-control custom-radio">
                            <label>
                                <input type="radio" name="status" value="1" checked>
                                Publish
                            </label>
                            <label>
                                <input type="radio" name="status" value="0">
                                Un Publish
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Edit</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection


@section('scripts')

@endsection