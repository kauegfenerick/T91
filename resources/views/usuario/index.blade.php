@extends('layouts.base')

@section('conteudo')
    <h1><i class="bi bi-people-fill"></i>Usuários</h1>
    <a href="{{ route('usuario.create') }}" class="btn btn-dark">
        Novo
    </a>
    <table class="table table-striped table-border table-hover">
        {{-- Cabeçalho --}}
        <thead> 
            <tr>
                <th>Ações</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Data De Nascimento</th>
                <th>Foto</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $usuario)
                
                <tr>
                    <td> 
                        <a href="{{ route('usuario.show', ['id'=>$usuario->id_usuario]) }}" class="btn btn-secondary">
                            <i class="bi bi-eye-fill"></i>
                        </a>
                        <a href="{{ route('usuario.edit', ['id'=>$usuario->id_usuario]) }}" class="btn btn-dark">
                            <i class="bi bi-pencil-square"></i>
                        </a>
                        <a href="{{ route('usuario.destroy', ['id'=>$usuario->id_usuario]) }}" class="btn btn-danger">
                            <i class="bi bi-file-x-fill"></i>
                        </a>
                    </td>
                    <td>{{ $usuario->nome}}</td>
                    <td>{{ $usuario->email}}</td>
                    <td>{{ $usuario->dt_nascimento}}</td>
                    <td><img src="{{$usuario->foto}}"></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection