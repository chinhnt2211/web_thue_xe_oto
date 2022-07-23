<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Station extends Model
{
    use HasFactory;

    public $fillable = [
        'name',
        'location_id',
        'phone',
        'capacity',
    ];

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public static function getIds()
    {
        return self::get()->pluck('id');
    }

    public static function findWithAll($id = null)
    {
        return self::with([
            'location',
            'location.city',
            'location.district',
            'location.subdistrict'
        ])
        ->find($id);
    }

    public static function latestWithAll()
    {
        return self::with([
            'location',
            'location.city',
            'location.district',
            'location.subdistrict'
        ])
        ->orderBy('created_at', 'desc');
    }
}
