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
      DB::table('user_master')->insert([
          'username' => 'dineshprajapati',
          'name' => 'Dinesh Prajapati',
          'password'=> md5('123456'),
          'type' => 'Admin',
          'email'=>'dinesh@gmail.com',
      ]);
      DB::table('user_master')->insert([
          'username' => 'hiteshprajapati',
          'name' => 'Hitesh Prajapati',
          'password'=> md5('123456'),
          'type' => 'Super Admin',
          'email'=>'hitesh@gmail.com',
      ]);
    }
}
