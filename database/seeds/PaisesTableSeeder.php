<?php

use Illuminate\Database\Seeder;
use siscontratista\Pais;

class PaisesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = array(
            "Argentina",
            "Chile",
            "Uruguay",
            "Paraguay",
            "Bolivia",
            "Perú",
            "Brasil",
            "Ecuador",
            "Colombia",
            "Venezuela"
        );
        for ($i=0; $i < 10; $i++) { 
            Pais::create(['nombre'=>$items[$i]]);
        }
    }
}
