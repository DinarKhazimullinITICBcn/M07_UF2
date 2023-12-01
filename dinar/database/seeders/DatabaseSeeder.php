<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Centre;
use App\Models\Professor;
use App\Models\Alumne;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Centre::factory(30)->create();
        Professor::factory(30)->create();
        Alumne::factory(30)->create();
    }
}
