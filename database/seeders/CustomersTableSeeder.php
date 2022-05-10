<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;
class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::factory()->count(200)->create();
    }
}
