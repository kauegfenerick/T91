@extends('layouts.base')

@section('conteudo')
    <div class="col-md-6">
        <h1>Nome: {{ $user->name}} </h1>
        <h4>Data de nascimento</h4>
        <input class="form-control" type="text" value="{{ $user->dt_nascimento->format('d/m/Y') }}" disabled></input>
        <h4>E-mail</h4>
        <input class="form-control" type="text" value="{{ $user->email }}" disabled></input>   
        <h4>Foto</h4>
        <img class="img-thumbnail" src="{{ $user->foto }}" width="450"> 
    </div>
@endsection