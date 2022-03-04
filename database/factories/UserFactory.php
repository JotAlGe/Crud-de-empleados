<?php

namespace Database\Factories;


use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = User::class;


    public function definition()
    {
        $name = $this->faker->name();
        return [
            'name' => $name,
            'slug' => Str::slug($name, '-'),
            'lastname' => $this->faker->sentence(),
            'email' => $this->faker->unique()->safeEmail(),
            'password' => bcrypt('123'),
            'id_level' => rand(1, 2),
            'profession_id' => rand(1, 3)
        ];
    }

    /*  public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    } */

    /* protected static function newFactory()
    {
        return UserFactory::new();
    } */
}
