<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Publisher;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PublishersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for($i= 1; $i <= 10; $i++){
            Publisher::create([
                'name' => $faker->name,
                'address'=> $faker->address,
                'phone' => $faker->phoneNumber,
                'email' => $faker->safeEmail,
        ]);
        }
    }
}
