<?php

namespace App\Http\Controllers;

use App\AnswerType;
use App\Option;
use App\QuestionMeta;
use Illuminate\Http\Request;
use App\Response;

class FixedQuestionController extends Controller
{

    public function index()
    {
      $questions = QuestionMeta::where('type', 'fixed')->get();

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
    		$data = (object) array();
    		$data -> answerTypes = $answerTypes;
		    $data -> defaultOptions = $defaultOptions;
    		return new Response(200, 'OK', $data);
    }

    public function store(Request $request)
    {
    		$question = $request->input('question');
      $answer_type_id = $request->input('answer_type_id');
      $lecture = $request->input('lecture');
      $lab = $request->input('lab');
      $tutorial = $request->input('tutorial');
    		$type = "fixed";
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

      return new Response(200, 'OK');

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

    public function update(Request $request, $id)
    {
        // @TODO
    }

    public function destroy($id)
    {
        //
    }

    public function isAvailable(Request $request)
    {
		    $i_question_id = $request->input('i_question_id');
		    $isAvailable = $request->input('isAvailable');
		    $question = QuestionMeta::where('i_question_id', $i_question_id)->first();
		    $question -> isAvailable = $isAvailable;
		    $question -> save();
		    return new Response(200, 'OK', $question);
    }
}
