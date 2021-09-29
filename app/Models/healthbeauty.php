<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class healthbeauty extends Model
{
    use HasFactory;
    public $fillable=['name','price','generic','type','quantity'];
}
