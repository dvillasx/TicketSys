<?php

use App\Estatus;
use Illuminate\Database\Seeder;

class EstatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Estatus::create(['nombre_estatus' => 'Listo']);
        Estatus::create(['nombre_estatus' => 'En proceso']);
        Estatus::create(['nombre_estatus' => 'Pendiente']);
        Estatus::create(['nombre_estatus' => 'Bloqueado']);
    }
}
