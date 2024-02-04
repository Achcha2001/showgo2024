<?php


// app/Models/TrainBox.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainBox extends Model
{
    use HasFactory;

    protected $fillable = [
        'train_id',
        'name',
        'description',
        // Add other fields as needed
    ];

    // Define relationships if needed
    // For example, if you have a Train model related to TrainBox
    // Uncomment the line below and adjust the relationship accordingly
    // public function train()
    // {
    //     return $this->belongsTo(Train::class);
    // }
}
