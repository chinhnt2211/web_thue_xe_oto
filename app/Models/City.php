<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $visible = [
        "id",
        "name",
        "slug",
        "type",
        "name_with_type",
    ];

    public static function getIds()
    {
        return self::get()->pluck('id');
    }
}
