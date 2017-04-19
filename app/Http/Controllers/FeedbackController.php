<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index(Request $request)
    {
		    $coreCourses = $request->session()->pull('coreCourses')[0];
		    if ($request->session()->has('electiveCourses')[0])
		      $electiveCourses = $request->session()->pull('electiveCourses')[0];
		    $fixedQuestions = $request->session()->pull('fixedQuestions')[0];
		    $fixedQuestionsOptions = $request->session()->pull('fixedQuestionsOptions')[0];
		    $customQuestions = $request->session()->pull('customQuestions')[0];

		    if (!isset($electiveCourses))
				    $electiveCourses = array();

		    $a = $coreCourses;
		    $b = $electiveCourses;
		    $c = $fixedQuestions;
		    $d = $fixedQuestionsOptions;
		    $e = $customQuestions;

		    $request->session()->push('coreCourses', $a);
		    $request->session()->push('electiveCourses', $b);
		    $request->session()->push('fixedQuestions', $c);
		    $request->session()->push('fixedQuestionsOptions', $d);
		    $request->session()->push('customQuestions', $e);

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
    		// key: 'courseId-questionId' => optionId
    		// $request->get('COURSEID - QUESTION ID')
		    $coreCourses = $request->session()->pull('coreCourses')[0];
		    return response()->json([
				    gettype($coreCourses),
				    $coreCourses,
				    gettype($request->all()),
				    $request->all()
		    ]);

//		    if ($request->session()->has('electiveCourses')) {
//				    $electiveCourses = $request->session()->pull('electiveCourses')[0];
//		      $courses = array_merge($coreCourses, $electiveCourses);
//		    } else {
//				    $courses = $coreCourses;
//		    }

		    $fixedQuestions = $request->session()->pull('fixedQuestions')[0];
		    $customQuestions = $request->session()->pull('customQuestions')[0];

		    $fixedQuestions = (array) json_decode(json_encode($fixedQuestions), true);
		    $customQuestions = (array) json_decode(json_encode($customQuestions), true);

		    $questions = array_merge($fixedQuestions, $customQuestions);

		    $keys = array();

//		    foreach ($courses as $course) {
//				    foreach ($questions as $question) {
//						    $request->all();
//				    		array_push($keys, $key);
//				    }
//		    }

		    $data = $request->get('IT612-1');

      return response()->json([
		      gettype($request->all()),
		      $request->all(),
		      gettype($courses),
		      $courses,
		      gettype($questions),
		      $questions
      ]);
    }

    public function thankyou()
    {
      return view('thankyou');
    }
}
