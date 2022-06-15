<?php

namespace App\Http\Controllers;

use App\Models\Overall;
use App\Http\Requests\StoreOverallRequest;
use App\Http\Requests\UpdateOverallRequest;

class OverallController extends Controller
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
     * @param  \App\Http\Requests\StoreOverallRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOverallRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Overall  $overall
     * @return \Illuminate\Http\Response
     */
    public function show(Overall $overall)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Overall  $overall
     * @return \Illuminate\Http\Response
     */
    public function edit(Overall $overall)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOverallRequest  $request
     * @param  \App\Models\Overall  $overall
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOverallRequest $request, Overall $overall)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Overall  $overall
     * @return \Illuminate\Http\Response
     */
    public function destroy(Overall $overall)
    {
        //
    }
}
