<?php

namespace App\Http\Controllers;

use App\Models\healthbeauty;
use App\Models\other;
use Illuminate\Http\Request;

class OtherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('medicine.other');
    }
    public function other_items()
    {
        $other_items=other::all();
        return view('medicine.medicine',['other_items'=>$other_items]);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {        //
        other::create($request->all());

        //$welbeing
        return back()->with('success', 'We have received your message and would like to thank you for writing to us.');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\other  $other
     * @return \Illuminate\Http\Response
     */
    public function show(other $other)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\other  $other
     * @return \Illuminate\Http\Response
     */
    public function edit(other $other)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\other  $other
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, other $other)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\other  $other
     * @return \Illuminate\Http\Response
     */
    public function destroy(other $other)
    {

    }
}
