<?php

namespace App\Http\Controllers;

use App\Models\welbeing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WelbeingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('medicine.welbeing');
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
    public function wel()
    {
        $wel=DB::select('select * from welbeings');
        return view('medicine.medicine',['wel'=>$wel]);


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
      //  $welbeing=new welbeing();
        welbeing::create($request->all());

        //$welbeing
        return back()->with('success', 'We have received your message and would like to thank you for writing to us.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\welbeing  $welbeing
     * @return \Illuminate\Http\Response
     */
    public function show(welbeing $welbeing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\welbeing  $welbeing
     * @return \Illuminate\Http\Response
     */
    public function edit(welbeing $welbeing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\welbeing  $welbeing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, welbeing $welbeing)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\welbeing  $welbeing
     * @return \Illuminate\Http\Response
     */
    public function destroy(welbeing $welbeing)
    {
        //
    }
}
