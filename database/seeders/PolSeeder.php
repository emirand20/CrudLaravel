<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Str;
use Faker\Factory as Faker;

class PolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        foreach( range(1,12) as $value){
            DB::table('DivisionA') -> insert([
                'nombre'=> $faker->name,
                'pais' => $faker->word,
                'velocidad' => $faker->int,
                'posicion' => $faker->word,
                'fisico' => $faker->int,
                'ritmo' => $faker->int,
                'regate' => $faker->int,
            ]);
        }

    }
}
