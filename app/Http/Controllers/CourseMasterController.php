<?php

namespace App\Http\Controllers;

use App\CourseMaster;
use Illuminate\Http\Request;
use App\Response;


class CourseMasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = CourseMaster::all();

		      return new Response(200,'OK', $data);
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
        $course = new CourseMaster;

        $course->course_name = $request->course_name;
        $course->course_type = $request->course_type;
        $course->lecture_grade = $request->lecture_grade;
        $course->lab_grade = $request->lab_grade;
        $course->tutorial_grade = $request->tutorial_grade;

        $course->save();

		      return new Response(200,'OK');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CourseMaster  $courseMaster
     * @return \Illuminate\Http\Response
     */
    public function show(CourseMaster $courseMaster)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CourseMaster  $courseMaster
     * @return \Illuminate\Http\Response
     */
    public function edit(CourseMaster $courseMaster)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CourseMaster  $courseMaster
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CourseMaster $courseMaster)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CourseMaster  $courseMaster
     * @return \Illuminate\Http\Response
     */
    public function destroy(CourseMaster $courseMaster)
    {
        //
    }
}
