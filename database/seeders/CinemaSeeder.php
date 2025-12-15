<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cinema;

class CinemaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cinema::create([
            'name' => 'Avengers: Endgame',
            'poster' => 'avengers_endgame.jpg',
            'age_rating' => '16+',
            'is_premier' => true
        ]);
        
        Cinema::create([
            'name' => 'Spider-Man: Far From Home',
            'poster' => 'spiderman_far_from_home.jpg',
            'age_rating' => '14+',
            'is_premier' => false
        ]);
        
        Cinema::create([
            'name' => 'Toy Story 4',
            'poster' => 'toy_story_4.jpg',
            'age_rating' => '0+',
            'is_premier' => true
        ]);
    }
}
