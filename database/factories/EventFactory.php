<?php
# @Author: tomfarrelly
# @Date:   2021-02-21T17:19:06+00:00
# @Last modified by:   tomfarrelly
# @Last modified time: 2021-02-21T18:17:32+00:00




namespace Database\Factories;

use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Event::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->lastName,
            'desrciption'
            'date'
            'time' =>
            'user_id' => $this->faker->numberBetween($min = 1, $max = 3),
        ];
    }
}
