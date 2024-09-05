<?php

// app/Models/Zone.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zones extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'country_id', 'country_name', 'city_id', 'city_name'];

}
