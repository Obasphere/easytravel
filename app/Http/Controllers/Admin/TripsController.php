<?php

namespace Easytravel\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Easytravel\Http\Controllers\Controller;
use Easytravel\City;
use Easytravel\Trip;

class TripsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.trips.index')->with('trips', Trip::all()->sortBy('from'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.trips.create')->with('cities', City::all()->sortBy('state'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Trip $trip)
    {
        $trip->from = $request->from;
        $trip->to = $request->to;
        $trip->cost = $request->cost;
        $trip->departure_time = $request->time;
        $trip->departure_date = $request->date;
        $trip->save();
        return redirect()->route('admin.trips.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Trip $trip)
    {
        $arr['trip'] = $trip;
        return view('admin.trips.edit', $arr)->with('cities', City::all()->sortBy('state'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trip $trip)
    {
        $trip->from = $request->from;
        $trip->to = $request->to;
        $trip->cost = $request->cost;
        $trip->departure_time = $request->time;
        $trip->departure_date = $request->date;
        $trip->save();
        return redirect()->route('admin.trips.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Trip::destroy($id);
        return redirect()->route('admin.trips.index');
    }
}
