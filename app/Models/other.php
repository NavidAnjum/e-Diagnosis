<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class other extends Model
{
    use HasFactory;
    public $fillable=['name','price','type','size','quantity'];
}
