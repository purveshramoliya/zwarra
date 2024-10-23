<?php

// app/Models/Country.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $fillable = ['id','Enname','Arname','coordinates','shapeType'];

    public function cities()
    {
        return $this->hasMany(City::class);
    }

     public function zones()
    {
        return $this->hasMany(Zones::class);
    }
}

