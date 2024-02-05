<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SeatBooking;

class SeatController extends Controller
{
    public function proceedToPayment(Request $request)
    {
        
        $validatedData = $request->validate([
            'ticket_count' => 'required|integer|min:1',
            'id_number' => 'required|string',
            'date' => 'required|date',
            'train_name' => 'required|string',
            'from' => 'required|string',
            'to' => 'required|string',
            
        ]);

       
        SeatBooking::create($validatedData);

       
        return view('payment-confirmation', $validatedData);
    }
}
