<?php

namespace App\Http\Controllers;

use App\Models\Inquiry;
use Illuminate\Http\Request;

// BEFORE USING THIS PACKAGE. INSTALL YAJRA DATATABLES AND ADD PROVIDER AND ALIASES ON CONFIG APP
use DataTables;

class InquiryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Inquiry::all();
    }


    public function datatable(){

        $data = Inquiry::all();
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
    public function create(Request $request)
    {
        //
        $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        return Inquiry::create($request->all());
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
            'title' => 'required',
            'description' => 'required'
        ]);


        return Inquiry::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Inquiry  $inquiry
     * @return \Illuminate\Http\Response
     */
    public function show(Inquiry $inquiry, $id)
    {
        //
        return Inquiry::find($id);
    }

    public function show_user(Inquiry $inquiry, $id)
    {
        //
        return Inquiry::select("*")
        ->where("user_id", $id)
        ->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inquiry  $inquiry
     * @return \Illuminate\Http\Response
     */
    public function edit(Inquiry $inquiry)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Inquiry  $inquiry
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inquiry $inquiry, $id)
    {
        //
        $inquiry = Inquiry::find($id);
        $inquiry->update($request->all());

        return $inquiry;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inquiry  $inquiry
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inquiry $inquiry, $id)
    {
        //if the model soft deleted
        $inquiry = Inquiry::find($id);

        $inquiry->delete();
        return $inquiry;
    }
}
