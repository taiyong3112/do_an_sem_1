<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destination;
use App\Models\Tour;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $top_tour = Tour::limit(6)->orderBy('id','DESC')->get();   
        return view('home',compact('top_tour'));
    }

    public function homepage()
    {
        return view('index');
    }

    public function destination($id)
    {
        $destination = Destination::find($id);
        $tours = Tour::where('destination_id',$id)->where('status',1)->orderBy('id', 'ASC')->get();
        return view('pages.tourlist',compact('id','tours'));
    }
}
