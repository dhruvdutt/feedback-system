<?php

namespace App\Http\Controllers;

use App\ProgramCourseTerm;
use App\ProgramMaster;
use App\CourseMaster;
use App\TermYearMaster;
use Illuminate\Http\Request;

class ProgramCourseTermController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $program = ProgramMaster::all();
        $course = CourseMaster::all();
        $term = TermYearMaster::all();

        return response()->json([
            'program' => $program,
            'course' => $course,
            'term' => $term
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
