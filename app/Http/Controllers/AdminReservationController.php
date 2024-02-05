<?php
// app/Http/Controllers/AdminReservationController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminReservationController extends Controller
{
    public function showAddReservationPricesForm()
    {
        return view('add-reservation-prices');
    }

    
}
