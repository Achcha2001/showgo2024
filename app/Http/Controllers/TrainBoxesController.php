<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TrainBox;

class TrainBoxesController extends Controller
{
    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'train_id' => 'required|integer',
            'name' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        // Create a new TrainBox instance
        $trainBox = TrainBox::create([
            'train_id' => $request->input('train_id'),
            'name' => $request->input('name'),
            'description' => $request->input('description'),
        ]);

        // Check if the TrainBox was created successfully
        if ($trainBox) {
            // Redirect back with a success message and the added data
            return redirect()->back()->with([
                'success' => 'Train package added successfully!',
                'addedTrainBox' => $trainBox,
            ]);
        } else {
            // Redirect back with an error message if something went wrong
            return redirect()->back()->with('error', 'Failed to add train package');
        }
    }

    public function edit($id)
    {
        // Retrieve the train box by its ID
        $trainBox = TrainBox::find($id);

        // Return the view for editing with the train box data
        return view('train-boxes.edit', compact('trainBox'));
    }

    public function update(Request $request, $id)
    {
        
        $request->validate([
            'train_id' => 'required|integer',
            'name' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

       
        $trainBox = TrainBox::find($id);
        $trainBox->update([
            'train_id' => $request->input('train_id'),
            'name' => $request->input('name'),
            'description' => $request->input('description'),
        ]);

        // Redirect to the train-boxes.index route with a success message
        return redirect()->route('train-boxes.index')->with('success', 'Train package updated successfully!');
    }

    public function destroy($id)
    {
        // Find the train box by ID and delete it
        $trainBox = TrainBox::find($id);
        $trainBox->delete();

        // Redirect to the train-boxes.index route with a success message
        return redirect()->route('train-boxes.index')->with('success', 'Train package deleted successfully!');
    }

    public function index()
    {
        // Fetch all train boxes from the database
        $trainBoxes = TrainBox::all();
        return view('train-details', compact('trainBoxes'));
        // Return the view with the train boxes data
        return view('add-reservation-prices', compact('trainBoxes'));
       
    }
    public function show($id)
    {
        // Retrieve the train box by its ID
        $trainBox = TrainBox::find($id);

        // Pass the train box data to the view
        return view('train-details', compact('trainBox'));
    }
}
