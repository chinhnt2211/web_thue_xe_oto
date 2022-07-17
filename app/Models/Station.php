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

    public static function withAll()
    {
        return self::with([
            'location',
            'location.city',
            'location.district',
            'location.subdistrict'
        ]);
    }
    
    public function latest($column = 'created_at')
    {
        return $this->orderBy($column, 'desc');
    }
}
