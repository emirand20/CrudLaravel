<?php

namespace Database\Factories;

use App\Pol;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Pol>
 */
class PolFactory extends Factory
{
    protected $model = Pol::class;

    public function definition()
    {
        $faker =  Faker::create();

        return [
            'nombre' => $faker->unique()->text(50),
            'velocidad' => $faker->paragraph(3),
            'posicion' => $faker->randomFloat(2, 100, 1000),
            'fisico' => $faker->randomFloat(2, 1100, 2000),
            'ritmo' => $faker->randomElement(['S','N']),
            'regate' => $faker->numberBetween(0, 6000),
        ];
    }
}
