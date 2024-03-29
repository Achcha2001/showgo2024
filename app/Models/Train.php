<?php
// app/Models/Train.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    protected $fillable = [
        'name', 'description', 'schedule', 'type', 'status'
        
    ];

    public function trainDetails()
    {
        return $this->hasMany(TrainDetail::class);
    }
}
