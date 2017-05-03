<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Program;
use App\Course;
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

		      $request->session()->put('program_id', $program->program_id);
		      $request->session()->put('term_id', $term_id);

		      return redirect('course-selection');

      } else {
        return redirect('/')->with('message', 'The token is incorrect');
      }
    }

				private function getProgram($student_id) {
						// @TODO Manipulate ProgramName from $student_id
						// @Dep Hard Coded String Dep
						$programName = "B.Tech";
						$program = Program::where('program_name', $programName)->first();
						return $program;
				}

				private function validateToken($student_id, $term_id) {
						// @TODO Validate decoded $student_id & $term_id
						// Check if Student and Term Exists
    		return true;
				}


}
