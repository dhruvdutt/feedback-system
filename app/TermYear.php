<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TermYear extends Model
{
		public $timestamps = false;
		protected $table = 'term_year';
		protected $primaryKey = 'term_id';
}
