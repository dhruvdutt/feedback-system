<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(UsersTableSeeder::class);
        $this->call(TermYearSeeder::class);
        $this->call(ProgramSeeder::class);
        $this->call(CourseSeeder::class);
        $this->call(ProgramCourseTermSeeder::class);
        $this->call(QuestionSeeder::class); //
        $this->call(AnswerSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(FeedbackMetaDataSeeder::class);
        $this->call(AttendanceSeeder::class);
        $this->call(FeedbackSeeder::class);
        $this->call(RadioOptionSeeder::class);
        $this->call(StudentFeedbackSeeder::class);


        Model::reguard();
    }
}
