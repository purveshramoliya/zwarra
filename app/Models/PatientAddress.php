<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientAddress extends Model
{
    use HasFactory;
    protected $table = 'patientaddress';
    protected $fillable = [
        'Userid',
        'Name',
        'Address',
        'Status',
    ];
}
