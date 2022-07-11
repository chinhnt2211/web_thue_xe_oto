<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;
    public $timestamps = false;

    public $fillable = [
        'name',
        'status',
        'description',
        'license_number',
        'price',
        'rent_price',
        'fine',
        'station_id',
        'brand_id',
        'seating_capacities_id',
    ];
}
