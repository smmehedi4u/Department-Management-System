<?php

namespace Database\Seeders;

use App\Models\StdProfile;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(LaratrustSeeder::class);
        $this->call(CreateUsersSeeder::class);
        $this->call(Batch::class);
        $this->call(SubjectSeeder::class);
        $this->call(RoutineSeeder::class);
        $this->call(StdProfileSeeder::class);
    }
}
