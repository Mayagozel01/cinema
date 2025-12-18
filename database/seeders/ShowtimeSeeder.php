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
            $hall1 = $halls->where('name', 'Зал 1')->first();
            $hall2 = $halls->where('name', 'Зал 2')->first();
            $hall3 = $halls->where('name', 'Зал 3')->first();
            $vipHall = $halls->where('name', 'VIP Зал')->first();
            $imaxHall = $halls->where('name', 'IMAX Зал')->first();
            
            $movie1 = $cinemas->where('name', 'Праздники')->first();
            if ($movie1 && $hall1 && $hall3) {
                // Show in Зал 1
                Showtime::create([
                    'cinema_id' => $movie1->id,
                    'hall_id' => $hall1->id,
                    'show_time' => '15:35:00',
                    'price' => 1233.00
                ]);
                
                Showtime::create([
                    'cinema_id' => $movie1->id,
                    'hall_id' => $hall1->id,
                    'show_time' => '17:40:00',
                    'price' => 1233.00
                ]);
                
                Showtime::create([
                    'cinema_id' => $movie1->id,
                    'hall_id' => $hall3->id,
                    'show_time' => '19:15:00',
                    'price' => 1233.00
                ]);
                
                Showtime::create([
                    'cinema_id' => $movie1->id,
                    'hall_id' => $hall3->id,
                    'show_time' => '21:05:00',
                    'price' => 1233.00
                ]);
                
                Showtime::create([
                    'cinema_id' => $movie1->id,
                    'hall_id' => $hall3->id,
                    'show_time' => '21:40:00',
                    'price' => 1233.00
                ]);
                
                Showtime::create([
                    'cinema_id' => $movie1->id,
                    'hall_id' => $hall3->id,
                    'show_time' => '22:45:00',
                    'price' => 1233.00
                ]);
            }
            
            $movie2 = $cinemas->where('name', 'Мег 2: Бездна')->first();
            if ($movie2 && $imaxHall) {
                Showtime::create([
                    'cinema_id' => $movie2->id,
                    'hall_id' => $imaxHall->id,
                    'show_time' => '15:35:00',
                    'price' => 1500.00
                ]);
                
                Showtime::create([
                    'cinema_id' => $movie2->id,
                    'hall_id' => $imaxHall->id,
                    'show_time' => '17:40:00',
                    'price' => 1500.00
                ]);
                
                Showtime::create([
                    'cinema_id' => $movie2->id,
                    'hall_id' => $imaxHall->id,
                    'show_time' => '19:15:00',
                    'price' => 1500.00
                ]);
            }
            
            $movie3 = $cinemas->where('name', 'Заложники')->first();
            if ($movie3 && $vipHall) {
                Showtime::create([
                    'cinema_id' => $movie3->id,
                    'hall_id' => $vipHall->id,
                    'show_time' => '16:10:00',
                    'price' => 2000.00
                ]);
                
                Showtime::create([
                    'cinema_id' => $movie3->id,
                    'hall_id' => $vipHall->id,
                    'show_time' => '21:30:00',
                    'price' => 2000.00
                ]);
            }
            
            $movie4 = $cinemas->where('name', 'Леди Баг и Супер-Кот: Пробуждение силы')->first();
            if ($movie4 && $hall2) {
                Showtime::create([
                    'cinema_id' => $movie4->id,
                    'hall_id' => $hall2->id,
                    'show_time' => '16:10:00',
                    'price' => 1233.00
                ]);
                
                Showtime::create([
                    'cinema_id' => $movie4->id,
                    'hall_id' => $hall2->id,
                    'show_time' => '21:30:00',
                    'price' => 1233.00
                ]);
            }
            
            $movie6 = $cinemas->where('name', 'Руслан и Людмила')->first();
            if ($movie6 && $hall1 && $imaxHall) {
                Showtime::create([
                    'cinema_id' => $movie6->id,
                    'hall_id' => $hall1->id,
                    'show_time' => '14:00:00',
                    'price' => 1233.00
                ]);
                
                Showtime::create([
                    'cinema_id' => $movie6->id,
                    'hall_id' => $imaxHall->id,
                    'show_time' => '18:30:00',
                    'price' => 1500.00
                ]);
            }
        }
    }
}
