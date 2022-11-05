<?php

namespace Database\Factories;

use App\Models\LenguajeProgramacion;
use Illuminate\Database\Eloquent\Factories\Factory;

class LenguajeProgramacionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = LenguajeProgramacion::class;
    public function definition()
    {
        return [
            'descripcion' => $this->faker->name(),
        ];
    }
}
