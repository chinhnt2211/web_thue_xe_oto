<?php

namespace App\Http\Controllers;

use App\Enums\CityEnum;
use App\Models\City;
use App\Models\District;
use App\Models\Subdistrict;
use Illuminate\Http\Request;

class EnumController extends Controller
{
    // public function administrative()
    // {
    //     $data = City::get();
    //     foreach($data as $city) {
    //         $city->districts = District::where('city_id', $city->id)->get();
    //         foreach($city->districts as $district) {
    //             $district->subdistricts = Subdistrict::where('district_id', $district->id)->get();
    //         }
    //     }
    //     return $data;
    // }

    public function cities()
    {
        return City::get();
    }

    public function districts(Request $request)
    {
        $city_id = $request->get('cityId') ? $request->get('cityId') : City::first()->id;

        return District::where('city_id', '=', $city_id)->get();
    }

    public function subdistricts(Request $request)
    {
        $district_id = $request->get('districtId') ? $request->get('districtId') : District::first()->id;
        
        return Subdistrict::where('district_id', '=', $district_id)->get();
    }
}
