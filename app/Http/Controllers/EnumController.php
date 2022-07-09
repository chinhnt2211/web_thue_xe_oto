<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class EnumController extends Controller
{
    public function city()
    {
        return City::get();
    }
}
