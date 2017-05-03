<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentFeedbackController extends Controller
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
				// key: 'courseId-questionId' => optionId
				// $request->get('COURSEID - QUESTION ID')
				$coreCourses = $request->session()->pull('coreCourses')[0];
				if ($request->session()->has('electiveCourses')) {
						$electiveCourses = $request->session()->pull('electiveCourses')[0];
						$courses = array_merge($coreCourses, $electiveCourses);
				} else {
						$courses = $coreCourses;
				}

				$fixedQuestions = $request->session()->pull('fixedQuestions')[0];
				$customQuestions = $request->session()->pull('customQuestions')[0];

				$fixedQuestions = (array) json_decode(json_encode($fixedQuestions), true);
				$customQuestions = (array) json_decode(json_encode($customQuestions), true);

				$question = array_merge($fixedQuestions, $customQuestions);

				$data = $request->get('IT612-1');

				return response()->json([
						gettype($question),
						($question)
				]);
		}

		public function thankyou()
		{
				return view('thankyou');
		}
}
