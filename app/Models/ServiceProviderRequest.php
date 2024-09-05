<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceProviderRequest extends Model
{
    protected $table = 'serviceproviderrequest';
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'healthcare', 'registernumber', 'country', 'city', 'phone', 'email', 'service_type', 'description',
    ];
}
