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
//						  'coreCourses' => $coreCourses[0],
//						  'electiveCourses' => $electiveCourses[0],
//						  'fixedQuestions' => $fixedQuestions[0],
//						  'fixedQuestionsOptions' => $fixedQuestionsOptions[0],
//						  'customQuestions' => $customQuestions[0]
//				  ]);

		    return view('feedback')->with([
				    'coreCourses' => $coreCourses[0],
				    'electiveCourses' => $electiveCourses[0],
				    'fixedQuestions' => $fixedQuestions[0],
				    'fixedQuestionsOptions' => $fixedQuestionsOptions[0],
				    'customQuestions' => $customQuestions[0]
		    ]);

    }

    public function create(Request $request)
    {
      return view('rating');
    }

    public function thankyou()
    {
      return view('thankyou');
    }
}
