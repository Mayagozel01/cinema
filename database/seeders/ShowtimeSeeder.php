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
        $cinema1 = Cinema::first();
        $cinema2 = Cinema::skip(1)->first();
        
        $hall1 = Hall::first();
        $hall2 = Hall::skip(1)->first();
        
        if ($cinema1 && $cinema2 && $hall1 && $hall2) {
            Showtime::create([
                'cinema_id' => $cinema1->id,
                'hall_id' => $hall1->id,
                'show_time' => '14:00:00',
                'price' => 15.99
            ]);
            
            Showtime::create([
                'cinema_id' => $cinema1->id,
                'hall_id' => $hall2->id,
                'show_time' => '17:30:00',
                'price' => 18.99
            ]);
            
            Showtime::create([
                'cinema_id' => $cinema2->id,
                'hall_id' => $hall1->id,
                'show_time' => '15:30:00',
                'price' => 12.99
            ]);
        }
    }
}
