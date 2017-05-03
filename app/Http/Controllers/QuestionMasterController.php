<?php

namespace App\Http\Controllers;

use App\QuestionMeta;
use App\Option;
use Illuminate\Http\Request;

class QuestionMasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = QuestionMeta::all();

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
        $question = new QuestionMeta;

        $question->course_id = $request->course_id;
        $question->term_id = $request->term_id;
        $question->question = $request->question;
        $question->answer_type_id = $request->answer_type_id;
        $question->lecture = $request->lecture;
        $question->lab = $request->lab;
        $question->tutorial = $request->tutorial;
        
        if ($question->save()) {
            if($request->options != null)
            {
                foreach ($request->options as $option) {
                    $radioOption = new Option();
                    $radioOption->question_id = $question->question_id;
                    $radioOption->option = $option;
                    $radioOption->save();
                }
            }
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\QuestionMeta  $questionMaster
     * @return \Illuminate\Http\Response
     */
    public function show(QuestionMeta $questionMaster, $course_id)
    {
        /*All the questions that are fixed as well as custom questions for a particular course will be returned here*/
        $questions = QuestionMeta::where('course_id',$course_id)->get();

        return $questions;
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\QuestionMeta  $questionMaster
     * @return \Illuminate\Http\Response
     */
    public function edit(QuestionMeta $questionMaster)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\QuestionMeta  $questionMaster
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, QuestionMeta $questionMaster)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\QuestionMeta  $questionMaster
     * @return \Illuminate\Http\Response
     */
    public function destroy(QuestionMeta $questionMaster)
    {
        //
    }
}
