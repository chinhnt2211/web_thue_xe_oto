<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subdistrict extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $visible = [
        "name",
        "type",
        "slug",
        "name_with_type",
        "path",
        "path_with_type",
        // "district_id",
        "district_slug",
    ];

    protected $with = [
        'district'
    ];

    protected $appends = [
        'district_slug',
    ];

    protected function districtSlug(): Attribute
    {
        return Attribute::make(
            get: fn ($value, $attributes) => $this->district->slug,
        );
    }

    public function district()
    {
        return $this->belongsTo(District::class);
    }

    public static function getIds()
    {
        return self::get()->pluck('id');
    }
}
