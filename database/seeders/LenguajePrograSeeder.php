<?php

namespace Database\Seeders;

use App\Models\LenguajeProgramacion;
use Illuminate\Database\Seeder;

class LenguajePrograSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LenguajeProgramacion::factory()->times(1000)->create();
    }
}
