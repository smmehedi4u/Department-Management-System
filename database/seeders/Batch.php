<?php

namespace Database\Seeders;

use App\Models\Batch as ModelsBatch;
use Illuminate\Database\Seeder;

class Batch extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $batches = [
            [
                "session" => "2017-18",
                "name" => "05",
                "added_by" => 1
            ], [
                "session" => "2018-19",
                "name" => "06",
                "added_by" => 1
            ],
        ];

        foreach ($batches as $key => $value) {
            ModelsBatch::create($value);
        }
    }
}
