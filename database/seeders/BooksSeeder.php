<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $cover = [
            'https:marketplace.canva.com/EAFYHx4rn2w/1/0/1131w/canva-coklat-krem-kreatif-modern-cover-buku-agenda-dokumen-a4-0zKNiSfvTXM.jpg',
            'https://buatlogoonline.com/wp-content/uploads/2020/08/cetak-4.jpg',
            'https://images.unsplash.com/photo-1629992101753-56d196c8aabb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=390&q=80',
        ];


        $faker = Faker::create('id_ID');

        for($i= 1; $i <=200; $i++){
            Book::create([
                'publisher_id' => rand(1,10),
                'cover' => $cover[rand(0,2)],
                'title' => $faker->sentence($nbWords = 3, $variableNbWords = true),
                'year' => $faker->year($max = 'now'),
                'author'=> $faker->lastName,
                'description' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        ]);
        }
        
    }
}
