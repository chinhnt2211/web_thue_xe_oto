<?php

namespace App\Http\Controllers;

use App\Enums\AdminRoleEnum;
use App\Enums\AdminStatusEnum;
use App\Enums\CityEnum;
use App\Enums\GenderEnum;
use App\Enums\VehicleStatusEnum;
use App\Models\Brand;
use App\Models\City;
use App\Models\District;
use App\Models\SeatingCapacity;
use App\Models\Station;
use App\Models\Subdistrict;
use Illuminate\Http\Request;

class OptionController extends Controller
{
    public function adminStatuses()
    {
        return AdminStatusEnum::getInstances();
    }

    public function adminRoles()
    {
        return AdminRoleEnum::getInstances();
    }

    public function genders()
    {
        return GenderEnum::getInstances();
    }

    public function brands()
    {
        return Brand::getNames();
    }

    public function seatingCapacities()
    {
        return SeatingCapacity::getCapacities();
    }

    public function vehicleStatuses()
    {
        return VehicleStatusEnum::getInstances();
    }

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
