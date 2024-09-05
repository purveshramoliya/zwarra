<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
    use HasFactory;
    protected $table = 'payments';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'transacationid',
        'serviceid',
        'servicename',
        'subserviceid',
        'subservicename',
        'packageid',
        'packagename',
        'firstname',
        'lastname',
        'phone',
        'email',
        'address',
        'country',
        'city',
        'healthcareid',
        'paymentdate',
        'bookingdate',
        'timeslot',
        'price',
        'paymentmethod',
        'accountno',
        'cardholname',
        'cardno',
        'cardexpdate',
        'cvvno',
        'status',
        'bookingstatus',
        'comment',
        'other',
        'description',
    ];
}
