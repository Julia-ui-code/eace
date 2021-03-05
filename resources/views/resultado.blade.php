@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
        <div class="col-12">
            <h1 class="escrito">Resultado</h1>
        </div>
        </div>
        <div class="row">
        <div class="col-lg-6 col-xm-12">
            <p class="escrito_inicio_um">Veja qual curso se encaixa com as suas respostas!</p>
            <?php
                $maior = max($resultado);
                $menor = min($resultado);
            ?>
            @if($maior == $resultado[0] && $menor == $resultado[2])
                <p class="escrito_resultado"> {{$resultado[0]}}% Edificações, {{$resultado[1]}}% Informática e {{$resultado[2]}}% Mecatrônica!</p>
            @endif
            @if($maior == $resultado[0] && $menor == $resultado[1])
                <p class="escrito_resultado"> {{$resultado[0]}}% Edificações, {{$resultado[2]}}% Mecatrônica e {{$resultado[1]}}% Informática!</p>
            @endif
            @if($maior == $resultado[1] && $menor == $resultado[0])
                <p class="escrito_resultado"> {{$resultado[1]}}% Informática, {{$resultado[2]}}% Mecatrônica e {{$resultado[0]}}% Edificações!</p>
            @endif
            @if($maior == $resultado[1] && $menor == $resultado[2])
                <p class="escrito_resultado"> {{$resultado[1]}}% Informática, {{$resultado[0]}}% Edificações e {{$resultado[2]}}% Mecatrônica!</p>
            @endif
            @if($maior == $resultado[2] && $menor == $resultado[0])
                <p class="escrito_resultado"> {{$resultado[2]}}% Mecatrônica, {{$resultado[1]}}% Informática e {{$resultado[0]}}% Edificações!</p>
            @endif
            @if($maior == $resultado[2] && $menor == $resultado[1])
                <p class="escrito_resultado"> {{$resultado[2]}}% Mecatrônica, {{$resultado[0]}}% Edificações e {{$resultado[1]}}% Informática!</p>
            @endif
            
            @if($maior == $resultado[0])
                <p class="escrito_quemsomos">Artístico e inovador, você ama realizar e produzir projetos, em especial que tenham envolvimento com a arte. Suas habilidades artísticas são impressionantes e você têm uma especial predisposição aos conteúdos sensíveis. Sua capacidade criativa te ajuda muito na comunicação, te fazendo observar as coisas com um olhar diferente, você analisa tudo ao seu redor tentando captar os mínimos detalhes.</p>
            @endif
            @if($maior == $resultado[1])
                <p class="escrito_quemsomos">Comunicativo e empreendedor, você é uma pessoa extremamente criativa e está sempre buscando inovar. Sua habilidade em promover novos projetos e surpreender as pessoas com ideias inovadoras fará com que surjam novas oportunidades nos negócios. Você está sempre se arriscando para colocar em prática seus sonhos, planos e ideias.</p>
            @endif
            @if($maior == $resultado[2])
                <p class="escrito_quemsomos">Realista e convencional, você encara a realidade cara à cara, evita que abstrações ou fantasias intervenham em sua conduta, age de caordo com o senso comum tentando ser realista ao enfrentar seus problemas. Por estar sempre se prevenindo em qualquer situação tem total controle e pode liderar facilmente.</p>
            @endif
        </div>
        <div class="col-lg-6 col-xm-12">
            <div class="wrapper">
                <div id="grafico" style="width:100%;"></div>
            </div>
        </div>
        </div>
</div>
@endsection
@section('javascript')

<script type="text/javascript">
$(function () {
    $('#grafico').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false
       },
        title: {
            text: 'Representação gráfica da porcentagem por curso'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                }
            }
        },
        series: [{
            type: 'pie',
            name: 'Porcentagem',
            data: [
            <?php 
                $total = count($res);
                $n = 1;
                foreach($res as $item){
                    if($n < $total){
                        echo '["'. $item["curso"] . '", ' . $item["porcentagem"] . '],';
                    }else{
                        echo '["'. $item["curso"] . '", ' . $item["porcentagem"] . ']';
                    }
                    $n++;
                }
            ?>                     
      ]
        }]
    });
    
    function redrawchart(){
        var chart = $('#grafico').highcharts();
        
        console.log('redraw');
        var w = $('#grafico').closest(".wrapper").width()
        // setsize will trigger the graph redraw 
        chart.setSize(       
            w,w * (3/4),false
        );
     }
    
    $(window).resize(redrawchart);
    redrawchart();
    
});
</script>
@endsection