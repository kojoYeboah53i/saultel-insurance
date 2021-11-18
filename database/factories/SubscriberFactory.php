<?php

namespace Database\Factories;
use App\Models\Subscriber;

use Illuminate\Database\Eloquent\Factories\Factory;

class SubscriberFactory extends Factory
{
        /**

     * The name of the factory's corresponding model.

     *

     * @var string

     */

    protected $model = Subscriber::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'partner_id' => 1,
        ];
    }
}
//use tinker to create a subscriber
      // Subscriber::factory()->count(5)->create();
      //php artisan make:factory AddressFactory --model="App\\Address"