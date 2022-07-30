<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
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

    protected $visible = [
        'id',
        'name',
        // 'location_id',
        // 'location',
        'address',
        'phone',
        'capacity',
    ];

    protected $appends = [
        'address',
    ];

    protected $with = [
        'location',
        'location.city',
        'location.district',
        'location.subdistrict'
    ];

    protected function address(): Attribute
    {
        return Attribute::make(
            get: fn ($value) =>
            $this->location?->city?->name . ', ' .
                $this->location?->district?->name . ', ' .
                $this->location?->subdistrict?->name . ', ' .
                $this->location?->address,
        );
    }

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public static function getIds()
    {
        return self::get()->pluck('id');
    }

    public static function findDetail()
    {
        return self::query()
            ->find(request()->get('id'))
            ->makeVisible([
                'location',
                'location.city',
                'location.district',
                'location.subdistrict'
            ]);
    }

    public static function latestPaginate()
    {
        $data = self::query()
            ->orderBy('created_at', 'desc')
            ->paginate();

        return $data;
    }
}
