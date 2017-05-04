<?php

namespace App\Http\Controllers;

use App\ProgramCourseTerm;
use Illuminate\Http\Request;


class AdminController extends Controller
{

  public function index()
  {
    return view('admin.login');
  }

  public function login(Request $request)
  {
    return redirect('/admin/settings/feedback');
  }

  public function terms(Request $request)
  {
    return view('admin.terms')
      ->with(['ids'=>[1, 2, 3], 'terms' => ['first', 'second', 'third']]);
  }

  public function dashboard(Request $request)
  {
    return view('admin.dashboard');
  }

  public function logout()
  {
    return redirect('/admin/login');
  }

		public function getFeedbackView()
		{
				return view('admin.feedback.base')->with([
						'recent'=> [
								'name' => 'Autumn',
								'course' => 'Computer Networks',
								'start_date' => '20/4/2017',
								'end_date' => '20/4/2017',
								'enabled' => false
						]
				]);
		}

		public function getProgramCourseTermView() {
				return view('admin.programCourse.base');
		}

		public function getFixedQuestionsView() {
				return view('admin.fixed-question.base');
		}

		public function getCustomQuestionsView() {
				return view('admin.custom-question.base');
		}

		public function getImportTermView()
		{
				return view('admin.import.base');
		}

		public function getImportProgramCourseView()
		{
				//return view('admin.import.base');
		}

		public function getImportStudentsView()
		{
				return view('admin.import.students');
		}

}
