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
            'name' => 'Праздники',
            'poster' => 'movie1.png',
            'age_rating' => '12+',
            'is_premier' => true
        ]);
        
        Cinema::create([
            'name' => 'Мег 2: Бездна',
            'poster' => 'movie2.png',
            'age_rating' => '16+',
            'is_premier' => false
        ]);
        
        Cinema::create([
            'name' => 'Заложники',
            'poster' => 'movie3.png',
            'age_rating' => '16+',
            'is_premier' => false
        ]);
        
        Cinema::create([
            'name' => 'Леди Баг и Супер-Кот: Пробуждение силы',
            'poster' => 'movie4.png',
            'age_rating' => '6+',
            'is_premier' => false
        ]);
        
        Cinema::create([
            'name' => 'Скоро',
            'poster' => null,
            'age_rating' => '0+',
            'is_premier' => true
        ]);
        
        Cinema::create([
            'name' => 'Руслан и Людмила',
            'poster' => 'movie5.png',
            'age_rating' => '0+',
            'is_premier' => true
        ]);
    }
}
