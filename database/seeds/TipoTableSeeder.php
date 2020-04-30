<?php

use App\Tipo;
use Illuminate\Database\Seeder;

class TipoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tipo::create(['nombre_tipo' => 'Informe Fiscal']);
        Tipo::create(['nombre_tipo' => 'Internet']);
        Tipo::create(['nombre_tipo' => 'Derrame de líquido']);
        Tipo::create(['nombre_tipo' => 'Catálogo']);
        Tipo::create(['nombre_tipo' => 'Quincena']);
    }
}
