<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CustomerLog;

class CustomerLogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CustomerLog::factory()->count(120)->create();
    }
}
