<?php

namespace App\Http\Controllers;

use App\Models\Gamer;
use App\Http\Requests\StoreGamerRequest;
use App\Http\Requests\UpdateGamerRequest;

class GamerController extends Controller
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
     * @param  \App\Http\Requests\StoreGamerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGamerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gamer  $gamer
     * @return \Illuminate\Http\Response
     */
    public function show(Gamer $gamer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gamer  $gamer
     * @return \Illuminate\Http\Response
     */
    public function edit(Gamer $gamer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGamerRequest  $request
     * @param  \App\Models\Gamer  $gamer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGamerRequest $request, Gamer $gamer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gamer  $gamer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gamer $gamer)
    {
        //
    }
}
