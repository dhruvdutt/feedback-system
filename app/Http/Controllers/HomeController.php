<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProgramMaster;
use App\CourseMaster;
use App\ProgramCourseTerm;

class HomeController extends Controller
{

    public function index()
    {
      return view('welcome');
    }

    public function checkToken(Request $request)
    {
    		// $token = $request->input('token');
      $token = '123456';

      // @TODO Decode from Token
      $student_id = "201612001";
      $term_id = "3";

      if ($this->validateToken($student_id, $term_id)) {

      		$program = $this->getProgram($student_id);

		      if (sizeof($program) <= 0) return redirect('/')->with('message', 'The token is incorrect');

		      $coreCourses = $this->getCoreCourses($program, $term_id);
		      $electiveCourses = $this->getElectiveCourses($program, $term_id);

//		      return response()->json([
//				      'coreCourses' => $coreCourses,
//				      'electiveCourses' => $electiveCourses
//		      ]);

        return redirect('course-selection')
		                      ->with('coreCourses', $coreCourses)
		                      ->with('electiveCourses', $electiveCourses);

      } else {
        return redirect('/')->with('message', 'The token is incorrect');
      }
    }

    private function getCoreCourses($program, $term_id) {

		    $allCoreCourses = CourseMaster::where('course_type', 'Core')->get();
		    $coreCourses = array();

		    foreach ($allCoreCourses as $course) {
				    $term = ProgramCourseTerm::where('program_id', $program->program_id)
						    ->where('term_id', $term_id)
						    ->where('course_id', $course->course_id)
						    ->first();
				    if (sizeof($term) > 0) array_push($coreCourses, $course);
		    }

		    return $coreCourses;

    }

    private function getElectiveCourses($program, $term_id) {

		    $allElectiveCourses = CourseMaster::where('course_type', 'Elective')->get();
		    $electiveCourses = array();

		    foreach ($allElectiveCourses as $course) {
				    $term = ProgramCourseTerm::where('program_id', $program->program_id)
						    ->where('term_id', $term_id)
						    ->where('course_id', $course->course_id)
						    ->first();
				    if (sizeof($term) > 0) array_push($electiveCourses, $course);
		    }

		    return $electiveCourses;

    }

				private function getProgram($student_id) {
						// @TODO Manipulate ProgramName from $student_id
						// @Dep Hard Coded String Dep
						$programName = "B.Tech";
						$program = ProgramMaster::where('program_name', $programName)->first();
						return $program;
				}

				private function validateToken($student_id, $term_id) {
						// @TODO Validate decoded $student_id & $term_id
						// Check if Student and Term Exists
    		return true;
				}


}
