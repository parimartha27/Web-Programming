<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jenisKategori = [
            'Fiksi',
            'Sains',
            'Sejarah',
            'Bisnis',
            'Pendidikan',
            'Agama',
            'Teknologi',
            'Seni',
            'Kuliner',
            'Self-Help',
        ];

        for($i = 0; $i < 10; $i++){
            Category::create([
                'category' => $jenisKategori[$i]
            ]);
        }
    }
}
