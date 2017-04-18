<?php

namespace App\Http\Controllers;

use App\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('feedback')->with('data',
          json_encode(
		      		'{
												"course": ["PC613", "EC111"],
												"fixedQuestions": [
													{
														"id": "fixedQuestions1",
														"question": "Dafuq?",
														"answer_type_id": "1",
														"answer_type": "radio"
													}
												],
												"fixedQuestionsAnswers": [
													{
														"options_id": "1",
														"options_value": "Yes"
													},
													{
														"options_id": "2",
														"options_value": "No"
													}
												],
												"customQuestions": [
														{
															"id": "customQuestions1",
															"question": "Why?",
															"answer_type": {
																"id": "1",
																"type": "radio"
															},
															"courseId": "PC613",
															"options": [
																{
																	"options_id": "1",
																	"options_value": "Yes"
																},
																{
																	"options_id": "2",
																	"options_value": "No"
																}
															]
														}
													]
												}'
        )
      );
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
     * @param  \App\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function show(Feedback $feedback)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function edit(Feedback $feedback)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Feedback $feedback)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function destroy(Feedback $feedback)
    {
        //
    }
}
