<?php

namespace App\Http\Controllers;

use App\FeedbackMetaData;
use App\Response;
use Illuminate\Http\Request;
use App\Program;

class FeedbackController extends Controller
{
    public function index()
    {
      $active_feedbacks = FeedbackMetaData::where('active_flag', true)->get();
      $recent_feedbacks = FeedbackMetaData::where('active_flag', false)->orderBy('end_date', 'desc')->get();

      $data = (object) array();
      $data -> active = $active_feedbacks;
      $data -> recent= $recent_feedbacks;
      return new Response(200, 'OK', $data);
    }

				public function create()
				{
						$data = Program::all();
						return new Response(200, 'OK', $data);
				}

    public function store(Request $request)
    {
      // @TODO username from session
      $created_by = "admin123";

      $feedback_name = $request->input('feedback_name');
      $programs = $request->input('programs');

      // Dates: Start-End Limits
      $start_dates_ts = array();
      $end_dates_ts = array();
      foreach ($programs as $program) {
		      array_push($start_dates_ts, strtotime($program['start_date']));
		      array_push($end_dates_ts, strtotime($program['end_date']));
      }
      $feedback_start_date  = date('Y-m-d', min($start_dates_ts));
      $feedback_end_date    = date('Y-m-d', max($end_dates_ts));

      // Save Data to DB
      $feedback_meta = new FeedbackMetaData();
      $feedback_meta->feedback_name = $feedback_name;
      $feedback_meta->created_by = $created_by;
      $feedback_meta->active_flag = 1;
      $feedback_meta->start_flag = 0;
      $feedback_meta->start_date = $feedback_start_date;
      $feedback_meta->end_date = $feedback_end_date;
      $feedback_meta->save();

      return new Response(200);
    }

    public function start(Request $request)
    {
		    $feedback_id = $request->get('feedback_id');
		    $feedback = FeedbackMetaData::where('feedback_id', $feedback_id)->first();
		    $feedback->start_flag = 1;
		    $feedback->save();
		    //$feedback = FeedbackMetaData::where('feedback_id', $feedback_id)->first();
    		return new Response(200, 'OK', $feedback);
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
