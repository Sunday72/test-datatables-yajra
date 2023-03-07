<?php

namespace Database\Seeders;

use App\Models\School;
use Illuminate\Database\Seeder;
use Database\Factories\SchoolFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        School::factory(100000)->create();
    }
}
