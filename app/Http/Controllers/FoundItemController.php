<?php


namespace App\Http\Controllers;

use App\Models\FoundItem;
use Illuminate\Http\Request;

class FoundItemController extends Controller
{
    public function index()
    {
       
        $foundItems = FoundItem::all();

        return view('found-item-form', ['foundItems' => $foundItems]);
    }

    public function submit(Request $request)
    {
        
        $request->validate([
            'name' => 'required',
            'found_object' => 'required',
            'contact_number' => 'required',
            'date' => 'required|date',
        ]);

        // Create a new FoundItem model instance and save the data
        FoundItem::create([
            'name' => $request->input('name'),
            'found_object' => $request->input('found_object'),
            'contact_number' => $request->input('contact_number'),
            'date' => $request->input('date'),
        ]);

        // Redirect back to the form page
        return redirect()->route('found-items.form')->with('success', 'Found item submitted successfully!');
    }
}
