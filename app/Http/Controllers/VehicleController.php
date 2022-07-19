<?php

namespace App\Http\Controllers;

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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function get(Request $request)
    {
        if($request->get('id')) {
            $data = $this->model::findWithAll($request->get('id'));
        } else {
            $data = $this->model::latestWithAll()
            ->paginate();
        }

        return response($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStationRequest  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStationRequest  $request
     * @param  \App\Models\Station  $station
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Station  $station
     * @return \Illuminate\Http\Response
     */
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
