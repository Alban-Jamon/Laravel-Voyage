<?php

namespace App\Http\Controllers;

use App\Models\Voyage;
use DateTime;
use Illuminate\Http\Request;


class VoyageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $voyages = Voyage::all()->sortBy('views',SORT_REGULAR,true)->take(4);
        return view('admin\home',['voyages' => $voyages]);
    }

    /**
     * Display a listing of 10 resources.
     *
     * @return \Illuminate\Http\Response
     */
    public function someTrips()
    {
        $voyages = Voyage::all()->sortBy('views',SORT_REGULAR,true)->take(10);
        return view('admin\lesVoyages',['voyages' => $voyages]);
    }

    /**
     * Display a listing of all resources with gestions buttons.
     *
     * @return \Illuminate\Http\Response
     */
    public function gestion()
    {
        $voyages = Voyage::all();
        return view('admin\trips',['voyages' => $voyages]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin\addVoyage');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Voyage::create([
            'location' => $request->location,
            'description' => $request->description,
            'travelDate' =>$request->travelDate,
            'price' => $request->price,
            'organizer' => $request->organizer,
            'note' => $request->note,
            'views' => $request->views
        ]);
        return redirect(route('gestion'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $voyage = Voyage::find($id);
        return view('admin\show',['voyage' => $voyage]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Voyage::find($id)->delete();          
        return redirect(route('gestion'));
    }
}
