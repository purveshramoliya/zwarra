<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class GeneralJoinRequest extends Model
{
    protected $table = 'generaljoinrequest';
    use HasFactory;

    protected $fillable = [
        'Firstname',
        'Lastname',
        'Email',
        'Phone',
        'Type',
        'Status',
        'Country',
        'City',
        'Type',
        'Male',
        'Female',
        'Homevisitnparamedic',
        'Telemedicinennurse',
        'Allnlabtech',
        'Othersnphysio',
        'Description',
        'Price',
        'Companyname',
        'Noofemployee',
        'Insurance'
    ];
}
