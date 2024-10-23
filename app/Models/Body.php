<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Body extends Model
{
    use HasFactory;
    protected $fillable = [
        'Logo',
        'Enname',
        'Arname',
        'Endescription',
        'Ardescription',
        'service',
        'mainservicetype',
        'servicetype',
        'packages',
        'Single',
        'status'
    ];
}
