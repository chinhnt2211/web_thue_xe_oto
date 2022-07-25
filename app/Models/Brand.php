<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    public $fillable = [
        'name',
    ];

    public $visible = [
        'id',
        'name',
    ];

    public static function getIds()
    {
        return self::get()->pluck('id');
    }
}
