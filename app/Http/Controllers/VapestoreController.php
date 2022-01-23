<?php

namespace App\Http\Controllers;

use App\Models\vapestore;
use Illuminate\Http\Request;

class VapestoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $store = vapestore::all();
       
        return $store;
    }

    public function getStore()
    {
        $store = vapestore::all();

        return $store;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
     * @param  \App\Models\vapestore  $vapestore
     * @return \Illuminate\Http\Response
     */
    public function show(vapestore $vapestore)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\vapestore  $vapestore
     * @return \Illuminate\Http\Response
     */
    public function edit(vapestore $vapestore)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\vapestore  $vapestore
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, vapestore $vapestore)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\vapestore  $vapestore
     * @return \Illuminate\Http\Response
     */
    public function destroy(vapestore $vapestore)
    {
        //
    }
}
