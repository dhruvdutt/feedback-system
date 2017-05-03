<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentFeedback extends Model
{
		public $timestamps = false;
		protected $table = 'student_feedback';
		protected $primaryKey = 'pct_feedback_serial_question_id';
}
