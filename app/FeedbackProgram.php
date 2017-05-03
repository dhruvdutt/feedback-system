<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FeedbackProgram extends Model
{
		public $timestamps = false;
		protected $table = 'feedback_program';
		protected $primaryKey = 'feedback_program_id';
}
