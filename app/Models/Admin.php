<?php

namespace App\Models;

use App\Enums\AdminRoleEnum;
use App\Enums\AdminStatusEnum;
use App\Enums\GenderEnum;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use HasFactory, HasApiTokens;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'location_id',
        'phone',
        'password',
        'cic_number',
        'cic_front',
        'cic_back',
        'dob',
        'gender',
        'avatar',
        'role',
        'status',
        'station_id',
    ];

    protected $visible = [
        'id',
        'first_name',
        'last_name',
        'email',
        // 'location_id',
        'location',
        'phone',
        // 'password',
        // 'cic_number',
        // 'cic_front',
        // 'cic_back',
        'dob',
        'gender',
        'avatar',
        'role',
        'status',
        // 'station_id',
        'station',
    ];

    protected $with = [
        'location',
        'avatar',
        'station',
    ];

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function avatar()
    {
        return $this->belongsTo(Image::class, 'avatar');
    }

    public function cic_front()
    {
        return $this->belongsTo(Image::class, 'cic_front');
    }

    public function cic_back()
    {
        return $this->belongsTo(Image::class, 'cic_back');
    }

    public function station()
    {
        return $this->belongsTo(Station::class);
    }

    public static function findDetail($id = null)
    {
        $data = self::with([
            'cic_front',
            'cic_back',
            'location',
            'location.city',
            'location.district',
            'location.subdistrict',
        ])
            ->find(request()->get('id'));

        return $data;
    }

    public static function latestPaginate()
    {
        $data = self::orderBy('created_at', 'desc')
            ->paginate();

        return $data;
    }
}
