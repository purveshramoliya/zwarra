<?php
// app/Models/City.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'country_id','Arcityname','coordinates','shapeType'];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

     public function zones()
    {
        return $this->hasMany(Zones::class);
    }
}

