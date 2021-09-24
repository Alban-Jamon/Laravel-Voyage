<?php

namespace Database\Factories;

use App\Models\Voyage;
use Illuminate\Database\Eloquent\Factories\Factory;

class VoyageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Voyage::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'location' => $this->faker->country(),
            'description' => $this->faker->sentence(),
            'travelDate' => $this->faker->date('Y-m-d'),
            'price' => $this->faker->randomFloat(2,500,9999),
            'organizer' => $this->faker->company(),
            'note' => $this->faker->numberBetween(0,5),
            'views' => $this->faker->numberBetween(0,99999)
        ];
    }
}
