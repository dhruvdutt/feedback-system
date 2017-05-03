<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
		public $timestamps = false;
		protected $table = 'student';
		protected $primaryKey = 'student_program_id';
}
