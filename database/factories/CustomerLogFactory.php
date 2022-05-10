<?php

namespace Database\Factories;

use App\Models\CustomerLog;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CustomerLogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

     protected $model = CustomerLog::class;
    public function definition()
    {
        return [
            'customer_id' => random_int(1,30),
            'user_id'     => random_int(1,5),
            'log'         => $this->faker->sentence(40),
        ];
    }
}
