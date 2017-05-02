<?php

use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('student')->insert([
        'student_id' => '201612001',
        'program_id' => '12',
        'course_id' => 'it617',
    ]);

    DB::table('student')->insert([
      'student_id' => '201612001',
      'program_id' => '12',
      'course_id' => 'it616',
  ]);

  DB::table('student')->insert([
    'student_id' => '201612001',
    'program_id' => '12',
    'course_id' => 'it618',
]);

DB::table('student')->insert([
  'student_id' => '201612001',
  'program_id' => '12',
  'course_id' => 'it619',
]);

DB::table('student')->insert([
  'student_id' => '201612001',
  'program_id' => '12',
  'course_id' => 'it694',
]);
DB::table('student')->insert([
  'student_id' => '201612002',
  'program_id' => '12',
  'course_id' => 'it617',
]);

DB::table('student')->insert([
'student_id' => '201612002',
'program_id' => '12',
'course_id' => 'it616',
]);

DB::table('student')->insert([
'student_id' => '201612002',
'program_id' => '12',
'course_id' => 'it618',
]);

DB::table('student')->insert([
'student_id' => '201612002',
'program_id' => '12',
'course_id' => 'it619',
]);

DB::table('student')->insert([
'student_id' => '201612002',
'program_id' => '12',
'course_id' => 'it694',
]);
    }
}
