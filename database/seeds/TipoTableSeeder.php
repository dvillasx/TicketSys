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
        Tipo::create(['nombre_tipo' => 'Informe Fiscal', 'area_id' => 1]);
        Tipo::create(['nombre_tipo' => 'Internet', 'area_id' => 2]);
        Tipo::create(['nombre_tipo' => 'Derrame de líquido', 'area_id' => 3]);
        Tipo::create(['nombre_tipo' => 'Catálogo', 'area_id' => 4]);
        Tipo::create(['nombre_tipo' => 'Quincena', 'area_id' => 5]);
    }
}
