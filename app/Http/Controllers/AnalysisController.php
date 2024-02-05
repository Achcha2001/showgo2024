<?php
// app/Http/Controllers/AnalysisController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SeatBooking;

class AnalysisController extends Controller
{
    public function index()
    {
        return view('analysis');
    }

    public function getMostBookedTrains()
    {
      
        $trainBookingData = SeatBooking::select('train_name')
            ->selectRaw('count(*) as booking_count')
            ->groupBy('train_name')
            ->orderByDesc('booking_count')
            ->take(5) // Get top 5 most booked trains
            ->get();

        return response()->json($trainBookingData);
    }
}
