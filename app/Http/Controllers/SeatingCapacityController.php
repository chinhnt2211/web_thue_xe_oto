<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSeatingCapacityRequest;
use App\Http\Requests\UpdateSeatingCapacityRequest;
use App\Models\SeatingCapacity;

class SeatingCapacityController extends Controller
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
     * @param  \App\Http\Requests\StoreSeatingCapacityRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSeatingCapacityRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SeatingCapacity  $seatingCapacity
     * @return \Illuminate\Http\Response
     */
    public function show(SeatingCapacity $seatingCapacity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SeatingCapacity  $seatingCapacity
     * @return \Illuminate\Http\Response
     */
    public function edit(SeatingCapacity $seatingCapacity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSeatingCapacityRequest  $request
     * @param  \App\Models\SeatingCapacity  $seatingCapacity
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSeatingCapacityRequest $request, SeatingCapacity $seatingCapacity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SeatingCapacity  $seatingCapacity
     * @return \Illuminate\Http\Response
     */
    public function destroy(SeatingCapacity $seatingCapacity)
    {
        //
    }
}
