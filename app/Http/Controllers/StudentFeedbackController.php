<?php

namespace App\Http\Controllers;

use App\AnswerType;
use App\Course;
use App\Option;
use App\Program;
use App\QuestionLink;
use App\QuestionMeta;
use App\Response;
use App\Student;
use Firebase\JWT\JWT;
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

		public function handleGet($token) {
				return new Response(200, 'OK',
						$this->getCourses($token)
				);
		}

		public function handlePost(Request $request) {
				return new Response(200, 'OK',
						$this->getCourses($request->get('token'))
				);
		}

		private function getCourses($token) {
				$key = "dd";
				$decoded = JWT::decode($token, $key, array('HS256'));
				$student = Student::where('student_id', $decoded->student_id)->first();
				$program = Program::where('program_id', $student->program_id)->first();
				$studentData = Student::where('student_id', $student->student_id)->where('program_id', $student->program_id)->get();
				$courses = array();
				foreach ($studentData as $data) {
						array_push($courses, Course::where('course_id', $data['course_id'])->first());
				}
				return [
						'program' => $program,
						'courses' => $courses
				];
		}

		public function getQuestions(Request $request) {
				$courses = $request->input('courses');
				// Fixed Questions Builder
				$questions = (object) array();
				$fixedQuestions = (object) array();
				$fixedQuestions -> lab = $this->getLLTQuestions('fixed', 'lab');
				$fixedQuestions -> lecture = $this->getLLTQuestions('fixed', 'lecture');
				$fixedQuestions -> tutorial = $this->getLLTQuestions('fixed', 'tutorial');
				foreach ($courses as $course) {
						$course_id = $course['course_id'];
						$questions->$course_id = $fixedQuestions;
				}

				// Fixed Questions Builder
				$cQuestions = (object) array();

//				foreach ($courses as $course) {
//						$course_id = $course['course_id'];
//						$customQuestions= (object) array();
//						$customQuestions-> lab = $this->getLLTCustomQuestions('custom', 'lab');
//						$customQuestions-> lecture = $this->getLLTCustomQuestions('custom', 'lecture');
//						$customQuestions-> tutorial = $this->getLLTCustomQuestions('custom', 'tutorial');
//						$cQuestions->$course_id = $customQuestions;
//				}

				return new Response(200, 'OK', [
						'courses' => $courses,
						'questions' => $questions,
						'customQuestions' => $cQuestions
				]);
		}

		private function getAnswerType($questions) {
				foreach ($questions as $question) {
						$answer_type = AnswerType::where('answer_type_id', $question -> answer_type_id)->first();
						$question -> answer_type = $answer_type['answer_type'];
				}
				return $questions;
		}

		private function getLLTQuestions($type, $llpType) {
				$questions = $this->getAnswerType(QuestionMeta::where('type', $type)->where($llpType, 1)->where('isAvailable', 1)->get());
				$questions = $this->optionsBinder($questions);
				return $this->questionsCleaner($questions);
		}

		private function optionsBinder($questions) {
				$defaultOptions = Option::whereNull('i_question_id')->where('isAvailable', 1)->get();
				foreach ($questions as $question) {
						$customOptions = Option::where('i_question_id', $question->i_question_id)->get();
						$question -> options = sizeof($customOptions) > 0 ? $customOptions : $defaultOptions;
				}
				return $questions;
		}

		private function questionsCleaner($questions) {
				foreach ($questions as $question) {
						unset($question['type']);
						unset($question['lecture']);
						unset($question['lab']);
						unset($question['tutorial']);
//						unset($question['isAvailable']);
				}
				return $questions;
		}

}
