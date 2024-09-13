<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\WashService;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            "name" => "Test User",
            "email" => "test@example.com",
        ]);

        WashService::insert([
            [
                "name" => "Motor < 250cc",
                "price" => 15000,
            ],
            [
                "name" => "Motor > 250cc",
                "price" => 30000,
            ],
            [
                "name" => "Mobil",
                "price" => 70000,
            ],
            [
                "name" => "Minibus",
                "price" => 150000,
            ],
        ]);
    }
}
