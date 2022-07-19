<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVehicleRequest;
use App\Http\Requests\UpdateVehicleRequest;
use App\Models\Vehicle;
use Illuminate\Http\Request;

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
            $data = $this->model::find($request->get('id'));
        } else {
            $data = $this->model::paginate();
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
        try {
            (new $this->model)->fill($request->validated())->save();
        } catch (\Throwable $th) {
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
        try {
            $vehicle->fill($request->validated())->save();
        } catch (\Throwable $th) {
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
