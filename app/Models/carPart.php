<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class carPart extends Model
{
    use HasFactory;

    protected $fillable = [
        'make',
        'car_name',
        'engineType',
        'price',
        'context',
        'img1'
    ];
        
}
