<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Custom_MedicineName extends Model
{
    protected $connection= 'mysql_medicine_name';

    protected $table = 'brands_url';

    use HasFactory;


}
