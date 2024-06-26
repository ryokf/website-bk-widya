<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CounselingDetail>
 */
class CounselingDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'counseling_id' => $this->faker->numberBetween(1, 10),
            'question_id' => $this->faker->numberBetween(1, 10),
            'answer' => $this->faker->sentence(),
        ];
    }
}
