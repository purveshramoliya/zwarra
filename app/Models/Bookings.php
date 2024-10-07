<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Bookings extends Model
{
    use HasFactory;
    protected $table = 'bookings';
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'Patientid',
        'Name',
        'Address',
        'Doctor',
        'Servicename',
        'Subservices',
        'Qty',
        'Status',
        'Healthcare',
        'Date',
        'Timeslot',
        'Price',
        'Patients',
        'price',
        'Description',
        'Comments',
        'Others',
        'Typeoftest',
        'Typeofvisit',
        'Gender',
        'Phone',
    ];

    public function bookingsattachment()
    {
        return $this->hasMany(BookingsAttachment::class);
    }
}