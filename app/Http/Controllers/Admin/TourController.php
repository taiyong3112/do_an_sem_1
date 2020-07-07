<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tour;
use App\Models\Destination;
use App\Models\Package;
use Illuminate\Http\Request;
use App\Http\Requests\TourRequest;
use DB;

class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tour = Tour::paginate(5);
        if(request('key')){
            $key = request('key');
            $tour = DB::table('tours')->where('name', 'LIKE', '%'.$key.'%')->paginate(5);
        }
        return view('admin.tour.index',compact('tour'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $destination = Destination::orderBy('name','ASC')->get();
        $package = Package::orderBy('name','ASC')->get();
        return view('admin.tour.create',compact('destination','package'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TourRequest $request)
    {
        $file = $request->file('upload');
        $file_name = $file->getClientOriginalName();
        $file->move(public_path('images/destinations/tours'),$file_name);
        $request->merge(['image'=>$file_name]);
        // dd($request->all());
        
        $tour = new Tour();
        $tour->name = $request->name;
        $tour->destination_id = $request->destination_id;
        $tour->summary = $request->summary;
        $tour->content = $request->content;
        $tour->image = $request->image;
        $tour->adult_price = $request->adult_price;
        $tour->children_price = $request->children_price;
        $tour->duration = $request->duration;
        $tour->meta_keywords = $request->meta_keywords;
        $tour->meta_descriptions = $request->meta_descriptions;

        $tour->save();

        $tour->packages()->attach($request->package);

        
        return redirect()->route('tour.index')->with('status-success','New Tour had been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function show(Tour $tour)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function edit(Tour $tour)
    {
        $destination = Destination::orderBy('name','ASC')->get();
        $package = Package::orderBy('name','ASC')->get();
        return view('admin.tour.edit',compact('tour','destination','package'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function update(TourRequest $request, Tour $tour)
    {
        $file = $request->file('upload');
        $file_name = $file->getClientOriginalName();
        $file->move(public_path('images/destinations/tours'),$file_name);
        $request->merge(['image'=>$file_name]);
        // dd($request->all());
        
        // $tour = new Tour();
        // $tour->name = $request->name;
        // $tour->destination_id = $request->destination_id;
        // $tour->summary = $request->summary;
        // $tour->content = $request->content;
        // $tour->image = $request->image;
        // $tour->adult_price = $request->adult_price;
        // $tour->children_price = $request->children_price;
        // $tour->duration = $request->duration;

        // $tour->save();

        $tour->update($request->all());
        $tour->save();

        $tour->packages()->detach($request->id);
        $tour->packages()->attach($request->package);
        return redirect()->route('tour.index')->with('status-success','New Tour had been added');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tour $tour)
    {
        $tour->delete();
        $tour->packages()->detach($tour->id);
        return redirect()->route('tour.index')->with('status-success','Tour had been deleted');
    }
}