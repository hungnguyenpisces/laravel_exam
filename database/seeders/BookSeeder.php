<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        $limit = 100;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('books')->insert([
                'authorid' => $faker->numberBetween(1, 100),
                'title' => $faker->sentence,
                'ISBN' => $faker->isbn13,
                'pub_year' => $faker->year,
                'available' => $faker->numberBetween(0, 1),
            ]);
        }
    }
}
