<?php

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
        // $this->call(UserTableSeeder::class);
        $this->call(AreaTableSeeder::class);
        $this->call(TipoTableSeeder::class);
        $this->call(PrioridadTableSeeder::class);
        $this->call(EstatusTableSeeder::class);
    }
}
