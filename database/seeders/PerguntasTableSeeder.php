<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Perguntas;
class PerguntasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Perguntas::create([
            "pergunta" => "Pessoal"
        ]);
        Perguntas::create([
            "pergunta" => "Social"
        ]);
        Perguntas::create([
            "pergunta" => "Família e amigos"
        ]);
        Perguntas::create([
            "pergunta" => "Técnico"
        ]);
    }
}
