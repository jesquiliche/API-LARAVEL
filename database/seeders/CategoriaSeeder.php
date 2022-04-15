<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
            [
                "nombre"=>"Neveras",
                "descripcion"=>"Grandes electrodomesticos"
            ],
            [
                "nombre"=>"Pequeños electrodomesticos",
                "descripcion"=>"Pequeños electrodomesticos"
            ],
            [
                "nombre"=>"Televisores",
                "descripcion"=>"Pequeños electrodomesticos"
            ],
            [
                "nombre"=>"Moviles",
                "descripcion"=>"Pequeños electrodomesticos"
            ],
            [
                "nombre"=>"Ordenadores",
                "descripcion"=>"Pequeños electrodomesticos"
            ],
            [
                "nombre"=>"Cocinas",
                "descripcion"=>"Pequeños electrodomesticos"
            ],
            [
                "nombre"=>"Lavadoras",
                "descripcion"=>"Pequeños electrodomesticos"
            ],
            [
                "nombre"=>"Secadoras",
                "descripcion"=>"Pequeños electrodomesticos"
            ]

            ];
            DB::table('categorias')->insert($data);
    }
}

