<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AspectoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('aspectos')->insert([
            'codigo' => 'AG.1',
            'criterio' => 'Objetivos del sitio web concretos y bien definidos.',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('aspectos')->insert([
            'codigo' => 'AG.2',
            'criterio' => 'Contenidos y servicios ofrecidos precisos y completos.',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('aspectos')->insert([
            'codigo' => 'AG.3',
            'criterio' => 'Estructura general del sitio web orientada al usuario.',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('aspectos')->insert([
            'codigo' => 'AG.4',
            'criterio' => 'Look & Feel general se corresponde con los objetivos, características, contenidos y servicios del sitio web.',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('aspectos')->insert([
            'codigo' => 'AG.5',
            'criterio' => 'Diseño general del sitio web reconocible.',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('aspectos')->insert([
            'codigo' => 'AG.6',
            'criterio' => 'Diseño general del sitio web coherente.',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('aspectos')->insert([
            'codigo' => 'AG.7',
            'criterio' => 'Se utiliza el idioma del usuario.',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('aspectos')->insert([
            'codigo' => 'AG.8',
            'criterio' => 'Se da soporte a otro/s idioma/s.',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('aspectos')->insert([
            'codigo' => 'AG.9',
            'criterio' => 'Traducción del sitio completa y correcta.',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('aspectos')->insert([
            'codigo' => 'AG.10',
            'criterio' => 'Sitio web actualizado periódicamente.',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
