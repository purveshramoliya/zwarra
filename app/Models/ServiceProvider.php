<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class ServiceProvider extends Authenticatable
{
    protected $table = 'serviceprovider';
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'Arname',
        'Enname',
        'email',
        'password',
        'Phone',
        'Crnumber',
        'City',
        'Countrycode',
        'Vat',
        'Regcertificate',
        'Regcertificate_url',
        'Typeofservice',
        'Financialshare',
        'Location',
        'Visitfees',
        'Share',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'Password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        //'email_verified_at' => 'datetime',
    ];

     public function Bankings()
    {
        return $this->hasOne(Bankings::class,'Healthcare');
    }

     public function zones()
    {
        return $this->hasMany(Zones::class);
    }
}