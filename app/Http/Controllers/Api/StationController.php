<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreStationRequest;
use App\Http\Requests\UpdateStationRequest;
use App\Models\Location;
use App\Models\Station;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StationController extends Controller
{
    private $model;

    function __construct()
    {
        $this->model = Station::class;
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

    public function store(StoreStationRequest $request)
    {
        // return $request->validated()['location'];
        DB::beginTransaction();
        try {
            $location = new Location();
            $location->type = 1;
            $location->fill($request->validated())->save();
            // return $location;

            $station = new Station();
            $station->fill($request->validated());
            $station->location_id = $location->id;
            $station->save();

            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            return response($th->getMessage(), 500);
        }

        return response("success", 200);
    }


    public function update(UpdateStationRequest $request, Station $station)
    {
        // return response($request->validated(), 444);
        try {
            $station->fill($request->validated())->save();
            Location::find($station->location_id)->fill($request->validated())->save();
        } catch (\Throwable $th) {
            return response($th->getMessage(), 500);
        }

        return response("success", 200);
    }

    public function destroy(Station $station)
    {
        try {
            $location_id = $station->location_id;
            $station->delete();
            Location::find($location_id)->delete();
        } catch (\Throwable $th) {
            return response($th->getMessage(), 500);
        }

        return response("success", 200);
    }
}
