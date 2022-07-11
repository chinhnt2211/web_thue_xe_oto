<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\District;
use App\Models\Subdistrict;
use Illuminate\Http\Request;

class EnumController extends Controller
{
    public function administrative()
    {
        $data = City::get();
        foreach($data as $city) {
            $city->districts = District::where('city_id', $city->id)->get();
            foreach($city->districts as $district) {
                $district->subdistricts = Subdistrict::where('district_id', $district->id)->get();
            }
        }
        return $data;
    }

    public function city()
    {
        return City::get();
    }

    public function district(Request $request)
    {
        if($request->get('city_id')) {
            return District::where('city_id', '=', $request->get('city_id'))->get();
        }

        return District::get();
    }

    public function subdistrict(Request $request)
    {
        if($request->get('district_id')) {
            return Subdistrict::where('district_id', '=', $request->get('district_id'))->get();
        }
        return Subdistrict::get();
    }
}
