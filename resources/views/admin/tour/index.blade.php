@extends('layouts.master')

@section('title')
Tour | Wend Travel 
@endsection


@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title" style="margin-bottom: 20px">Tour
					<a href="{{route('tour.create')}}" class="btn btn-primary float-right" style="margin:0 0 15px 0">ADD</a>
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
                            <th>Summary</th>
                            <th>Content</th>
                            <th>Adults Price</th>
                            <th>Children Price</th>
                            <th>Duration</th>
                            <th>EDIT</th>
                            <th>DELETE</th>
                        </thead>
                        <tbody>
                            @foreach($tour as $tr)
                            <tr>
                                <td>{{$tr->id}}</td>
                                <td>{{$tr->name}}</td>
                                <td>
                                    <img src="{{url('public/images/destinations/tours')}}/{{$tr->image}}" alt="" style="width: 70px">
                                </td>
                                <td>{{$tr->summary}}</td>
                                <td>{{$tr->content}}</td>
                                <td>{{$tr->adult_price}}</td>
                                <td>{{$tr->children_price}}</td>
                                <td>{{$tr->duration}}</td>
                                <td>
                                    <a href="{{route('tour.edit',$tr->id)}}" class="btn btn-success btn-sm">EDIT</a>
                                </td>
                                <td>
                                    <form action="{{route('tour.destroy',$tr->id)}}" method="POST">
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
            {{$tour->links()}}
        </div>
    </div>
</div>

@endsection


@section('scripts')

@endsection