<?php

namespace Easytravel\Http\Controllers;

use Illuminate\Http\Request;
use Easytravel\Trip;
use Easytravel\Booking;

class BookingsController extends Controller
{
    public function getTrips()
    {
        $getTrips = Trip::select('from')->distinct()->get();
        return view('welcome')->with('trips', $getTrips);
    }

    public function searchRoutes(Request $request)
    {
        try {
            $getRoutes = Trip::where('from', $request->from)->select('to')->orderBy('to', 'desc')->get();

            $data = [];

            for($i = 0; $i < count($getRoutes); $i++)
            {
                array_push($data, $getRoutes[$i]->to);
            }

            return response()->json(['message' => 'Routes retrieved successfully', 'error' => false, 'data' => $data], 200);
        } catch(\Exception $e) {
            return response()->json(['message' => $e->getMessage(), 'error' => true, 'data' => []], 500);
        }


        try {
            $getCost = Trip::where('to', $request->to)->select('cost')->get();

            $data = [];

            for($i = 0; $i < count($getCost); $i++)
            {
                array_push($data, $getCost[$i]->cost);
            }

            return response()->json(['message' => 'Routes retrieved successfully', 'error' => false, 'data' => $data], 200);
        } catch(\Exception $e) {
            return response()->json(['message' => $e->getMessage(), 'error' => true, 'data' => []], 500);
        }
    }

    public function bookNow()
    {
        return view('/welcome/booking')->with('trips', Trip::all());
    }
}
