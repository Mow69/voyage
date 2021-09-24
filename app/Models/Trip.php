<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
        'destination',
        'description',
        'date',
        'cost',
        'organizer',
        'rating',
        'picture',
    ];
}
