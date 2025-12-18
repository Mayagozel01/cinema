<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Showtime;
use App\Models\Cinema;
use App\Models\Hall;

class ShowtimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cinemas = Cinema::all();
        $halls = Hall::all();
        
        if ($cinemas->count() > 0 && $halls->count() > 0) {
            $mainHall = $halls->where('name', 'Зал 3')->first() ?? $halls->first();
            
            $movie1 = $cinemas->where('name', 'Праздники')->first();
            if ($movie1) {
                Showtime::create([
                    'cinema_id' => $movie1->id,
                    'hall_id' => $mainHall->id,
                    'show_time' => '15:35:00',
                    'price' => 1233.00
                ]);
                
                Showtime::create([
                    'cinema_id' => $movie1->id,
                    'hall_id' => $mainHall->id,
                    'show_time' => '17:40:00',
                    'price' => 1233.00
                ]);
                
                Showtime::create([
                    'cinema_id' => $movie1->id,
                    'hall_id' => $mainHall->id,
                    'show_time' => '19:15:00',
                    'price' => 1233.00
                ]);
                
                Showtime::create([
                    'cinema_id' => $movie1->id,
                    'hall_id' => $mainHall->id,
                    'show_time' => '21:05:00',
                    'price' => 1233.00
                ]);
                
                Showtime::create([
                    'cinema_id' => $movie1->id,
                    'hall_id' => $mainHall->id,
                    'show_time' => '21:40:00',
                    'price' => 1233.00
                ]);
                
                Showtime::create([
                    'cinema_id' => $movie1->id,
                    'hall_id' => $mainHall->id,
                    'show_time' => '22:45:00',
                    'price' => 1233.00
                ]);
            }
            
            // Movie 2: Мег 2: Бездна
            $movie2 = $cinemas->where('name', 'Мег 2: Бездна')->first();
            if ($movie2) {
                Showtime::create([
                    'cinema_id' => $movie2->id,
                    'hall_id' => $mainHall->id,
                    'show_time' => '15:35:00',
                    'price' => 1233.00
                ]);
                
                Showtime::create([
                    'cinema_id' => $movie2->id,
                    'hall_id' => $mainHall->id,
                    'show_time' => '17:40:00',
                    'price' => 1233.00
                ]);
                
                Showtime::create([
                    'cinema_id' => $movie2->id,
                    'hall_id' => $mainHall->id,
                    'show_time' => '19:15:00',
                    'price' => 1233.00
                ]);
            }
            
            // Movie 3: Заложники
            $movie3 = $cinemas->where('name', 'Заложники')->first();
            if ($movie3) {
                Showtime::create([
                    'cinema_id' => $movie3->id,
                    'hall_id' => $mainHall->id,
                    'show_time' => '16:10:00',
                    'price' => 1233.00
                ]);
                
                Showtime::create([
                    'cinema_id' => $movie3->id,
                    'hall_id' => $mainHall->id,
                    'show_time' => '21:30:00',
                    'price' => 1233.00
                ]);
            }
            
            $movie4 = $cinemas->where('name', 'Леди Баг и Супер-Кот: Пробуждение силы')->first();
            if ($movie4) {
                Showtime::create([
                    'cinema_id' => $movie4->id,
                    'hall_id' => $mainHall->id,
                    'show_time' => '16:10:00',
                    'price' => 1233.00
                ]);
                
                Showtime::create([
                    'cinema_id' => $movie4->id,
                    'hall_id' => $mainHall->id,
                    'show_time' => '21:30:00',
                    'price' => 1233.00
                ]);
            }
            
            $movie6 = $cinemas->where('name', 'Руслан и Людмила')->first();
            if ($movie6) {
                Showtime::create([
                    'cinema_id' => $movie6->id,
                    'hall_id' => $mainHall->id,
                    'show_time' => '14:00:00',
                    'price' => 1233.00
                ]);
                
                Showtime::create([
                    'cinema_id' => $movie6->id,
                    'hall_id' => $mainHall->id,
                    'show_time' => '18:30:00',
                    'price' => 1233.00
                ]);
            }
        }
    }
}
