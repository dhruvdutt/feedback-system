<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
		/**
			* Run the database seeds.
			*
			* @return void
			*/
		public function run()
		{

				DB::table('user')->insert([
						'username' => 'admin',
						'name' => 'Dinesh Prajapati',
						'role' => 'admin',
						'password' => 'admin',
						'email' => 'admin@daiict.ac.in',
				]);

				DB::table('user')->insert([
						'username' => 'superadmin',
						'name' => 'Dean',
						'role' => 'superadmin',
						'password' => 'superadmin',
						'email' => 'superadmin@daiict.ac.in',
				]);
		}
}
