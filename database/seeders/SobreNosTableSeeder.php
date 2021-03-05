<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SobreNos;
class SobreNosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SobreNos::create([
            "texto" => "Somos estudantes do CEFET-MG Varginha e estamos no último ano do ensino médio, estagiando para o curso técnico de Informática. Nossos nomes são: Julia Abreu e Maria Vitória Caetano. 
            <br>Nosso objetivo com a criação do site é auxiliar você, que pretende cursar o ensino médio integrado na Instituição Federal CEFET-MG.
           <br>Como já estivemos desse lado entendemos as dúvidas frequentes que os estudantes tem sobre o curso que mais irá se identificar, e por isso estamos aqui pra te ajudar nessa escolha. 
           Com perguntas rápidas e objetivas, a plataforma tem como finalidade te direcionar ao curso técnico ideal, de acordo com suas respostas."
         ]);
    }
}
