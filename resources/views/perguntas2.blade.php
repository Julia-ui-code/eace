@extends('layouts.app')

@section('content')
<div class="container">
            <form  action="{{ route ('resultado2') }}" method="POST">
            @csrf
            <input type="hidden" id="{{ $usuario_id }}" name="usuario_id" value="{{ $usuario_id }}">
                <div class="form-group">
                @foreach($dados as $item => $aux) 
                    <p class="escrito">{{ $aux['enunciado'] }}</p>
                </div>
                <div class="form-group">
                    @foreach($aux['alternativa'] as $value)
                    <div class="form-check row">
                            <input type="radio" class="form-control form-check-input ml-3" style="height:15px; width:15px; vertical-align: middle;" id="{{ $value['id'] }}" name="{{ $value['enunciado_id'] }}" value="{{ $value['id'] }}" required>
                            <label for="{{ $value['id'] }}" class="alternativa form-check-label ml-5 mt-0">{{ $value['alternativa'] }}</label>
                    </div>
                    @endforeach
                @endforeach
                </div>
                <div class="progress progress-bar bg-info" role="progressbar" style="width: 54%" aria-valuenow="54" aria-valuemin="0" aria-valuemax="100">54%</div>
                <button type="submit" class="btn btn-primary botao_inicio">Próximo</button>
            </form>
</div>
@endsection
