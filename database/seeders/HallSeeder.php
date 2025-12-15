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
            'name' => 'Hall 1',
            'capacity' => 150
        ]);
        
        Hall::create([
            'name' => 'Hall 2',
            'capacity' => 200
        ]);
        
        Hall::create([
            'name' => 'IMAX Hall',
            'capacity' => 300
        ]);
    }
}
