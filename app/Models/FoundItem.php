<?php

// app/Models/FoundItem.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoundItem extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'found_object', 'contact_number', 'date'];
}
