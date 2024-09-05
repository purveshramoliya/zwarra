<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingsAttachment extends Model
{
    protected $table = 'bookingsattachments';
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'bookings_id',
        'filename',
        'file_path',
    ];

    public function bookings()
    {
        return $this->belongsTo(Bookings::class);
    }

    public function allDoctors()
    {
        return $this->belongsTo(AllDoctors::class, 'record_id', 'id');
    }
}
