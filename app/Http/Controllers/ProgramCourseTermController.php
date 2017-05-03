<?php

namespace App\Http\Controllers;

use App\ProgramCourseTerm;
use App\Program;
use App\Course;
use App\TermYear;
use Illuminate\Http\Request;
use App\Response;


class ProgramCourseTermController extends Controller
{

    public function index()
    {
		    $dataAll = ProgramCourseTerm::get();
		    $data = array();
		    foreach ($dataAll as $dataOne) {
		    		$object = new \stdClass();
		    		$object->program = Program::where('program_id', $dataOne->program_id)->first();
		    		$object->course = Course::where('course_id', $dataOne->course_id)->first();
		    		$object->term = TermYear::where('term_id', $dataOne->term_id)->first();
		    		$data[] = $object;
		    }

		    //
		    return new Response(400, 'OK', $data);
    }

    public function create()
    {

    }

    public function store(Request $request)
    {

    }

    public function show(ProgramCourseTerm $programCourseTerm)
    {
        //
    }

    public function edit(ProgramCourseTerm $programCourseTerm)
    {
        //
    }

    public function update(Request $request, ProgramCourseTerm $programCourseTerm)
    {
        //
    }

    public function destroy(ProgramCourseTerm $programCourseTerm)
    {
        //
    }
}
