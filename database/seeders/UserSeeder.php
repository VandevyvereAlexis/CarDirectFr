<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // ADMIN
        User::create([
            'nom'               => 'Admin',
            'prenom'            => 'Admin',
            'pseudo'            => 'Admin',
            'image'             => 'defaultAdmin.jpg',
            'numero'            => '0736484629',
            'password'          => Hash::make('Admin2025!'),
            'email'             => 'admin@admin.fr',
            'email_verified_at' => now(),
            'remember_token'    => Str::random(10),
            'role_id'           => 2,
        ]);

        // USER
        User::create([
            'nom'               => 'User',
            'prenom'            => 'User',
            'pseudo'            => 'User',
            'image'             => 'defaultUser.jpg',
            'numero'            => '0775940802',
            'password'          => Hash::make('User2025!'),
            'email'             => 'user@user.fr',
            'email_verified_at' => now(),
            'remember_token'    => Str::random(10),
            'role_id'           => 1,
        ]);

        User::factory(100)->create();
    }
}
