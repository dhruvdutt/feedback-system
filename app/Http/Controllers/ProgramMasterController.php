<?php

namespace App\Http\Controllers;

use App\ProgramMaster;
use Illuminate\Http\Request;

class ProgramMasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ProgramMaster::all();

        return response()->json($data);
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
        $programme = new ProgramMaster;
        $programme->program_name = $request->program_name;
        $programme->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProgramMaster  $programMaster
     * @return \Illuminate\Http\Response
     */
    public function show(ProgramMaster $programMaster)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProgramMaster  $programMaster
     * @return \Illuminate\Http\Response
     */
    public function edit(ProgramMaster $programMaster)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProgramMaster  $programMaster
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProgramMaster $programMaster)
    {
        $programme = ProgramMaster::find($request->program_id);
        $programme->program_name = $request->program_name;
        $program->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProgramMaster  $programMaster
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProgramMaster $programMaster)
    {
        
    }
}
