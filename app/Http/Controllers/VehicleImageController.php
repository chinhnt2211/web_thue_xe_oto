<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVehicleImageRequest;
use App\Http\Requests\UpdateVehicleImageRequest;
use App\Models\VehicleImage;

class VehicleImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreVehicleImageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVehicleImageRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VehicleImage  $vehicleImage
     * @return \Illuminate\Http\Response
     */
    public function show(VehicleImage $vehicleImage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VehicleImage  $vehicleImage
     * @return \Illuminate\Http\Response
     */
    public function edit(VehicleImage $vehicleImage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateVehicleImageRequest  $request
     * @param  \App\Models\VehicleImage  $vehicleImage
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateVehicleImageRequest $request, VehicleImage $vehicleImage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VehicleImage  $vehicleImage
     * @return \Illuminate\Http\Response
     */
    public function destroy(VehicleImage $vehicleImage)
    {
        //
    }
}
