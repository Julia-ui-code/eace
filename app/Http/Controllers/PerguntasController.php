<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Enunciado;
use App\Models\Alternativa;
use App\Models\Resposta;
use App\Models\Classifica;
use App\Models\TextosResultado;

class PerguntasController extends Controller
{    
    private $enunciado;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Enunciado $enunciado)
    {
        $this->enunciados = $enunciado;
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // CARREGANDO AS PERGUNTAS E SUAS ALTERNATIVAS

    public function index1($id)
    {   
        $dados = [
            $this->enunciados->with(['alternativa'])->get()->find(1),
            $this->enunciados->with(['alternativa'])->get()->find(2),
            $this->enunciados->with(['alternativa'])->get()->find(3),
            $this->enunciados->with(['alternativa'])->get()->find(4)
        ];
        $usuario_id = $id;
        return  view('perguntas1',compact('dados', 'usuario_id'));
    }

    public function index2($id)
    {
        $dados = [
            $this->enunciados->with(['alternativa'])->get()->find(5),
            $this->enunciados->with(['alternativa'])->get()->find(6),
            $this->enunciados->with(['alternativa'])->get()->find(7)
        ];
        $usuario_id = $id;
        return  view('perguntas2',compact('dados', 'usuario_id'));
    }

    public function index3($id)
    {
        $dados = [
            $this->enunciados->with(['alternativa'])->get()->find(8),
            $this->enunciados->with(['alternativa'])->get()->find(9),
            $this->enunciados->with(['alternativa'])->get()->find(10)
        ];
        $usuario_id = $id;
        return  view('perguntas3',compact('dados', 'usuario_id'));
    }

    public function index4($id)
    {
        $dados = [
            $this->enunciados->with(['alternativa'])->get()->find(11),
            $this->enunciados->with(['alternativa'])->get()->find(12),
            $this->enunciados->with(['alternativa'])->get()->find(13)
        ];
        $usuario_id = $id;
        return  view('perguntas4',compact('dados', 'usuario_id'));
    }

    //RECUPERAÇÃO DAS ALTERNATIVAS SELECIONADAS

    public function resultado1(Request $request)
    {   
        $usuario_id = $request->get("usuario_id");

        $dados = new Resposta();
        $dados->user_id = $usuario_id;
        $dados->alternativa_id = $request->get("1");
        $dados ->save();
        $dados = new Resposta();
        $dados->user_id = $usuario_id;
        $dados->alternativa_id = $request->get("2");
        $dados ->save();
        $dados = new Resposta();
        $dados->user_id = $usuario_id;
        $dados->alternativa_id = $request->get("3");
        $dados ->save();
        $dados = new Resposta();
        $dados->user_id = $usuario_id;
        $dados->alternativa_id = $request->get("4");
        $dados ->save();

        return redirect()->route('perguntas2', ['id' => $usuario_id]);
    }

    public function resultado2(Request $request)
    {   
        $usuario_id = $request->get("usuario_id");

        $dados = new Resposta();
        $dados->user_id = $usuario_id;
        $dados->alternativa_id = $request->get("5");
        $dados ->save();
        $dados = new Resposta();
        $dados->user_id = $usuario_id;
        $dados->alternativa_id = $request->get("6");
        $dados ->save();
        $dados = new Resposta();
        $dados->user_id = $usuario_id;
        $dados->alternativa_id = $request->get("7");
        $dados ->save();

        return redirect()->route('perguntas3', ['id' => $usuario_id]);
    }

    public function resultado3(Request $request)
    {   
        $usuario_id = $request->get("usuario_id");

        $dados = new Resposta();
        $dados->user_id = $usuario_id;
        $dados->alternativa_id = $request->get("8");
        $dados ->save();
        $dados = new Resposta();
        $dados->user_id = $usuario_id;
        $dados->alternativa_id = $request->get("9");
        $dados ->save();
        $dados = new Resposta();
        $dados->user_id = $usuario_id;
        $dados->alternativa_id = $request->get("10");
        $dados ->save();
        return redirect()->route('perguntas4', ['id' => $usuario_id]);
    }

    public function resultado4(Request $request)
    {   
        $usuario_id = $request->get("usuario_id");

        $dados = new Resposta();
        $dados->user_id = $usuario_id;
        $dados->alternativa_id = $request->get("11");
        $dados ->save();
        $dados = new Resposta();
        $dados->user_id = $usuario_id;
        $dados->alternativa_id = $request->get("12");
        $dados ->save();
        $dados = new Resposta();
        $dados->user_id = $usuario_id;
        $dados->alternativa_id = $request->get("13");
        $dados ->save();

        return redirect()->route('resultado', ['id' => $usuario_id]);
    }
    public function resultado($id){
        //faz o select com um inner join para pegar os valores de porcentagem de cada resposta
        $usuario_id = $id;
        $dados_tabela = DB::table('respostas')
                    ->join('classificas', 'classificas.alternativa_id', '=', 'respostas.alternativa_id')
                    ->select('classificas.alternativa_id', 'classificas.porcentagem', 'classificas.curso_id', 'respostas.user_id')
                    ->where('user_id', '=', $usuario_id)
                    ->get();
        //pega somente as porcentagens de um curso especifico
        $porcentagem_edif = 0;
        $porcentagem_info = 0;
        $porcentagem_meca = 0;

        foreach($dados_tabela as $item){
                if($item->curso_id == 1){
                    $porcentagem_edif += $item->porcentagem;
                }
                if($item->curso_id == 2){
                    $porcentagem_info += $item->porcentagem;
                }
                if($item->curso_id == 3){
                    $porcentagem_meca += $item->porcentagem;
                }
        }
        

        //fazendo as medias e fazendo * 100 para maior facilidade e ja arredondando as casas decimais 

        $media_edif = ($porcentagem_edif / 13) * 100;
        $media_info = ($porcentagem_info / 13) * 100;
        $media_meca = ($porcentagem_meca / 13) * 100;

        $media_edif = round(number_format($media_edif, 1));
        $media_info = round(number_format($media_info, 1));
        $media_meca = round(number_format($media_meca, 1));
        
        $resultado = [
            $media_edif,
            $media_info,
            $media_meca
        ];

        $res = [
            [
                "curso" => "Edificações",
                "porcentagem" => $media_edif
            ],
            [
                "curso" => "Informática",
                "porcentagem" => $media_info
            ],
            [
                "curso" => "Mecatrônica",
                "porcentagem" => $media_meca
            ]
        ];
        return  view('resultado',compact('resultado', 'res'));
    }
}
