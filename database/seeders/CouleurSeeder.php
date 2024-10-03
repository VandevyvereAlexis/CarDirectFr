<?php

namespace Database\Seeders;

use App\Models\Couleur;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CouleurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Couleur::insert([
            ['name' => 'Argent'],
            ['name' => 'Beige'],
            ['name' => 'Bleu'],
            ['name' => 'Blanc'],
            ['name' => 'Bordeaux'],
            ['name' => 'Gris'],
            ['name' => 'Jaune'],
            ['name' => 'Marron'],
            ['name' => 'Noir'],
            ['name' => 'Orange'],
            ['name' => 'Rose'],
            ['name' => 'Rouge'],
            ['name' => 'Vert'],
            ['name' => 'Violet'],
            ['name' => 'Autre'],
        ]);
    }
}
