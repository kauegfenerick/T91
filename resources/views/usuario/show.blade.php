@extends('layouts.base')

@section('conteudo')
    <div class="col-md-6">
        <h1>Tipo: {{ $lancamento->centroCusto->tipo->tipo}} </h1>
        <h4>Data de faturamento</h4>
        <input class="form-control" type="text" value="{{ $lancamento->dt_faturamento->format('d/m/Y') }}"></input>
        <h4>Valor</h4>
        <input class="form-control" type="text" value="{{ $lancamento->valor }}"></input>   
        <h4>Centro de custo</h4>
        <input class="form-control" type="text" value="{{ $lancamento->centroCusto->centro_custo}}"></input>
        <h4>Descrição</h4>
        <input class="form-control" type="text" value="{{ $lancamento->descricao}}"</input>
        <h4>Criado em</h4>
        <input class="form-control" type="text" value="{{ $lancamento->created_at->format('d/m/Y')}}" aria-label="readonly input example" readonly></input>
        <h4>Alterado em</h4>
        <input class="form-control" type="text" value="{{ $lancamento->updated_at->format('d/m/Y')}}"></input>
    </div>
@endsection