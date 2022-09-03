<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->safeEmail(),
            'profession' => $this->getProfession(),
            'gender' => $this->getGender(),
            'income' => fake()->numberBetween(1000000,1000000000),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }

    public function getProfession(){
        $professions = [
            'doctor', 'teacher', 'nurse', 'engineer', 'thief', 'astronaut',
            'plumber', 'fire fighter', 'mechanic', 'dealer'
        ];
        $profession = rand(0,9);
        return $professions[$profession];
    }
    public function getGender(){
        $genders = [
            'male','female','other','prefer not say'
        ];
        $gender = rand(0,3);
        return $genders[$gender];
    }
}
