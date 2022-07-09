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
        'address',
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
}
