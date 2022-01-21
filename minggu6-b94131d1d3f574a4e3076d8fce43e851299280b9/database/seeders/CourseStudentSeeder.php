<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseStudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $course_student = [
            [ 'course_id' => 1, 'student_id' => 1, 'nilai' => 85, ],
            [ 'course_id' => 2, 'student_id' => 1, 'nilai' => 79, ],
            [ 'course_id' => 3, 'student_id' => 1, 'nilai' => 93, ],
            [ 'course_id' => 4, 'student_id' => 1, 'nilai' => 83, ],
            [ 'course_id' => 1, 'student_id' => 2, 'nilai' => 83, ],
            [ 'course_id' => 2, 'student_id' => 2, 'nilai' => 78, ],
            [ 'course_id' => 3, 'student_id' => 2, 'nilai' => 73, ],
            [ 'course_id' => 4, 'student_id' => 2, 'nilai' => 93, ],
            [ 'course_id' => 1, 'student_id' => 3, 'nilai' => 82, ],
            [ 'course_id' => 2, 'student_id' => 3, 'nilai' => 80, ],
            [ 'course_id' => 3, 'student_id' => 3, 'nilai' => 93, ],
            [ 'course_id' => 4, 'student_id' => 3, 'nilai' => 88, ],
            [ 'course_id' => 1, 'student_id' => 4, 'nilai' => 87, ],
            [ 'course_id' => 2, 'student_id' => 4, 'nilai' => 81, ],
            [ 'course_id' => 3, 'student_id' => 4, 'nilai' => 82, ],
            [ 'course_id' => 4, 'student_id' => 4, 'nilai' => 89, ],
            [ 'course_id' => 1, 'student_id' => 5, 'nilai' => 83, ],
            [ 'course_id' => 2, 'student_id' => 5, 'nilai' => 79, ],
            [ 'course_id' => 3, 'student_id' => 5, 'nilai' => 93, ],
            [ 'course_id' => 4, 'student_id' => 5, 'nilai' => 84, ],

        ];    
            DB::table('course_student')->insert($course_student);    
    }
}
