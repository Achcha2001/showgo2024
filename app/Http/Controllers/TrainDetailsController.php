<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TrainBox;

class TrainDetailsController extends Controller
{
    public function show()
    {
        

        return view('train-details');
    }

    public function store(Request $request, $trainId)
    {
        $trainBox = TrainBox::find($trainId);

        // Save train details to train_boxes table
        // TrainBox::create([
        //     'train_id' => $trainBox->id,
        //     'name' => $trainBox->name,
        //     'description' => $trainBox->description,
        // ]);

        return redirect()->route('train-details.show');
    }
}
