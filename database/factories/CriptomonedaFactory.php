<?php

namespace Database\Factories;

use App\Models\Criptomoneda;
use Illuminate\Database\Eloquent\Factories\Factory;

class CriptomonedaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Criptomoneda::class;
    public function definition()
    {
        return [
            'logotipo' => $this->faker->name(),
            'nombre' => $this->faker->name(),
            'precio' => $this->faker->randomFloat(2, 1, 1000),
            'descripcion' => $this->faker->name(),
            'lenguaje_id' => $this->faker->numberBetween(1, 1000),
            'fecha_creacion' => $this->faker->date(),
        ];
    }
}
