<?php

namespace Database\Factories;

use App\Models\Localite;
use App\Models\Region;
use Illuminate\Database\Eloquent\Factories\Factory;

class LocaliteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Localite::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'region_id' => Region::factory(),
        ];
    }
}
