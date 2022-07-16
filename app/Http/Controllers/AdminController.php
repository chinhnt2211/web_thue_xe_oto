<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAdminRequest;
use App\Http\Requests\UpdateAdminRequest;
use App\Models\Admin;
use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Laravel\Sanctum\Sanctum;

class AdminController extends Controller
{
    private $model;

    function __construct()
    {
        $this->model = Admin::class;
    }

    /* Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function get(Request $request)
    {
        if ($request->get('id')) {
            $data = $this->model::with([
                'avatar',
                'cic_front',
                'cic_back',
                'location',
                'location.city',
                'location.district',
                'location.subdistrict',
                'station',
            ])
                ->find($request->get('id'));
        } else {
            $data = $this->model::with([
                'avatar',
                'station',
            ])
                ->orderBy('id', 'desc')
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
    public function store(StoreAdminRequest $request)
    {
        return $request->validated();
        DB::beginTransaction();
        try {
            $location = new Location();
            $location->type = 0;
            $location->fill($request->validated())->save();

            $admin = new Admin();
            $admin->fill($request->validated());
            $admin->location_id = $location->id;
            $admin->save();

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
    public function update(UpdateAdminRequest $request, Admin $admin)
    {
        try {
            $admin->fill($request->validated())->save();
            Location::find($admin->location_id)->fill($request->validated())->save();
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
    public function destroy(Admin $admin)
    {
        try {
            $location_id = $admin->location_id;
            $admin->delete();
            Location::find($location_id)->delete();
        } catch (\Throwable $th) {
            return response($th->getMessage(), 500);
        }

        return response("success");
    }
}
