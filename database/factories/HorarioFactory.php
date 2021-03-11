<?php

namespace Database\Factories;

use App\Models\Horario;
use Illuminate\Database\Eloquent\Factories\Factory;

class HorarioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Horario::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'hora_inicio'=>$this->faker->dateTimeBetween('07:00:00','21:00:00'),
            'hora_fin'=>$this->faker->dateTimeBetween('08:00:00','22:00:00')
        ];
    }
}
