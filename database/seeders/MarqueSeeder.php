<?php

namespace Database\Seeders;

use App\Models\Marque;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MarqueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Marque::insert([
            ['name' => 'Abarth'],
            ['name' => 'Acura'],
            ['name' => 'Alfa Romeo'],
            ['name' => 'Alpina'],
            ['name' => 'Aston Martin'],
            ['name' => 'Audi'],
            ['name' => 'BMW'],
            ['name' => 'Bristol'],
            ['name' => 'Bugatti'],
            ['name' => 'Buick'],
            ['name' => 'BYD'],
            ['name' => 'Cadillac'],
            ['name' => 'Caterham'],
            ['name' => 'Changan'],
            ['name' => 'Chevrolet'],
            ['name' => 'Chrysler'],
            ['name' => 'Citroën'],
            ['name' => 'Dacia'],
            ['name' => 'Dallara'],
            ['name' => 'Datsun'],
            ['name' => 'Dodge'],
            ['name' => 'Ferrari'],
            ['name' => 'Fiat'],
            ['name' => 'Ford'],
            ['name' => 'Genesis'],
            ['name' => 'Geely'],
            ['name' => 'GMC'],
            ['name' => 'Great Wall'],
            ['name' => 'Honda'],
            ['name' => 'Hyundai'],
            ['name' => 'Infiniti'],
            ['name' => 'Jaguar'],
            ['name' => 'Jeep'],
            ['name' => 'Kia'],
            ['name' => 'Lamborghini'],
            ['name' => 'Land Rover'],
            ['name' => 'Lexus'],
            ['name' => 'Lincoln'],
            ['name' => 'Lotus'],
            ['name' => 'Lynk & Co'],
            ['name' => 'Mazda'],
            ['name' => 'Mahindra'],
            ['name' => 'McLaren'],
            ['name' => 'Mercedes-Benz'],
            ['name' => 'Mini'],
            ['name' => 'Mitsubishi'],
            ['name' => 'Morgan'],
            ['name' => 'Nissan'],
            ['name' => 'NIO'],
            ['name' => 'Pagani'],
            ['name' => 'Peugeot'],
            ['name' => 'Pininfarina'],
            ['name' => 'Polestar'],
            ['name' => 'Porsche'],
            ['name' => 'Proton'],
            ['name' => 'Renault'],
            ['name' => 'Rolls-Royce'],
            ['name' => 'Saab'],
            ['name' => 'Seat'],
            ['name' => 'Skoda'],
            ['name' => 'Smart'],
            ['name' => 'Spyker'],
            ['name' => 'Subaru'],
            ['name' => 'Suzuki'],
            ['name' => 'Tesla'],
            ['name' => 'Toyota'],
            ['name' => 'Tata'],
            ['name' => 'Volkswagen'],
            ['name' => 'Volvo'],
            ['name' => 'Wiesmann'],
            ['name' => 'Xpeng'],
            ['name' => 'Zenos'],
            ['name' => 'Autre'],
        ]);
    }
}
