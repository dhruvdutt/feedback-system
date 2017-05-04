<?php

namespace App\Http\Controllers;

use App\Response;
use App\Student;
use App\TermYear;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ImportController extends Controller
{

		public function index()
		{

		}

		public function create()
		{
				//
		}

		public function importTerm(Request $request)
		{
				$errors = array();
				$data = $this->getDataFromFile($request);
				if (sizeof($data->rows) > 0) {
						foreach ($data->rows as $record) {
								try {
										$term_year = new TermYear();
										$term_year->term_id = $record['term_id'];
										$term_year->term_name = $record['term_name'];
										$term_year->year_id = $record['year_id'];
										$term_year->year_name = $record['year_name'];
										$term_year->save();
								} catch (QueryException $e) {
										array_push($errors, $e);
								} catch (\PDOException $e) {
										array_push($errors, $e);
								}
						}
				} elseif (sizeof($data->errors) > 0) {
						return new Response(200, 'OK', [], $data->errors);
				}
				if (sizeof($errors) > 0) {
						return new Response(400, 'OK', [], $errors);
				}
				return new Response(200, 'OK', $data->rows);
		}

		private function getDataFromFile(Request $request)
		{
				$rows = array();
				$errors = array();
				try {
						$rows = Excel::load($request->input('file'), function ($reader) {
						})->get();
				} catch (\Exception $e) {
						array_push($errors, $e->getMessage());
				}
				$return = new \stdClass();
				$return->rows = $rows;
				$return->errors = $errors;

				return $return;
		}

		public function show($id)
		{
				//
		}

		public function edit($id)
		{
				//
		}

		// /import/term_id
		public function importProgramCourse(Request $request, $term_id)
		{
				// @TODO
		}

		public function importStudents(Request $request)
		{
				$errors = array();
				$added = array();
				$data = $this->getDataFromFile($request);
				if (sizeof($data->rows) > 0) {
						foreach ($data->rows as $record) {
								try {
										if (sizeof(Student::where('student_id', $record['student_id'])->where('course_id', $record['course_id'])->get()) > 0) {
												array_push($errors, $record['student_id']." already registered for ".$record['course_id']);
										} else {
												$student = new Student();
												$student->student_id = $record['student_id'];
												$student->student_name = $record['student_name'];
												$student->program_id = $record['program_id'];
												$student->course_id = $record['course_id'];
												$student->save();
												array_push($added, $student);
										}
								} catch (QueryException $e) {
										array_push($errors, $e);
								} catch (\PDOException $e) {
										array_push($errors, $e);
								}
						}
				} elseif (sizeof($data->errors) > 0) {
						return new Response(200, 'OK', $added, $data->errors);
				}
				if (sizeof($errors) > 0) {
						return new Response(400, 'OK', $added, $errors);
				}
				return new Response(200, 'OK', $added);
		}

		public function destroy($id)
		{
				//
		}
}
