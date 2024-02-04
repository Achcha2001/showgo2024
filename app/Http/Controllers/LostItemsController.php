<?php

// app/Http/Controllers/LostItemController.php

namespace App\Http\Controllers;

use App\Models\LostItem;
use Illuminate\Http\Request;

class LostItemsController extends Controller
{
    public function index()
    {
        // Retrieve all lost items
        $lostItems = LostItem::all();

        return view('lost-item-form', ['lostItems' => $lostItems]);
    }

    public function submit(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required',
            'contact_number' => 'required',
            'lost_object' => 'required',
            'date' => 'required|date',
            'train' => 'required',
        ]);

        // Create a new LostItem model instance and save the data
        LostItem::create([
            'name' => $request->input('name'),
            'contact_number' => $request->input('contact_number'),
            'lost_object' => $request->input('lost_object'),
            'date' => $request->input('date'),
            'train' => $request->input('train'),
        ]);

        // Redirect back to the form page
        return redirect()->route('lost-item-form')->with('success', 'Lost item submitted successfully!');
    }
}

