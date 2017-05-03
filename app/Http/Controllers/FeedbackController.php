<?php

namespace App\Http\Controllers;

use App\FeedbackMetaData;
use App\FeedbackProgram;
use App\Response;
use Illuminate\Http\Request;
use App\Program;

class FeedbackController extends Controller
{
    public function index()
    {
      $active_feedbacks = FeedbackMetaData::where('active_flag', true)->get();
      $recent_feedbacks = FeedbackMetaData::where('active_flag', false)->orderBy('end_date', 'desc')->get();

      return new Response(200, 'OK', [
      		'active' => $active_feedbacks,
      		'recent' => $recent_feedbacks,
      ]);
    }

				public function create()
				{
						$data = Program::all();
						return new Response(200, 'OK', $data);
				}

    public function store(Request $request)
    {
      // @TODO username from session
      $created_by = "admin";

      $feedback_name = $request->input('feedback_name');
      $programs = $request->input('programs');

      // Feedback Rates Range: Start-End
		    $feedback_start_date = $this->getMinFeedbackDate($programs);
		    $feedback_end_date = $this->getMaxFeedbackDate($programs);

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
		    $start_flag = $request->get('start_flag');
		    $feedback = FeedbackMetaData::where('feedback_id', $feedback_id)->first();
		    $feedback -> start_flag = $start_flag;
		    $feedback -> save();
    		return new Response(200, 'OK', $feedback);
    }

    public function show($id)
    {
      $feedback = FeedbackMetaData::where('feedback_id', $id)->first();
      $programs = FeedbackProgram::where('feedback_id', $id)->get();

      $data = $feedback;
      $data -> programs = $programs;

      return new Response(200, 'OK', $data);
    }

    public function update(Request $request, $id)
    {
        // @TODO
    }

    public function destroy($id)
    {
        //
    }

    private function getMinFeedbackDate($programs) {
		    $start_dates_ts = array();
		    foreach ($programs as $program) {
				    array_push($start_dates_ts, strtotime($program['start_date']));
		    }
		    return date('Y-m-d', min($start_dates_ts));
    }

    private function getMaxFeedbackDate($programs) {
		    $end_dates_ts = array();
		    foreach ($programs as $program) {
				    array_push($end_dates_ts, strtotime($program['end_date']));
		    }
		    return date('Y-m-d', max($end_dates_ts));
    }
}
