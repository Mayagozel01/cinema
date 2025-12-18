<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Hall;

class HallSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Hall::create([
            'name' => 'Зал 1',
            'capacity' => 120
        ]);
        
        Hall::create([
            'name' => 'Зал 2',
            'capacity' => 80
        ]);
        
        Hall::create([
            'name' => 'Зал 3',
            'capacity' => 150
        ]);
        
        Hall::create([
            'name' => 'VIP Зал',
            'capacity' => 50
        ]);
        
        Hall::create([
            'name' => 'IMAX Зал',
            'capacity' => 250
        ]);
    }
}
