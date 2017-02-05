<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //Esto llama al método run de la clase AppTablesSeeder
      $this->call(AppTablesSeeder::class);
    }
}
