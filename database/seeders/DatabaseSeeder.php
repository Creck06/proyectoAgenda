<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\estado;
use App\Models\salon;
use App\Models\tipodistribucion;
use App\Models\tipoevento;
use App\Models\tipomesa;
use App\Models\tiposilla;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        tipomesa::factory()->times(15)->create();
        tipoevento::factory()->times(15)->create();
        tipodistribucion::factory()->times(15)->create();
        tiposilla::factory()->times(15)->create();
        salon::factory()->times(15)->create();
        estado::factory()
            ->count(2)
            ->sequence(
                ['Descripcion' => 'Activo'],
                ['Descripcion' => 'Inactivo'],
            )
            ->create();

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
