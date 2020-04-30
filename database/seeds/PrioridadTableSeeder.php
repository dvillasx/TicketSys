<?php

use App\Prioridad;
use Illuminate\Database\Seeder;

class PrioridadTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Prioridad::create(['nombre_prioridad' => 'Emergencia']);
        Prioridad::create(['nombre_prioridad' => 'Urgencia']);
        Prioridad::create(['nombre_prioridad' => 'Necesario']);
        Prioridad::create(['nombre_prioridad' => 'Deseable']);
        Prioridad::create(['nombre_prioridad' => 'Prorrogable']);
    }
}
