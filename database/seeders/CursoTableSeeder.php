<?php

namespace Database\Seeders;
use App\Models\Curso;
use Illuminate\Database\Seeder;

class CursoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Curso::create([
            "nome_curso" => "Edificações"
         ]);
         Curso::create([
             "nome_curso" => "Informática"
          ]);
          Curso::create([
             "nome_curso" => "Mecatrônica"
          ]);
    }
}
