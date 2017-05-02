<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
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

    public function addNewFeedback(Request $request)
    {

    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
