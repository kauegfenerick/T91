@extends('layouts.base')

@section('conteudo')    

    <h1>
        @if($user)
        Atualizar Usuário
        @else
        Novo Usuário
        @endif
    </h1>
    @if ($user)
        <form action="{{ route('user.update', ['id'=>$user->id]) }}" method="post" enctype="multipart/form-data">        
    @else
        <form action="{{ route('user.store') }}" method="post" enctype="multipart/form-data">        
    @endif
        @csrf
        <div class="row">
            <div class="form-group col-md-6">
                <label class="form-label" for="name">Nome Completo*</label>
                <input class="form-control" type="text" name="name" value="{{$user ? $user->name : old('name') }}">
            </div> <div class="form-group col-md-6">
                <label class="form-label" for="email">Email*</label>
                <input class="form-control" type="text" name="email" value="{{$user ? $user->email : old('email') }}">
            </div>
            <div class="form-group col-md-6">
                <label class="form-group" for="dt_nascimento" value="{{$user ? $user->dt_nascimento : old('dt_nascimento')->format('Y-d-m')}}">Data de Nascimento* </label>
                <input class="form-control mt-2" type="date" name="dt_nascimento">
            </div>
            <div class="form-group col-md-6">
                <label class="form-group" for="foto" value="{{$user ? $user->foto : old('foto') }}">Foto*</label>
                <input class="form-control" name="foto" id="foto">
            </div>
            <div class="form-group col-md-2">
                <br>
                <input type="submit" value=" {{ $user? 'Atualizar' : 'Cadastrar'}}" class="btn btn-dark mt-2">
            </div>
        </div>
        </form>
    @endsection