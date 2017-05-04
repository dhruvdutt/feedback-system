<?php

namespace App\Http\Controllers;

use App\AnswerType;
use App\Course;
use App\Option;
use App\QuestionLink;
use App\QuestionMeta;
use App\Response;
use Illuminate\Http\Request;

class CustomQuestionController extends Controller
{
				// List All Courses
				public function courses()
				{
						$courses = Course::get();
						return new Response(200, 'OK', $courses);
				}

				// List All Custom Questions
    public function index()
    {
		    $questions = QuestionMeta::where('type', 'custom')->get();

		    foreach ($questions as $question) {
				    $answer_type = AnswerType::where('answer_type_id', $question -> answer_type_id)->first();
				    $question -> answer_type = $answer_type['answer_type'];
		    }

		    return new Response(200, 'OK', $questions);
    }

    public function create()
    {
		    $defaultOptions = Option::whereNull('i_question_id')->get();
		    $answerTypes = AnswerType::get();

		    return new Response(200, 'OK', [
		    		'answerTypes' => $answerTypes,
				    'defaultOptions' => $defaultOptions
		    ]);
    }

				// Add New Custom Question, Link to Selected Course
				public function store(Request $request)
    {
    		// START Reused Code
		    $question = $request->input('question');
		    $answer_type_id = $request->input('answer_type_id');
		    $lecture = $request->input('lecture');
		    $lab = $request->input('lab');
		    $tutorial = $request->input('tutorial');
		    $type = "custom";
		    $isAvailable = "1";

		    $question_meta = new QuestionMeta();
		    $question_meta -> question = $question;
		    $question_meta -> type = $type;
		    $question_meta -> answer_type_id = $answer_type_id;
		    $question_meta -> lecture = $lecture;
		    $question_meta -> lab = $lab;
		    $question_meta -> tutorial = $tutorial;
		    $question_meta -> isAvailable = $isAvailable;
		    $question_meta -> save();

		    if ($request->has('customOptions')) {
				    $customOptions = $request->get('customOptions');
				    foreach ($customOptions as $customOption) {
						    $option = new Option();
						    $option -> option = $customOption;
						    $option -> i_question_id = $question_meta -> i_question_id;
						    $option -> save();
				    }
		    }
		    // END Reused Code

		    $course_id = $request->input('course_id');
		    $question_link = new QuestionLink();
		    $question_link -> course_id = $course_id;
		    $question_link -> i_question_id = $question_meta -> i_question_id;
						$question_link -> save();

		    return new Response(200, 'OK', $question_link);

    }

    public function show($id)
    {
		    $question = QuestionMeta::where('i_question_id', $id)->first();

		    $defaultOptions = Option::whereNull('i_question_id')->get();

		    $customOptionsCount = Option::where('i_question_id', $question->i_question_id)->count();
		    if ($customOptionsCount > 0) {
				    $customOptions = Option::where('i_question_id', $question->i_question_id)->get();
				    $question -> options = $customOptions;
		    } else {
				    $question -> options = $defaultOptions;
		    }

		    $question -> defaultOptions = $defaultOptions;

		    return new Response(200, 'OK', $question);
    }

    public function link(Request $request)
    {
        $course_id = $request->input('course_id');
        $i_question_id = $request->input('i_question_id');
				    $question_link = new QuestionLink();
				    $question_link -> course_id = $course_id;
				    $question_link -> i_question_id = $i_question_id;
				    $question_link -> save();

				    return new Response(200, 'OK', $question_link);
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function courseWise($course_id) {
						$links = QuestionLink::where('course_id', $course_id)->get();
						$questions = array();
		    foreach ($links as $link) {
				    array_push($questions, QuestionMeta::where('i_question_id', $link->i_question_id)->first());
						}
						return new Response(200, 'OK', $questions);
    }
}
