<?php

namespace Database\Seeders;
use App\Pol;
use Illuminate\Database\Seeder;

class polSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pol::factory()->count(1000)->create();
        
    }
}
