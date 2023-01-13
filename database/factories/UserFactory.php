<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
            'name' =>  $this->faker->name(),
            'email' => $this->faker->email(),
            'ip_address' => $this->faker->ipv4(),
            'referrer' => $this->faker->freeEmailDomain(),
            'user_agent' => $this->faker->userAgent()
        ];
    }

}
