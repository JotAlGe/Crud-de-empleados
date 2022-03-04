<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Level;

class LevelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Level::class;

    public function definition()
    {
        return [
            'description' => $this->faker->randomElement(['Common user', 'Other type of user'])
        ];
    }
}
