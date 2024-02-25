<?php

namespace App\Services\Doorway\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class VisitorsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            [
                'visitor_name' => $this->faker->name(),
                'visitor_mobile' => $this->faker->number(10),
                'visitor_address' => $this->faker->word(2),
                'person_to_meet' => $this->faker->name(),
                'purpose' => $this->faker->name(),
                'date_time' => $this->faker->date(),
            ]
        ];
    }
}
