<?php

namespace App\Models;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class AllDoctors extends Authenticatable
{
    protected $table = 'alldoctors';
     use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'Arname',
        'Enname',
        'Email',
        'Password',
        'Phone',
        'Licenceno',
        'yearofexp',
        'Medicalspec',
        'Position',
        'Status',
        'Logo',
        'Languages',
        'Department',
        'Degree',
        'Med_reg_expiry',
        'Med_reg_no'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'Password',
       // 'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        //'email_verified_at' => 'datetime',
    ];

    public function attachment()
    {
        return $this->hasMany(Attachment::class, 'record_id', 'id');
    }
}
