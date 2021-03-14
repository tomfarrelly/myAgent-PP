<?php
# @Author: tomfarrelly
# @Date:   2021-02-22T14:35:13+00:00
# @Last modified by:   tomfarrelly
# @Last modified time: 2021-02-22T14:51:01+00:00




namespace Database\Factories;

use App\Models\EventManager;
use Illuminate\Database\Eloquent\Factories\Factory;

class EventManagerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = EventManager::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //'name' => $this->faker->name,
        ];
    }
}
