<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\ProgramCourseTerm;
use App\QuestionMeta;
use App\Option;
use App\AnswerType;

class CourseSelectionController extends Controller
{
  public function index(Request $request)
  {
		  $program_id = $request->session()->get('program_id');
		  $term_id = $request->session()->get('term_id');

		  $coreCourses = $this->getCoreCourses($program_id, $term_id);
		  $electiveCourses = $this->getElectiveCourses($program_id, $term_id);

		  $request->session()->push('coreCourses', $coreCourses);
		  $request->session()->push('electiveCourses', $electiveCourses);

//		  return response()->json([
//				  'coreCourses' => $coreCourses,
//				  'electiveCourses' => $electiveCourses
//		  ]);

    return view('course-selection')->with([
      'coreCourses' => $coreCourses,
      'electiveCourses' => $electiveCourses
    ]);

  }

  public function post(Request $request)
  {
  		$coreCourses = array();
		  $electiveCourses = array();
		  $fixedQuestions = array();
		  $fixedQuestionsOptions = array();
		  $customQuestions = array();
		  $customQuestionsOptions = array();

		  $coreCourses        = $request->session()->pull('coreCourses')[0];
		  $electiveCoursesAll = $request->session()->pull('electiveCourses')[0];
		  $term_id            = $request->session()->get('term_id');

		  $electiveCoursesIds = $request->input('courses');

		  if (sizeof($electiveCoursesIds) > 0)
		  		$electiveCourses = $this->getSelectedElectiveCourses($electiveCoursesAll, $electiveCoursesIds);

		  $fixedQuestions = $this->getFixedQuestions();

		  $fixedQuestionsOptions = Option::whereNull('question_id')->get();

		  if (sizeof($electiveCoursesIds) > 0)
		  		$mergedCourses = array_merge($coreCourses, $electiveCourses);
		  else
				  $mergedCourses = $coreCourses;

		  $customQuestions = $this->getCustomQuestions($mergedCourses, $term_id);

		  $request->session()->push('coreCourses', $coreCourses);
		  $request->session()->push('electiveCourses', $electiveCourses);
		  $request->session()->push('fixedQuestions', $fixedQuestions);
		  $request->session()->push('fixedQuestionsOptions', $fixedQuestionsOptions);
		  $request->session()->push('customQuestions', $customQuestions);

		  return redirect('feedback');

//    return response()->json([
//				  'coreCourses' => $coreCourses,
//				  'electiveCourses' => $electiveCourses,
//				  'fixedQuestions' => $fixedQuestions,
//				  'fixedQuestionsOptions' => $fixedQuestionsOptions,
//				  'customQuestions' => $customQuestions
//		  ]);

  }

  private function getCustomQuestionsOptions($question) {

				  return $options = Option::where('question_id', $question->question_id)
						                                    ->get();

  }

  private function getCustomQuestions($courses, $term_id) {

  		$questions = array();

		  foreach ($courses as $course) {
				  $courseQuestions = QuestionMeta::where('course_id', $course->course_id)
																		              ->where('term_id', $term_id)
																		              ->get();
				  foreach ($courseQuestions as $question) {
				  		$options = $this->getCustomQuestionsOptions($question);
						  $question->options = $options;
						  array_push($questions, $question);
				  }
  		}

  		return $questions;

  }

  private function getFixedQuestions() {

		  // @TODO  Get & Store Fixed Questions Course Wise | Lab / Lecture / Tutorial
		  $questions = QuestionMeta::whereNull('course_id')
																														 ->whereNull('term_id')
																														 ->get();

		  foreach ($questions as $question) {
				  $answer = AnswerType::where('answer_type_id', $question->answer_type_id)->first();
				  $question->answer_type = $answer->answer_type;
		  }

		  return $questions;

  }

  private function getSelectedElectiveCourses($electiveCoursesAll, $electiveCoursesIds) {

		  $electiveCourses = array();

		  foreach ($electiveCoursesAll as $course) {
				  foreach ($electiveCoursesIds as $id) {
						  if (($course->course_id) == $id) array_push($electiveCourses, $course);
				  }
		  }

		  return $electiveCourses;

  }


		private function getCoreCourses($program_id, $term_id) {

				$allCoreCourses = Course::where('course_type', 'Core')->get();
				$coreCourses = array();

				foreach ($allCoreCourses as $course) {
						$term = ProgramCourseTerm::where('program_id', $program_id)
								->where('term_id', $term_id)
								->where('course_id', $course->course_id)
								->first();
						if (sizeof($term) > 0) array_push($coreCourses, $course);
				}

				return $coreCourses;

		}

		private function getElectiveCourses($program_id, $term_id) {

				$allElectiveCourses = Course::where('course_type', 'Elective')->get();
				$electiveCourses = array();

				foreach ($allElectiveCourses as $course) {
						$term = ProgramCourseTerm::where('program_id', $program_id)
								->where('term_id', $term_id)
								->where('course_id', $course->course_id)
								->first();
						if (sizeof($term) > 0) array_push($electiveCourses, $course);
				}

				return $electiveCourses;

		}
}
