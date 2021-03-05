@extends('layouts.app', ['current'=>'inicio'])

@section('content')
<div class="container">
                <?php 
                    $usuario_id = mt_rand(1, 100000);
                ?>
                <div class="row">
                    <h1 class="escrito col-12">Teste Vocacional</h1>
                </div>
                <div class="row">
                   <p class="escrito_inicio_um col-12">Faça o teste vocacional gratuito para descobrir qual área mais combina com você!</p>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-xs-12">
                    <a href="/perguntas1/{{$usuario_id}}" class="btn btn-primary botao_inicio" role="button">Iniciar</a>
                    </div>
                    <div class="col-lg-6">

                    </div>
                </div>
                <img src="img/cefet_inicio.jpg"  width="100%" class="img_inicio">
</div>
@endsection
