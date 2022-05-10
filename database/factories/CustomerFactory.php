<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Customer::class;

    public function definition()
    {
        return [
            'shop_id'       => random_int(1,3),
            'name'          => $this->faker->name,
            'email'         => $this->faker->unique()->safeEmail,
            'postal'        => $this->faker->postcode,
            'address'       => $this->faker->address,
            'birthdate'     => $this->faker->dateTimeBetween('-90 years', '-18 years'),// 18歳から90歳までの誕生日を生成
            'phone'         => $this->faker->phoneNumber,
            'kramer_flag'   => 0,
        ];
    }
}
