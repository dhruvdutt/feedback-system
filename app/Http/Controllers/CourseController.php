<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
  public function index()
  {
    return view('course-selection')->with([
      'core'=> [
        'Computer Networks',
        'Operating Systems',
        'Design & Analysis of Algorithms',
        'Design of Software Systems',
        'Enterprice Computing'
      ],
      'electives'=> [
        'Computer Organization'
      ]
    ]);
  }

  public function post(Request $request)
  {
    return redirect('/feedback');
  }
}
