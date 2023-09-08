<?php

namespace Database\Seeders;
use Database\Seeders\KitSeeder;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use  Database\Seeders\HomeSeeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            KitSeeder::class,
        // \App\Models\User::factory(10)->create();
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            HomeSeeder::class,
        ]);
    }
}
