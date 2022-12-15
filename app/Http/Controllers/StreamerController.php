<?php

namespace App\Http\Controllers;

use App\Models\Streamer;
use App\Http\Requests\StoreStreamerRequest;
use App\Http\Requests\UpdateStreamerRequest;

class StreamerController extends Controller
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
     * @param  \App\Http\Requests\StoreStreamerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStreamerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Streamer  $streamer
     * @return \Illuminate\Http\Response
     */
    public function show(Streamer $streamer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Streamer  $streamer
     * @return \Illuminate\Http\Response
     */
    public function edit(Streamer $streamer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStreamerRequest  $request
     * @param  \App\Models\Streamer  $streamer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStreamerRequest $request, Streamer $streamer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Streamer  $streamer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Streamer $streamer)
    {
        //
    }
}
