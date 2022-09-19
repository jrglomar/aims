<?php

namespace App\Http\Controllers;

use App\Models\PersonInCharge;
use Illuminate\Http\Request;

// BEFORE USING THIS PACKAGE. INSTALL YAJRA DATATABLES AND ADD PROVIDER AND ALIASES ON CONFIG APP
use DataTables;
class PersonInChargeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return PersonInCharge::all();
    }


    public function datatable(){

        $data = PersonInCharge::all();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->rawColumns(['action'])
                    ->make(true);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            // 'inventory_id' => 'required'
        ]);

        return PersonInCharge::create($request->all());
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
        $request->validate([
            //
        ]);

        return PersonInCharge::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PersonInCharge  $personInCharge
     * @return \Illuminate\Http\Response
     */
    public function show(PersonInCharge $personInCharge, $id)
    {
        //
        return PersonInCharge::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PersonInCharge  $personInCharge
     * @return \Illuminate\Http\Response
     */
    public function edit(PersonInCharge $personInCharge)
    {
        //

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PersonInCharge  $personInCharge
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PersonInCharge $personInCharge, $id)
    {
        //
        $personInCharge = PersonInCharge::find($id);
        $personInCharge->update($request->all());

        return $personInCharge;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PersonInCharge  $personInCharge
     * @return \Illuminate\Http\Response
     */
    public function destroy(PersonInCharge $personInCharge)
    {
        //
    }
}
