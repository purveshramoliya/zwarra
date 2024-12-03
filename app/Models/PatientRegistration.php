<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use Laravel\Sanctum\HasApiTokens;

class PatientRegistration extends Model implements Authenticatable
{
    use AuthenticableTrait,HasFactory,HasApiTokens;
    protected $table = 'patientregistration';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'Firstname',
        'Lastname',
        'Relatedto',
        'Country',
        'Email',
        'Phone',
        'Username',
        'Password',
        'Confirmpassword',
        'Dob',
        'Bloodgroup',
        'Relationship',
        'InsuranceCompany',
        'Insuranceaccno',
        'Gender',
        'Status',
        'Nationalid',
        'Type',
        'Iqamatype',
        'Age',
        'Nationality',
        'Maritalstatus',
        'Height',
        'Weight',
        'Borderno',
        'Sponserid',
        'Passportid',
        'Description',
        'Email',
        'Otp',
    ];

}
