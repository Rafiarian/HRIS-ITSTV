<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'eureka-batch' => 'E-18',
        //     'speciality1' => 'hr',
        //     'speciality2' => 'progremmer',
        //     'userPhoto' => 'netnot',
        //     'email' => 'test@example.com',
        // ]);
    }
}
