<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProgramCourseTerm extends Model
{
		public $timestamps = false;
		protected $table = 'program_course_term';
		protected $primaryKey = 'program_course_term_id';
}
