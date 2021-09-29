<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProjectRequest;
use App\Models\medicine;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Project;

class MedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('medicine.medicine_info');
        //
    }

    public function save_medicine()
    {
      //  return view('medicine.save_medicine');
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
//       $this->validate(request(),[
//           'name_of_medicine'=>'required|max:255',
//           'brand'=>'required|max:255',
//           'price'=>'required|max:255',
//           'generic'=>'required|max:255',
//           'type'=>'required|max:100',
//           'quantity'=>'required|100',
//           'dose'=>'required|100'
//       ]);
       $medicine=new medicine();
        $medicine->name_of_medicine=$request['name'];
        $medicine->brand=$request['brand'];
        $medicine->price=$request['price'];
        $medicine->generic=$request['generic'];
        $medicine->type=$request['type'];
        $medicine->Quantity=$request['quantity'];
        $medicine->dose=$request['dose'];
        $medicine->save();
       //  medicine::create($request->all());

        return back()->with('success', 'We have received your message and would like to thank you for writing to us.');

        }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function show(medicine $medicine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function edit(medicine $medicine)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, medicine $medicine)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function destroy(medicine $medicine)
    {

    }
}
