<?php

use App\Area;
use Illuminate\Database\Seeder;

class AreaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Area::create(['nombre_area' => 'Contabilidad']);
        Area::create(['nombre_area' => 'Informática']);
        Area::create(['nombre_area' => 'Aseo']);
        Area::create(['nombre_area' => 'Ventas']);
        Area::create(['nombre_area' => 'Recursos Humanos']);
    }
}
