@extends('layouts.master')

@section('title')
Create New Tour | Wend Travel 
@endsection


@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Create New Tour</h4>
            </div>
            <div class="card-body col-md-6">
                <form action="{{route('tour.store')}}" method="POST" role="form" class="form" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Destination Name">
                    </div>
                    @error('name')
                        <small class="help-block text-danger">
                            {{$message}}
                        </small>
                    @enderror
                    <div class="form-group">
                        <label>Destination</label>
                        <select name="destination_id" class="form-control">
                            <option value="">Choose one</option>
                            @foreach($destination as $dest)
                            <option value="{{$dest->id}}">{{$dest->name}}</option>
                            @endforeach
                        </select>
                        @error('destination_id')
                            <small class="help-block text-danger">
                                {{$message}}
                            </small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Image</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile" name="upload">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                        @error('upload')
                            <small class="help-block text-danger">
                                {{$message}}
                            </small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Summary</label>
                        <textarea name="summary" class="form-control" rows="3"></textarea>
                        @error('summary')
                            <small class="help-block text-danger">
                                {{$message}}
                            </small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Content</label>
                        <textarea name="content" class="form-control" rows="7"></textarea>
                        @error('content')
                            <small class="help-block text-danger">
                                {{$message}}
                            </small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Adult Price</label>
                        <input type="adult_price" class="form-control" name="adult_price" placeholder="Adult Price">
                        @error('adult_price')
                            <small class="help-block text-danger">
                                {{$message}}
                            </small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Child Price</label>
                        <input type="children_price" class="form-control" name="children_price" placeholder="Child Price">
                        @error('children_price')
                            <small class="help-block text-danger">
                                {{$message}}
                            </small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Duration</label>
                        <input type="duration" class="form-control" name="duration" placeholder="Tour's Duration">
                        @error('duration')
                            <small class="help-block text-danger">
                                {{$message}}
                            </small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Package</label>
                        @foreach($package as $pac)
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="{{$pac->id}}" name="package[]">
                                {{$pac->name}}
                            </label>
                        </div>
                        @endforeach
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
                    <div class="form-group">
                        <label>Meta Keywords</label>
                        <input type="text" class="form-control" name="meta_keywords" placeholder="Meta Keywords">
                    </div>
                    <div class="form-group">
                        <label>Meta Description</label>
                        <input type="text" class="form-control" name="meta_descriptions" placeholder="Meta Descriptions">
                    </div>
                    <button type="submit" class="btn btn-primary">Send invitation</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection


@section('scripts')
    <script type="text/javascript">
        $(".custom-file-input").on("change", function() {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
    </script>    
@endsection