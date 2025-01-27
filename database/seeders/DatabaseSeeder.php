<?php

namespace Database\Seeders;

use App\Models\Property;
use App\Models\RegisterRequest;
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
        Property::factory(100)->create();
        RegisterRequest::factory(100)->create();
    }
}
