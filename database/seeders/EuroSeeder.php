<?php

namespace Database\Seeders;

use App\Models\Euro;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EuroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Euro::insert([
            ['name' => 'Euro_1'],
            ['name' => 'Euro_2'],
            ['name' => 'Euro_3'],
            ['name' => 'Euro_4'],
            ['name' => 'Euro_5'],
            ['name' => 'Euro_6'],
        ]);
    }
}
