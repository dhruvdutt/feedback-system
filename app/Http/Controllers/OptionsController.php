<?php

namespace App\Http\Controllers;

use App\Option;
use App\Response;
use Illuminate\Http\Request;

class OptionsController extends Controller
{

    public function index()
    {
        return new Response(200, 'OK',
        		Option::whereNull('i_question_id')->get()
        );
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
		    $options = $request->get('options');
		    foreach ($options as $op) {
				    $option = new Option();
				    $option -> option = $op;
				    $option -> save();
		    }
		    $options = Option::whereNull('i_question_id')->get();
		    return new Response(200,'OK', $options);
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
