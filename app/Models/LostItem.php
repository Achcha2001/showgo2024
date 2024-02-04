<?php

// app/Models/LostItem.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LostItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'contact_number',
        'lost_object',
        'date',
        'train',
    ];
}
