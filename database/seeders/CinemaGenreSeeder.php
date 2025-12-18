<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cinema;
use App\Models\Genre;

class CinemaGenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cinemas = Cinema::all();
        $genres = Genre::all();
        
      
        $movie1 = $cinemas->where('name', 'Праздники')->first();
        $comedy = $genres->where('name', 'комедия')->first();
        if ($movie1 && $comedy) {
            $movie1->genres()->attach($comedy->id);
        }
        
        $movie2 = $cinemas->where('name', 'Мег 2: Бездна')->first();
        $action = $genres->where('name', 'экшен')->first();
        $thriller = $genres->where('name', 'триллер')->first();
        if ($movie2 && $action && $thriller) {
            $movie2->genres()->attach([$action->id, $thriller->id]);
        }
        
        $movie3 = $cinemas->where('name', 'Заложники')->first();
        if ($movie3 && $action && $thriller) {
            $movie3->genres()->attach([$action->id, $thriller->id]);
        }
        
        $movie4 = $cinemas->where('name', 'Леди Баг и Супер-Кот: Пробуждение силы')->first();
        $fantasy = $genres->where('name', 'фэнтези')->first();
        $action2 = $genres->where('name', 'боевик')->first();
        $melodrama = $genres->where('name', 'мелодрама')->first();
        if ($movie4 && $fantasy && $action2 && $melodrama) {
            $movie4->genres()->attach([$fantasy->id, $action2->id, $melodrama->id]);
        }
        
       
        $movie6 = $cinemas->where('name', 'Руслан и Людмила')->first();
        $adventure = $genres->where('name', 'приключения')->first();
        if ($movie6 && $fantasy && $adventure) {
            $movie6->genres()->attach([$fantasy->id, $adventure->id]);
        }
    }
}