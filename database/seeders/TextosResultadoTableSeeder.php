<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TextosResultado;
class TextosResultadoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TextosResultado::create([
            "texto_resultado" => "Artístico e inovador, você ama realizar e produzir projetos, em especial que tenham envolvimento com a arte. Suas habilidades artísticas são impressionantes e você têm uma especial predisposição aos conteúdos sensíveis. Sua capacidade criativa te ajuda muito na comunicação, te fazendo observar as coisas com um olhar diferente, você analisa tudo ao seu redor tentando captar os mínimos detalhes.",
            'curso_id' => 1
        ]);
        TextosResultado::create([
            "texto_resultado" => "Comunicativo e empreendedor, você é uma pessoa extremamente criativa e está sempre buscando inovar. Sua habilidade em promover novos projetos e surpreender as pessoas com ideias inovadoras fará com que surjam novas oportunidades nos negócios. Você está sempre se arriscando para colocar em prática seus sonhos, planos e ideias.",
            'curso_id' => 2
        ]);
        TextosResultado::create([
            "texto_resultado" => "Realista e convencional, você encara a realidade cara à cara, evita que abstrações ou fantasias intervenham em sua conduta, age de acordo com o senso comum tentando ser realista ao enfrentar seus problemas. Por estar sempre se prevenindo em qualquer situação tem total controle e pode liderar facilmente.",
            'curso_id' => 3
        ]);
    }
}
