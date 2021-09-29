<?php

namespace App\Http\Controllers;

use App\Models\healthbeauty;
use App\Models\welbeing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HealthbeautyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('medicine.health');
    }
    public function healthbeauty()
    {
        $healthbeauty=healthbeauty::all();

        return view('medicine.medicine',['healthbeauty'=>$healthbeauty]);
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
        //
        healthbeauty::create($request->all());

        //$welbeing
        return back()->with('success', 'We have received your message and would like to thank you for writing to us.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\healthbeauty  $healthbeauty
     * @return \Illuminate\Http\Response
     */
    public function show(healthbeauty $healthbeauty)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\healthbeauty  $healthbeauty
     * @return \Illuminate\Http\Response
     */
    public function edit(healthbeauty $healthbeauty)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\healthbeauty  $healthbeauty
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, healthbeauty $healthbeauty)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\healthbeauty  $healthbeauty
     * @return \Illuminate\Http\Response
     */
    public function destroy(healthbeauty $healthbeauty)
    {
        //
    }
}
