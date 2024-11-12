<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class clientetableseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clientes')->insert([
            [
                'nombre'=>'Chamoy',
                'apellido'=>'Rodriguez',
                'correo'=>'xitsangel11@gmail.com',
                'telefono'=>'12345678',
            ],
            [
                'nombre'=>'Chamoy josu',
                'apellido'=>'Rodriguez',
                'correo'=>'xitsangel11@gmail.com',
                'telefono'=>'12345678',
            ],
            [
                'nombre'=>'Chamoy no se',
                'apellido'=>'Rodriguez',
                'correo'=>'xitsangel11@gmail.com',
                'telefono'=>'12345678',
            ]
        ]);
    }
}
