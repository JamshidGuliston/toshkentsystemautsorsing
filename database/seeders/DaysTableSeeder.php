<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Day;

class DaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        day::create(
            [
                'day_number' => 0,
                'month_id'=> 0,
                'year_id'=> 0,
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
            ]
        );
    }
}
