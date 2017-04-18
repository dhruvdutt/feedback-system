<?php

namespace App\Http\Controllers;

use App\TermYearMaster;
use Illuminate\Http\Request;
use App\Response;

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

		      return new Response(200,'OK', $terms);

//		      return view('admin.term.base', ['terms' => $terms]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.term.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
				    $term = new TermYearMaster;
				    $term->term_name = $request->input('term_name');
				    $term->year_name = $request->input('year_name');
				    $term->save();

		      return new Response(200,'OK');
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
