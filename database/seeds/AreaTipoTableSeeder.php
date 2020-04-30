<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AreaTipoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // //No usar esto demasiado
        DB::table('area_tipo')->insert(['area_id' => 1,'tipo_id' => 1]);
        DB::table('area_tipo')->insert(['area_id' => 2,'tipo_id' => 2]);
        DB::table('area_tipo')->insert(['area_id' => 3,'tipo_id' => 3]);
        DB::table('area_tipo')->insert(['area_id' => 4,'tipo_id' => 4]);
        DB::table('area_tipo')->insert(['area_id' => 5,'tipo_id' => 5]);
        

       
        

    }
}
