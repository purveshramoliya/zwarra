<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Bankings extends Model
{
    protected $table = 'bankinginfo';
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'Logo',
        'Name',
        'Phone',
        'Email',
        'Doctor',
        'Accountname',
        'Accountnumber',
        'Bankname',
        'Ibannumber',
        'Serviceprovider',
        'Healthcare',

    ];

     public function serviceProvider()
    {
        return $this->belongsTo(ServiceProvider::class, 'Healthcare');
    }
}
