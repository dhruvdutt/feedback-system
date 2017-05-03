<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
		public $timestamps = false;
		protected $table = 'option';
		protected $primaryKey = 'option_id';
}
