<?php

namespace App\Models;

use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use HasFactory, HasApiTokens;

    public $timestamps = false;

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

    public function avatar()
    {
        return $this->belongsTo(Image::class, 'avatar');
    }

    public function location()
    {
        return $this->belongsTo(Location::class);
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
}
