@extends('layouts.master')

@section('title')
Destination | Wend Travel 
@endsection


@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title" style="margin-bottom: 20px">Destination
					<a href="{{route('destination.create')}}" class="btn btn-primary float-right" style="margin:0 0 15px 0">ADD</a>
                </h4>
                @if (session('status-success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status-success') }}
                    </div>
                @endif
                @if (session('status-danger'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('status-danger') }}
                    </div>
                @endif
                <form class="form-inline" role="form" method="GET">
                    <div class="form-group">
                        <input type="text" class="form-control" name="key" placeholder="Search Key">
                    </div>
                    <button type="submit" class="btn btn-primary">Search</button>
                </form>
            </div>


            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                            <th>ID</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Meta Keywords</th>
                            <th>Meta Descriptions</th>
                            <th>EDIT</th>
                            <th>DELETE</th>
                        </thead>
                        <tbody>
                            @foreach($destination as $dest)
                            <tr>
                                <td>{{$dest->id}}</td>
                                <td>{{$dest->name}}</td>
                                <td>
                                    <img src="{{url('public/images/destinations')}}/{{$dest->image}}" alt="" style="width: 70px">
                                </td>
                                <td>{{$dest->status}}</td>
                                <td>{{$dest->meta_keywords}}</td>
                                <td>{{$dest->meta_descriptions}}</td>
                                <td>
                                    <a href="{{route('destination.edit',$dest->id)}}" class="btn btn-success btn-sm">EDIT</a>
                                </td>
                                <td>
                                    <form action="{{route('destination.destroy',$dest->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">DELETE</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            {{$destination->links()}}
        </div>
    </div>
</div>

@endsection


@section('scripts')

@endsection