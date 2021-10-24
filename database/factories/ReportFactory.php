<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Report;
use App\Models\MarkerPoint;
use App\Models\User;

class ReportFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Report::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'description' => $this->faker->realText(),
            'marker_point_id' => MarkerPoint::all(['id'])
                ->random()
                ->id,
            'user_id' => User::all(['id'])
                ->random()
                ->id
        ];
    }
}
