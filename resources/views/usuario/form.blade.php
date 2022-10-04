@extends('layouts.base')

@section('conteudo')
    
    <h1>
        @if($usuario)
        Atualizar Usuário
        @else
        Novo Usuário
        @endif
    </h1>
    @if ($usuario)
        <form action="{{ route('usuario.update', ['id'=>$usuario->id_usuario]) }}" method="post" enctype="multipart/form-data">        
    @else
        <form action="{{ route('usuario.store') }}" method="post" enctype="multipart/form-data">        
    @endif
        @csrf
        <div class="row">
            <div class="form-group col-md-6">
                <label class="form-label" for="nome">Nome Completo*</label>
                <input class="form-control" type="text" name="nome" value="{{$usuario ? $usuario->nome->format('Y-m-d') : old('nome') }}">
            </div> <div class="form-group col-md-6">
                <label class="form-label" for="email">Email*</label>
                <input class="form-control" type="text" name="email" value="{{$usuario ? $usuario->email : old('email') }}">
            </div>
            <div class="form-group col-md-6">
                <label class="form-group" for="dt_nascimento">Data de Nascimento*</label>
                <input class="form-control mt-2" type="date" name="dt_nascimento">
            </div>
            <div class="form-group col-md-6">
                <label class="form-group" for="foto">Foto*</label>
                <input class="form-control" name="foto" id="foto">
            </div>
            <div class="form-group col-md-2">
                <br>
                <input type="submit" value=" {{ $usuario? 'Atualizar' : 'Cadastrar'}}" class="btn btn-dark mt-2">
            </div>
        </div>
    </form>
@endsection