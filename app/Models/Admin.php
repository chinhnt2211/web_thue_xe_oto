<?php

namespace App\Models;

use App\Enums\AdminRoleEnum;
use App\Enums\GenderEnum;
use Attribute;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use HasFactory, HasApiTokens;

    public $fillable = [
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

    protected function genderName(): Attribute
    {
        return Attribute::make(
            get: fn ($value, $attributes) => GenderEnum::getKey($attributes->gender),
        );
    }

    protected function roleName(): Attribute
    {
        return Attribute::make(
            get: fn ($value, $attributes) => AdminRoleEnum::getKey($attributes->role),
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
            'avatar',
            'cic_front',
            'cic_back',
            'location',
            'location.city',
            'location.district',
            'location.subdistrict',
            'station',
        ])
            ->find(request()->get('id'));

        return $data;
    }

    public static function latestWithLess()
    {
        $data = self::orderBy('created_at', 'desc')
            ->with([
                'avatar',
                'station',
            ])
            ->append([
                'genderName',
                'roleName',
            ])
            ->paginate();;


        return $data;
    }
}
