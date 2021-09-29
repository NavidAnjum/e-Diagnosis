<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeminieHygiene extends Model
{
    use HasFactory;
    public $fillable=['price',
        'name',
        'type',
        'quantity'
        ];
}
