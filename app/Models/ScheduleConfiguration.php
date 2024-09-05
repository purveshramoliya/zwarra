<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScheduleConfiguration extends Model
{
   public $table = 'scheduleconfiguration';
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'Session',
        'Servicetype',
        'Dayname',
        'Capacity',
        'Starttime',
        'Endtime',
    ];
}
