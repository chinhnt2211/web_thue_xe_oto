<?php

namespace App\Models;

use App\Enums\AdminRoleEnum;
use App\Enums\AdminStatusEnum;
use App\Enums\GenderEnum;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
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

    protected function gender(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => GenderEnum::getKey($value),
            set: fn ($value) => GenderEnum::getValue($value),
        );
    }

    protected function role(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => AdminRoleEnum::getKey($value),
            set: fn ($value) => AdminRoleEnum::getValue($value),
        );
    }

    protected function status(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => AdminStatusEnum::getKey($value),
            set: fn ($value) => AdminStatusEnum::getValue($value),
        );
    }

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

    public static function findWithAll($id = null)
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
