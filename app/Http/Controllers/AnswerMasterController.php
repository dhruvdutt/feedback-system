<?php

namespace App\Http\Controllers;

use App\AnswerMaster;
use Illuminate\Http\Request;

class AnswerMasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = AnswerMaster::all();

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
        $answer = new AnswerMaster;
        $answer->answer_type = $request->answer_type;
        $answer->save;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AnswerMaster  $answerMaster
     * @return \Illuminate\Http\Response
     */
    public function show(AnswerMaster $answerMaster)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AnswerMaster  $answerMaster
     * @return \Illuminate\Http\Response
     */
    public function edit(AnswerMaster $answerMaster)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AnswerMaster  $answerMaster
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AnswerMaster $answerMaster)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AnswerMaster  $answerMaster
     * @return \Illuminate\Http\Response
     */
    public function destroy(AnswerMaster $answerMaster)
    {
        //
    }
}
