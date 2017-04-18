<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index(Request $request)
    {
		    $coreCourses = $request->session()->pull('coreCourses');
		    if ($request->session()->has('electiveCourses'))
		      $electiveCourses = $request->session()->pull('electiveCourses');
		    $fixedQuestions = $request->session()->pull('fixedQuestions');
		    $fixedQuestionsOptions = $request->session()->pull('fixedQuestionsOptions');
		    $customQuestions = $request->session()->pull('customQuestions');

		    if (!isset($electiveCourses))
				    $electiveCourses = array();

//      return response()->json([
//						  'coreCourses' => $coreCourses,
//						  'electiveCourses' => $electiveCourses,
//						  'fixedQuestions' => $fixedQuestions,
//						  'fixedQuestionsOptions' => $fixedQuestionsOptions,
//						  'customQuestions' => $customQuestions
//				  ]);

		    return view('feedback')->with([
				    'coreCourses' => $coreCourses,
				    'electiveCourses' => $electiveCourses,
				    'fixedQuestions' => $fixedQuestions,
				    'fixedQuestionsOptions' => $fixedQuestionsOptions,
				    'customQuestions' => $customQuestions
		    ]);

    }

    public function create(Request $request)
    {
      return $request->all();
      return view('rating');
    }

    public function thankyou()
    {
      return view('thankyou');
    }
}
