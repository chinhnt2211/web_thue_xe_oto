<?php

namespace App\Models;

use App\Enums\VehicleStatusEnum;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

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
        'seating_capacity_id',
    ];

    protected $visible = [
        'id',
        'name',
        'status',
        'description',
        'license_number',
        'price',
        'rent_price',
        'fine',
        // 'station_id',
        'station',
        // 'brand_id',
        'brand',
        // 'seating_capacity_id',
        'seating_capacity',
    ];

    protected $with = [
        'station',
        'brand',
        'seatingCapacity',
    ];

    public function station()
    {
        return $this->belongsTo(Station::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function seatingCapacity()
    {
        return $this->belongsTo(SeatingCapacity::class, 'seating_capacity_id');
    }

    public static function findDetail()
    {
        return self::query()
            ->find(request()->get('id'));
    }

    public static function latestPaginate($id = null)
    {
        return self::query()
            ->latest()
            ->paginate();
    }
}
