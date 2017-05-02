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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		      $programs = Program::all();
        $courses = Course::all();
        $terms = TermYear::all();

		      return view('admin.programCourse.add', [
		      		'programs' => $programs,
		      		'courses' => $courses,
		      		'terms' => $terms
		      ]);

//        return response()->json([
//            'program' => $program,
//            'course' => $course,
//            'term' => $term
//        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $programCourse = new ProgramCourseTerm;
        $programCourse->program_id = $request->program_id;
        $programCourse->course_id = $request->course_id;
        $programCourse->term_id = $request->term_id;

        $programCourse->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProgramCourseTerm  $programCourseTerm
     * @return \Illuminate\Http\Response
     */
    public function show(ProgramCourseTerm $programCourseTerm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProgramCourseTerm  $programCourseTerm
     * @return \Illuminate\Http\Response
     */
    public function edit(ProgramCourseTerm $programCourseTerm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProgramCourseTerm  $programCourseTerm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProgramCourseTerm $programCourseTerm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProgramCourseTerm  $programCourseTerm
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProgramCourseTerm $programCourseTerm)
    {
        //
    }
}
