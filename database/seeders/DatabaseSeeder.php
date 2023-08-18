<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            DB::table('_channel')->insert([
                'ChannelName' => $faker->sentence,
                'Description' => $faker->paragraph,
                // Các trường dữ liệu khác...
            ]);
        }
    }
}
