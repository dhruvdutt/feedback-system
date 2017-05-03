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
        $this->call(UserSeeder::class);
        $this->call(FeedbackMetaDataSeeder::class);
        $this->call(FeedbackProgramSeeder::class);
        $this->call(StudentSeeder::class);
        $this->call(AttendanceSeeder::class);
        $this->call(AnswerSeeder::class);
        $this->call(QuestionMetaSeeder::class);
        $this->call(OptionSeeder::class);
        $this->call(QuestionLinkSeeder::class);
        $this->call(FeedbackSeeder::class);
        $this->call(StudentFeedbackSeeder::class);


        Model::reguard();
    }
}
