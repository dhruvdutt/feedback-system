<?php

namespace App\Http\Controllers;

use App\Attendance;
use App\FeedbackMetaData;
use App\FeedbackProgram;
use App\Response;
use App\Student;
use Illuminate\Http\Request;
use App\Program;
use \Firebase\JWT\JWT;

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

		    $feedback -> programs = $programs;

      return new Response(200, 'OK', $feedback);
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

    public function sendMail(Request $request) {
    		// Token => StudentID + FeedbackID
		    $feedback_id = $request->input('feedback_id');
		    $studentIds = $this->getFalsyAttendanceStudentIds($feedback_id);
						$tokens = $this->generateTokens($feedback_id, $studentIds);

    		return new Response(200, 'OK', $tokens);
    }

				public function generateTokens($feedback_id, $studentIds)
				{
						$key = "dd";
						$tokens = array();
						foreach ($studentIds as $studentId) {
								$payload = array(
										"student_id" => $studentId,
										"feedback_id" => $feedback_id
								);
								$token = JWT::encode($payload, $key);
								array_push($tokens, $token);
						}
						return $tokens;

//						$key="dd";
//						$decoded = JWT::decode($token, $key, array('HS256'));

				}

    private function getFalsyAttendanceStudentIds($feedback_id) {
		    $studentIds = $this->getUniqueStudentIds();
		    foreach ($studentIds as $key => $studentId) {
				    if (sizeof(Attendance::where('feedback_id', $feedback_id)->where('student_id', $studentId)->first()) > 0) {
						    unset($studentIds[$key]);
				    }
		    }
		    return array_values($studentIds);
    }

    private function getUniqueStudentIds() {
		    $students = Student::all();
		    $studentIds = array();
		    foreach ($students as $student) {
				    array_push($studentIds, $student -> student_id);
		    }
		    $studentIds = array_unique($studentIds);
		    $temp = array();
		    foreach ($studentIds as $key => $value) {
				    array_push($temp, $value);
		    }
		    return $temp;
    }
}
