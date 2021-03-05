<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Enunciado;
class EnunciadoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Enunciado::create([
            "enunciado" => "1) Em sua percepção, qual das habilidades abaixo mais se sobressai em você?",
            "perguntas_id" => 1
        ]);
        Enunciado::create([
            "enunciado" => "2) Em sua percepção, qual das alternativas abaixo mais caracteriza seu comportamento?",
            "perguntas_id" => 1
        ]);
        Enunciado::create([
            "enunciado" => "3) Em um ambiente onde você não conhece ninguém, você costuma:",
            "perguntas_id" => 1
        ]);
        Enunciado::create([
            "enunciado" => "4) Se você tivesse que escolher uma atividade para exercer por 6 meses seria:",
            "perguntas_id" => 1
        ]);
        Enunciado::create([
            "enunciado" => "5) Para você, qual das alternativas representa uma maior influência na escolha do curso?",
            "perguntas_id" => 2
        ]);
        Enunciado::create([
            "enunciado" => "6) Qual a influência que os seus amigos/conhecidos exercem na escolha de um curso?",
            "perguntas_id" => 2
        ]);
        Enunciado::create([
            "enunciado" => "7) Qual é a influência que um futuro distanciamento do seu meio social exercem na escolha de cursar o CEFET-MG?",
            "perguntas_id" => 2
        ]);
        Enunciado::create([
            "enunciado" => "8) Seus familiares exercem alguma influência na sua escolha técnica?",
            "perguntas_id" => 3
        ]);
        Enunciado::create([
            "enunciado" => "9) O distanciamento do seu âmbito residencial por períodos prolongados tem influência na escolha de cursar o CEFET-MG?",
            "perguntas_id" => 3
        ]);
        Enunciado::create([
            "enunciado" => "10) O convívio com novas pessoas tem influência na escolha de cursar o CEFET-MG?",
            "perguntas_id" => 3
        ]);
        Enunciado::create([
            "enunciado" => "11) Qual das ciências você mais se identifica?",
            "perguntas_id" => 4
        ]);
        Enunciado::create([
            "enunciado" => "12) Qual das habilidades artísticas você mais se identifica?",
            "perguntas_id" => 4
        ]);
        Enunciado::create([
            "enunciado" => "13) Pretende seguir na área?",
            "perguntas_id" => 4
        ]);
    }
}
