<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
            CouleurSeeder::class,
            MarqueSeeder::class,
            CritairSeeder::class,
            EuroSeeder::class,
            UserSeeder::class,
            AvisSeeder::class,
            DiscussionSeeder::class,
            MessageSeeder::class,
            VehiculeSeeder::class,
            FavorisSeeder::class,
        ]);
    }
}
