<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Profession;


class ProfessionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Profession::class;

    public function definition()
    {
        return [
            'title' => $this->faker->randomElement(['Frontend Developer', 'Backend Developer', 'DBA Administrator'])
        ];
    }
}
