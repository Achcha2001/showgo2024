<?php
// app/Models/SeatBooking.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeatBooking extends Model
{
    use HasFactory;

    protected $fillable = [
        'ticket_count',
        'id_number',
        'date',
        'train_name',
        'from',
        'to',
        // Add more columns as needed
    ];
}
