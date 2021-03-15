<?php
# @Author: tomfarrelly
# @Date:   2021-02-21T17:19:06+00:00
# @Last modified by:   tomfarrelly
# @Last modified time: 2021-02-22T16:17:14+00:00




namespace Database\Factories;

use App\Models\Event;
use App\Models\User;
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
            'description'=> $this->faker->sentence($nb = 3, $asText = false),
            'date' => $this->faker->date($format = 'Y-m-d', $min = '-6 months', $max = 'now'), 
            'time' => $this->faker->time($format = 'H:i:s', $max = 'now'),
            'user_id' => User::factory(),
            'genre_id' => $this->faker->numberBetween($min = 1, $max = 7),
            'venue_id' => $this->faker->numberBetween($min = 1, $max = 5),
        ];
    }
}
