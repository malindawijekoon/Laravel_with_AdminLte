<?php

namespace App\Http\Controllers;

use App\Models\SalesRep;
use Illuminate\Http\Request;

class SalesRepController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reps = SalesRep::all();
        return view('sales-rep.index', compact('reps'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sales-rep.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'rep_name' => 'required',
            'percentage' => 'required|numeric',
        ]);

        $rep = new SalesRep();
        $rep->rep_name = $request->input('rep_name');
        $rep->commition_rate = $request->input('percentage');
        $rep->save();

        return redirect('sales-reps')->with('success','Sales Rep added successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SalesRep  $salesRep
     * @return \Illuminate\Http\Response
     */
    public function show(SalesRep $salesRep)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SalesRep  $salesRep
     * @return \Illuminate\Http\Response
     */
    public function edit(SalesRep $salesRep)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SalesRep  $salesRep
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SalesRep $salesRep)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SalesRep  $salesRep
     * @return \Illuminate\Http\Response
     */
    public function destroy(SalesRep $salesRep)
    {
        //
    }
}
