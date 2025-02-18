<?php

namespace Database\Seeders;

use App\Models\Routine;
use Illuminate\Database\Seeder;

class RoutineSeeder extends Seeder
{
    public function run()
    {
        // Create 50 users
        Routine::factory()->count(60)->create();
    }
}
