<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JoinDoctorRequest extends Model
{
    protected $table = 'joindocrequest';
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
     protected $fillable = [
        'firstname', 'lastname', 'gender', 'phone', 'email', 'country',
        'city','languages','degree','department','med_reg_expiry','med_reg_no', 
        'specialization', 'subspecialization', 'scfhs', 'scfhsno',
        'filename', 'service_type', 'description'
    ];
}
