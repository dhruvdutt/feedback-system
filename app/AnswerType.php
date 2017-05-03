<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnswerType extends Model
{
		public $timestamps = false;
		protected $table = 'answer_type';
		protected $primaryKey = 'answer_type_id';
}
