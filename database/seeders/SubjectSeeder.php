<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subs = [
            [
                "course_code" => "501",
                "name" => "Database",
                "semester" => 5,
                "added_by" => 1
            ], [
                "course_code" => "502",
                "name" => "Database (sessional)",
                "semester" => 5,
                "added_by" => 1
            ],[
                "course_code" => "301",
                "name" => "Data Structure",
                "semester" => 3,
                "added_by" => 1
            ],[
                "course_code" => "401",
                "name" => "Algorithms",
                "semester" => 4,
                "added_by" => 1
            ],
        ];

        foreach ($subs as $key => $value) {
            Subject::create($value);
        }
    }
}
