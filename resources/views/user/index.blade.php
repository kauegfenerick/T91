@extends('layouts.base')

@section('conteudo')
    <h1><i class="bi bi-people-fill"></i>Usuários</h1>
    <a href="{{ route('user.create') }}" class="btn btn-dark">
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
            @foreach ($users as $user)
                
                <tr>
                    <td> 
                        <a href="{{ route('user.show', ['id'=>$user->id]) }}" class="btn btn-secondary">
                            <i class="bi bi-eye-fill"></i>
                        </a>
                        <a href="{{ route('user.edit', ['id'=>$user->id]) }}" class="btn btn-dark">
                            <i class="bi bi-pencil-square"></i>
                        </a>
                        <a href="{{ route('user.destroy', ['id'=>$user->id]) }}" class="btn btn-danger">
                            <i class="bi bi-file-x-fill"></i>
                        </a>
                    </td>
                    <td>{{ $user->name}}</td>
                    <td>{{ $user->email}}</td>
                    <td>{{ $user->dt_nascimento}}</td>
                    <td><img class="img-thumbnail" src="{{$user->foto}}" width="230"></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection