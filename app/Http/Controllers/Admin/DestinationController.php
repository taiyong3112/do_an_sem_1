<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Destination;
use Illuminate\Http\Request;
use App\Http\Requests\DestinationRequest;
use DB;

class DestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $destination = Destination::paginate(5);
        if(request('key')){
            $key = request('key');
            $destination = DB::table('destinations')->where('name', 'LIKE', '%'.$key.'%')->paginate(5);
        }
        return view('admin.destination.index',compact('destination'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.destination.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DestinationRequest $request)
    {
        $file = $request->file('upload');
        $file_name = $file->getClientOriginalName();
        $file->move(public_path('images/destinations'),$file_name);
        $request->merge(['image'=>$file_name]);

        Destination::create($request->all());
        return redirect()->route('destination.index')->with('status-success','The Destination had been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Destination  $destination
     * @return \Illuminate\Http\Response
     */
    public function show(Destination $destination)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Destination  $destination
     * @return \Illuminate\Http\Response
     */
    public function edit(Destination $destination)
    {
        return view('admin.destination.edit',compact('destination'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Destination  $destination
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Destination $destination)
    {
        $file = $request->file('upload');
        $file_name = $file->getClientOriginalName();
        $file->move(public_path('images/destinations'),$file_name);
        $request->merge(['image'=>$file_name]);

        $destination->update($request->all());
        return redirect()->route('destination.index')->with('status-success','The Destination had been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Destination  $destination
     * @return \Illuminate\Http\Response
     */
    public function destroy(Destination $destination)
    {
        $destination->delete();
        return redirect()->route('destination.index')->with('status-danger','The destination had been deleted');
    }
}
