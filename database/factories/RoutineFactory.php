<?php

namespace Database\Factories;

use App\Models\Routine;
use Illuminate\Database\Eloquent\Factories\Factory;

class RoutineFactory extends Factory
{
    protected $model = Routine::class;

    public function definition()
    {
        return [
            'batch_id' => $this->faker->numberBetween(1, 2),     // Example batch IDs from 1 to 10
            'subject_id' => $this->faker->numberBetween(1, 6),   // Example subject IDs from 1 to 10
            'teacher_id' => $this->faker->numberBetween(1, 2),    // Example teacher IDs from 1 to 5
            'day' => $this->faker->randomElement(['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday']),
            'from_time' => $this->faker->time('H:i'),             // Random start time in 24-hour format
            'to_time' => $this->faker->time('H:i'),               // Random end time in 24-hour format
            'added_by' => $this->faker->numberBetween(5, 6),      // Example user IDs for the added_by column
        ];
    }
}
