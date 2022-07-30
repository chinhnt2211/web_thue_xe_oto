<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeatingCapacity extends Model
{
    use HasFactory;

    protected $visible = [
        'seating_capacity',
    ];

    public static function getCapacities()
    {
        return self::get()->pluck('seating_capacity');
    }


}
