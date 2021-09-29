<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class babycare extends Model
{
    use HasFactory;
    public $fillable=['name','brand','price','type','quantity','size'];

}
