<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;
use App\Models\TrainBox;

class TrainBoxController extends Controller
{
    public function store(Request $request, $trainId)
    {
        $train = Train::find($trainId);

      
        TrainBox::create([
            'train_id' => $train->id,
            'name' => $train->name,
            'description' => $train->description,
        ]);

        return redirect()->route('train-details', ['trainId' => $trainId]);
    }
}
