<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestionMeta extends Model
{
		public $timestamps = false;
		protected $table = 'question_meta';
		protected $primaryKey = 'i_question_id';
}
