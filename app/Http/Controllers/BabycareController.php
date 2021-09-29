<?php

namespace App\Http\Controllers;

use App\Models\babycare;
use App\Models\medicine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BabycareController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('medicine.babycare');
    }

    public function babycare()
    {
//        $medicine=DB::select('Select * from medicines');
//        return view('medicine.medicine',['medicine'=>$medicine]);

        $babycare=DB::select('Select * from babycares');
        return view('medicine.medicine',['babycare'=>$babycare]);
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
    {
        //
        $babycare=new babycare();
        $babycare->name=$request['name'];
        $babycare->brand=$request['brand'];
        $babycare->price=$request['price'];
        $babycare->type=$request['type'];
        $babycare->quantity=$request['quantity'];
        $babycare->size=$request['size'];
        $babycare->save();
        //  medicine::create($request->all());

        return back()->with('success', 'We have received your message and would like to thank you for writing to us.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\babycare  $babycare
     * @return \Illuminate\Http\Response
     */
    public function show(babycare $babycare)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\babycare  $babycare
     * @return \Illuminate\Http\Response
     */
    public function edit(babycare $babycare)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\babycare  $babycare
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, babycare $babycare)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\babycare  $babycare
     * @return \Illuminate\Http\Response
     */
    public function destroy(babycare $babycare)
    {
        //
    }
}
