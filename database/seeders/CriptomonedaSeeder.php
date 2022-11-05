<?php

namespace Database\Seeders;

use App\Models\Criptomoneda;
use Illuminate\Database\Seeder;

class CriptomonedaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Criptomoneda::factory()->times(1000)->create();
    }
}
