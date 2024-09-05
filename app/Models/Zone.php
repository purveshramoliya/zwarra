<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
    public $table = 'zone';
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'country_id',
        'city_id',
        'zone_id',
        'shape_type',
        'coordinates',
        'Healthcareid',
        'Enname',
        'Arname',
        'Status',
    ];

    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id');
    }

    public function city()
    {
        return $this->belongsTo(City::class, 'city_id');
    }

     public function zones()
    {
        return $this->belongsTo(Zones::class, 'zone_id');
    }

     public function serviceprovider()
    {
        return $this->belongsTo(ServiceProvider::class, 'Healthcareid');
    }

}
