<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    public $fillable = [
        'city_id',
        'district_id',
        'subdistrict_id',
        'address',
    ];

    public $visible = [
        'id',
        // 'city_id',
        'city',
        // 'district_id',
        'district',
        // 'subdistrict_id',
        'subdistrict',
        'address',
    ];

    protected $with = [
        'city',
        'district',
        'subdistrict',
    ];

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function district()
    {
        return $this->belongsTo(District::class);
    }

    public function subdistrict()
    {
        return $this->belongsTo(Subdistrict::class);
    }

    public static function create($params, $type)
    {
        $model = new self;
        $model->fill($params);
        $model->type = $type;
        $model->save();
        return $model->id;
    }
}
