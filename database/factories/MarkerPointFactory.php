<?php

namespace Database\Factories;

use App\Models\MarkerPoint;
use Illuminate\Database\Eloquent\Factories\Factory;

class MarkerPointFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MarkerPoint::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => 'Pemantuan CCTV '. $this->faker->streetAddress(),
            'lat' => $this->faker->lat(),
            'lang' => $this->faker->lang()
        ];
    }
}
