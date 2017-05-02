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
        'username' => 'admin123',
        'name' => 'dinesh prajapati',
        'role' => 'admin',
        'password' => 'admin123',
        'email' => '123@gmail.com',
    ]);
    DB::table('user')->insert([
      'username' => 'superadmin123',
      'name' => 'dean',
      'role' => 'super admin',
      'password' => 'superadmin123',
      'email' => '1234@gmail.com',
   ]);
    }
}
