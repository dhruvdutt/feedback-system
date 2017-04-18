<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProgramMaster;
use App\CourseMaster;
use App\ProgramCourseTerm;

class CourseSelectionController extends Controller
{
  public function index(Request $request)
  {
		  $program_id = $request->session()->get('program_id');
		  $term_id = $request->session()->get('term_id');

		  $coreCourses = $this->getCoreCourses($program_id, $term_id);
		  $electiveCourses = $this->getElectiveCourses($program_id, $term_id);

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
    return redirect('/feedback');
  }


		private function getCoreCourses($program_id, $term_id) {

				$allCoreCourses = CourseMaster::where('course_type', 'Core')->get();
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

				$allElectiveCourses = CourseMaster::where('course_type', 'Elective')->get();
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
