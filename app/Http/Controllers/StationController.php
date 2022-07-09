<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStationRequest;
use App\Http\Requests\UpdateStationRequest;
use App\Models\Location;
use App\Models\Station;
use Illuminate\Http\Request;

class StationController extends Controller
{
    private $object;

    function __construct() {
        $this->model = Station::class;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function get(Request $request)
    {
        if($request->get('id')) {
            return $this->model::where('id', $request->get('id'))->first();
        }

        return $this->model::paginate();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStationRequest $request)
    {
        $location = new Location();
        $location->type = 1;
        $location->fill($request->only(['city', 'district', 'subdistrict', 'address']))->save();
        // return $location;

        $station = new Station();
        $station->fill($request->except(['city', 'district', 'subdistrict', 'address']));
        $station->address = $location->id;
        $station->save();

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
        $station->fill($request->validate())->save();

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
        $location_id = $station->address;
        $station->delete();
        Location::find($location_id)->delete();

        return response("success", 200);
    }
}
