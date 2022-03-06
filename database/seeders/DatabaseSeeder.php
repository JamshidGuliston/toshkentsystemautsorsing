<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *php artisan make:seeder Age_rangeTableSeeder
     *php artisan db:seed
     * @return void
     */
    public function run()
    {
        $this->call([
            MonthSeeder::class,
            Age_rangeTableSeeder::class,
            Meal_timeTableSeeder::class,
            SeasonsTableSeeder::class,
            SizeTableSeeder::class,
        ]);
    }
}
