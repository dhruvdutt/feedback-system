<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FeedbackMetaData extends Model
{
		public $timestamps = false;
		protected $table = 'feedback_meta_data';
		protected $primaryKey = 'feedback_id';
}
