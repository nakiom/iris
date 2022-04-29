<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class ProvinciaSeeder extends Seeder
{
    const ARGENTINA = 1;
    const CHILE = 46;
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PaisSeeder::class);

        $this->command->info('Loading States');

        $this->provincias(self::ARGENTINA);

        $this->provinciasChilenas(self::CHILE);
    }

    protected function provincias($pais_id)
    {
        DB::table('provincias')->insert([
            [
                "id" => 1, 
                "nombre" => "buenos aires", 
                "alias" => "pba", 
                "iso" => "AR-B", 
                "pais_id" => $pais_id
            ],[
                "id" => 2, 
                "nombre" => "catamarca", 
                "alias" => "cat", 
                "iso" => "AR-K", 
                "pais_id" => $pais_id
            ],[
                "id" => 3, 
                "nombre" => "chaco", 
                "alias" => "cha", 
                "iso" => "AR-H", 
                "pais_id" => $pais_id
            ],[
                "id" => 4, 
                "nombre" => "chubut", 
                "alias" => "chu", 
                "iso" => "AR-U", 
                "pais_id" => $pais_id
            ],[
                "id" => 5, 
                "nombre" => "cordoba", 
                "alias" => "cba", 
                "iso" => "AR-X", 
                "pais_id" => $pais_id
            ],[
                "id" => 6, 
                "nombre" => "corrientes", 
                "alias" => "cte", 
                "iso" => "AR-W", 
                "pais_id" => $pais_id
            ],[
                "id" => 7, 
                "nombre" => "entre rios", 
                "alias" => "eri", 
                "iso" => "AR-E", 
                "pais_id" => $pais_id
            ],[
                "id" => 8, 
                "nombre" => "formosa", 
                "alias" => "for", 
                "iso" => "AR-P", 
                "pais_id" => $pais_id
            ],[
                "id" => 9, 
                "nombre" => "jujuy", 
                "alias" => "juy", 
                "iso" => "AR-Y", 
                "pais_id" => $pais_id
            ],[
                "id" => 10, 
                "nombre" => "la pampa", 
                "alias" => "lpa", 
                "iso" => "AR-L", 
                "pais_id" => $pais_id
            ],[
                "id" => 11, 
                "nombre" => "la rioja", 
                "alias" => "lri", 
                "iso" => "AR-F", 
                "pais_id" => $pais_id
            ],[
                "id" => 12, 
                "nombre" => "mendoza", 
                "alias" => "mza", 
                "iso" => "AR-M", 
                "pais_id" => $pais_id
            ],[
                "id" => 13, 
                "nombre" => "misiones", 
                "alias" => "mis", 
                "iso" => "AR-N", 
                "pais_id" => $pais_id
            ],[
                "id" => 14, 
                "nombre" => "neuquen", 
                "alias" => "neu", 
                "iso" => "AR-Q", 
                "pais_id" => $pais_id
            ],[
                "id" => 15, 
                "nombre" => "rio negro", 
                "alias" => "rng", 
                "iso" => "AR-R", 
                "pais_id" => $pais_id
            ],[
                "id" => 16, 
                "nombre" => "salta", 
                "alias" => "sta", 
                "iso" => "AR-A", 
                "pais_id" => $pais_id
            ],[
                "id" => 17, 
                "nombre" => "san juan", 
                "alias" => "sju", 
                "iso" => "AR-J", 
                "pais_id" => $pais_id
            ],[
                "id" => 18, 
                "nombre" => "san luis", 
                "alias" => "slu", 
                "iso" => "AR-D", 
                "pais_id" => $pais_id
            ],[
                "id" => 19, 
                "nombre" => "santa cruz", 
                "alias" => "scr", 
                "iso" => "AR-Z", 
                "pais_id" => $pais_id
            ],[
                "id" => 20, 
                "nombre" => "santa fe", 
                "alias" => "sfe", 
                "iso" => "AR-S", 
                "pais_id" => $pais_id
            ],[
                "id" => 21, 
                "nombre" => "santiago del estero", 
                "alias" => "sgo", 
                "iso" => "AR-G", 
                "pais_id" => $pais_id
            ],[
                "id" => 22, 
                "nombre" => "tierra del fuego", 
                "alias" => "tdf", 
                "iso" => "AR-V", 
                "pais_id" => $pais_id
            ],[
                "id" => 23, 
                "nombre" => "tucuman", 
                "alias" => "tuc", 
                "iso" => "AR-T", 
                "pais_id" => $pais_id
            ],[
                "id" => 24, 
                "nombre" => "ciudad autonoma de bs. as.", 
                "alias" => "caba", 
                "iso" => "AR-C", 
                "pais_id" => $pais_id
            ],
        ]);
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    protected function provinciasChilenas($pais_id)
    {
        DB::table('provincias')->insert([
            [
                "id" => 25, 
                "nombre" => "antofagasta", 
                "iso" => "CL-AN", 
                "pais_id" => $pais_id
            ],[
                "id" => 26, 
                "nombre" => "arica y parinacota", 
                "iso" => "CL-AP", 
                "pais_id" => $pais_id
            ],[
                "id" => 27, 
                "nombre" => "atacama", 
                "iso" => "CL-AT", 
                "pais_id" => $pais_id
            ],[
                "id" => 28, 
                "nombre" => "aysen del general carlos ibáñez del campo", 
                "iso" => "CL-AI", 
                "pais_id" => $pais_id
            ],[
                "id" => 29, 
                "nombre" => "bío-bío", 
                "iso" => "CL-BI", 
                "pais_id" => $pais_id
            ],[
                "id" => 30, 
                "nombre" => "coquimbo", 
                "iso" => "CL-CO", 
                "pais_id" => $pais_id
            ],[
                "id" => 31, 
                "nombre" => "la araucanía", 
                "iso" => "CL-AR", 
                "pais_id" => $pais_id
            ],[
                "id" => 32, 
                "nombre" => "los lagos", 
                "iso" => "CL-LL", 
                "pais_id" => $pais_id
            ],[
                "id" => 33, 
                "nombre" => "los ríos", 
                "iso" => "CL-LR", 
                "pais_id" => $pais_id
            ],[
                "id" => 34, 
                "nombre" => "magallanes y de la antártica chilena", 
                "iso" => "CL-MA", 
                "pais_id" => $pais_id
            ],[
                "id" => 35, 
                "nombre" => "maule", 
                "iso" => "CL-ML", 
                "pais_id" => $pais_id
            ],[
                "id" => 36, 
                "nombre" => "región metropolitana de santiago", 
                "iso" => "CL-RM", 
                "pais_id" => $pais_id
            ],[
                "id" => 37, 
                "nombre" => "tarapacá", 
                "iso" => "CL-TA", 
                "pais_id" => $pais_id
            ],[
                "id" => 38, 
                "nombre" => "valparaíso", 
                "iso" => "CL-VS", 
                "pais_id" => $pais_id
            ]
        ]);
    }
}
