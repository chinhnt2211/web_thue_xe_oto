<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreVehicleRequest;
use App\Http\Requests\UpdateVehicleRequest;
use App\Models\Brand;
use App\Models\SeatingCapacity;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VehicleController extends Controller
{
    private $object;

    function __construct() {
        $this->model = Vehicle::class;
    }

    public function index()
    {
        return response($this->model::findDetail());
    }

    public function page()
    {
        return response($this->model::latestPaginate());
    }

    public function all()
    {
        return response($this->model::get());
    }

    public function store(StoreVehicleRequest $request)
    {
        DB::beginTransaction();
        try {
            $vehicle = (new Vehicle())->fill($request->validated());

            if($request->get('brand')) {
                $brand = Brand::firstOrCreate($request->get('brand'));
                $vehicle->brand = $brand->id; 
            }

            if($request->get('seatingCapacity')) {
                $seating_capacity = SeatingCapacity::firstOrCreate($request->get('seatingCapacity'));
                $vehicle->seating_capacity = $seating_capacity->id; 
            }

            $vehicle->save();

            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            return response($th->getMessage(), 500);
        }

        return response("success");
    }

    public function update(UpdateVehicleRequest $request, Vehicle $vehicle)
    {
        DB::beginTransaction();
        try {
            $vehicle->fill($request->validated());

            if($request->get('brand')) {
                $brand = Brand::firstOrCreate($request->get('brand'));
                $vehicle->brand = $brand->id; 
            }

            if($request->get('seatingCapacity')) {
                $seating_capacity = SeatingCapacity::firstOrCreate($request->get('seatingCapacity'));
                $vehicle->seating_capacity = $seating_capacity->id; 
            }

            $vehicle->save();

            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            return response($th->getMessage(), 500);
        }

        return response("success");
    }

    public function destroy(Vehicle $vehicle)
    {
        try {
            $vehicle->delete();
        } catch (\Throwable $th) {
            return response($th->getMessage(), 500);
        }

        return response("success");
    }
}
