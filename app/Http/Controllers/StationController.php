<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStationRequest;
use App\Http\Requests\UpdateStationRequest;
use App\Models\Location;
use App\Models\Station;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use NunoMaduro\Collision\Adapters\Phpunit\State;

class StationController extends Controller
{
    private $model;

    function __construct()
    {
        $this->model = Station::class;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function get(Request $request)
    {
        if ($request->get('id')) {
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
    public function store(StoreStationRequest $request)
    {
        return $request->validated();
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

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStationRequest  $request
     * @param  \App\Models\Station  $station
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStationRequest $request, Station $station)
    {
        // return $request->validated();
        try {
            $station->fill($request->validated())->save();
            Location::find($station->location_id)->fill($request->validated())->save();
        } catch (\Throwable $th) {
            return response($th->getMessage(), 500);
        }

        return response("success", 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Station  $station
     * @return \Illuminate\Http\Response
     */
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
