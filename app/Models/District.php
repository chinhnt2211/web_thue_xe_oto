<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $visible = [
        "id",
        "name",
        "type",
        "slug",
        "name_with_type",
        "path",
        "path_with_type",
        // "city_id",
        "city_slug",
    ];

    protected $with = [
        'city'
    ];

    protected $appends = [
        'city_slug',
    ];

    protected function citySlug(): Attribute
    {
        return Attribute::make(
            get: fn ($value, $attributes) => $this->city->slug,
        );
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public static function getIds()
    {
        return self::get()->pluck('id');
    }

}
