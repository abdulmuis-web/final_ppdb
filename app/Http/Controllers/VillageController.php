<?php

namespace App\Http\Controllers;

use App\Village;
use Illuminate\Http\Request;
use App\Http\Resources\VillageCollection;

class VillageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $villages = Village::orderBy('created_at', 'DESC');
        if (request()->q != '') {
            $villages = $villages->where('name', 'LIKE', '%' . request()->q . '%');
        }
        return new VillageCollection($villages->get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Village  $village
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $village = Village::whereId($id)->first();
        return response()->json(['status' => 'success', 'data' => $village], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Village  $village
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Village $village)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Village  $village
     * @return \Illuminate\Http\Response
     */
    public function destroy(Village $village)
    {
        //
    }
}