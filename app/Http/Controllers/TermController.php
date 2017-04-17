<?php

namespace App\Http\Controllers;

use App\TermYearMaster;
use Illuminate\Http\Request;

class TermController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $terms = TermYearMaster::all();
        // return response()->json($terms);

        return view('admin.terms', ['terms' => $terms]);
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TermYearMaster  $termYearMaster
     * @return \Illuminate\Http\Response
     */
    public function show(TermYearMaster $termYearMaster)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TermYearMaster  $termYearMaster
     * @return \Illuminate\Http\Response
     */
    public function edit(TermYearMaster $termYearMaster)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TermYearMaster  $termYearMaster
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TermYearMaster $termYearMaster)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TermYearMaster  $termYearMaster
     * @return \Illuminate\Http\Response
     */
    public function destroy(TermYearMaster $termYearMaster)
    {
        //
        // $term = TermYearMaster::find()
        // return response()->json($termYearMaster);
    }
}
