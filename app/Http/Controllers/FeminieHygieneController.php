<?php

namespace App\Http\Controllers;

use App\Models\FeminieHygiene;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FeminieHygieneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('medicine.faminine');
        //
    }


    public function feminine()
    {
        $feminine=DB::select('select * from feminie_hygienes');
        return view('medicine.medicine',['feminine'=>$feminine]);
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
        $faminie=new FeminieHygiene();
        $faminie->price=$request['price'];
        $faminie->name=$request['name'];
        $faminie->type=$request['type'];
        $faminie->quantity=$request['quantity'];
        $faminie->save();
        return back()->with('success', 'We have received your message and would like to thank you for writing to us.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FeminieHygiene  $feminieHygiene
     * @return \Illuminate\Http\Response
     */
    public function show(FeminieHygiene $feminieHygiene)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FeminieHygiene  $feminieHygiene
     * @return \Illuminate\Http\Response
     */
    public function edit(FeminieHygiene $feminieHygiene)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FeminieHygiene  $feminieHygiene
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FeminieHygiene $feminieHygiene)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FeminieHygiene  $feminieHygiene
     * @return \Illuminate\Http\Response
     */
    public function destroy(FeminieHygiene $feminieHygiene)
    {
        //
    }
}
