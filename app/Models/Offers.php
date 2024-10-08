<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Offers extends Model
{
    use HasFactory;
    protected $table = 'offers';
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'Logo',
        'Name',
        'Code',
        'Percantage',
        'Count',
        'Type',
        'Status',
        'Servicename',
        'Subservicename',
        'Healthcare',
        'Startdate',
        'Enddate',
    ];
}

