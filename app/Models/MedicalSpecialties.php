<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalSpecialties extends Model
{
    public $table = 'medicalspecialties';
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'Logo',
        'Enname',
        'Arname',
        'Estimatedtime',
        'Status',
    ];
}
