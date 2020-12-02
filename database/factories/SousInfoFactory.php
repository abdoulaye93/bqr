<?php

namespace Database\Factories;

use App\Models\Info;
use App\Models\SousInfo;
use Illuminate\Database\Eloquent\Factories\Factory;

class SousInfoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SousInfo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'info_id' => Info::factory()
        ];
    }
}
