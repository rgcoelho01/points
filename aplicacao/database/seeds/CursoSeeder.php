<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('cursos')->insert([
            'nome' => 'Computação'
        ]);
        DB::table('cursos')->insert([
            'nome' => 'Sistemas de Informação'
        ]);
        DB::table('cursos')->insert([
            'nome' => 'Ciência da Computação'
        ]);
    }
}
