<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::create(['name' => 'комедия']);
        Genre::create(['name' => 'экшен']);
        Genre::create(['name' => 'триллер']);
        Genre::create(['name' => 'фэнтези']);
        Genre::create(['name' => 'боевик']);
        Genre::create(['name' => 'мелодрама']);
        Genre::create(['name' => 'приключения']);
    }
}
