<?php
# @Author: tomfarrelly
# @Date:   2021-02-21T17:19:35+00:00
# @Last modified by:   tomfarrelly
# @Last modified time: 2021-02-21T18:12:50+00:00




namespace Database\Factories;

use App\Models\Dj;
use Illuminate\Database\Eloquent\Factories\Factory;

class DjFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Dj::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'price' => $this->faker->numberBetween($min = 50, $max = 2000),
        ];
    }
}
