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
        $data = self::with([
            'location',
            'location.city',
            'location.district',
            'location.subdistrict'
        ])
            ->find(request()->get('id'));

        return $data;
    }

    public static function latestWithAll()
    {
        $data = self::with([
            'location',
            'location.city',
            'location.district',
            'location.subdistrict'
        ])
            ->orderBy('created_at', 'desc')
            ->paginate();

        foreach($data as $each) {
            $each->address = 
                ($each->location->city ? $each->location->city->name : '') . ', ' .
                ($each->location->district ? $each->location->district->name : '') . ', ' .
                ($each->location->subdistrict ? $each->location->subdistrict->name : '') . ', ' .
                $each->location->address;
        }

        return $data;
    }
}
