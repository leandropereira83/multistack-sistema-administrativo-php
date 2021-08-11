@extends('adminlte::page')

@section('title', 'Lista de Usuários')

@section('content_header')
    <h1>Lista de Usuários</h1>
@stop

@section('content')
    @if (session('mensagem'))
        <div class="alert alert-sucess">
            {{ session('mensagem') }}
        </div>
    @endif

    <table class="table">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nome</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($usuarios as $usuario)
            <tr>
                <th>{{ $usuario->id }}</th>
                <td>{{ $usuario->name }}</td>
                <td>
                    <a href="{{ route('usuarios.edit', $usuario) }}" class="btn btn-primary btn-sm">Atualizar</a>
                    <a href="{{ route('usuarios.destroy', $usuario) }}" class="btn btn-danger btn-sm">Excluir</a>
                </td>
            </tr>
        @empty
            <tr>
                <th></th>
                <th>Nenhum registro foi encontrado</th>
                <th></th>
            </tr>
        @endforelse
    </tbody>
    </table>

    <div class="d-flex justify-content-center">
        {{ $usuarios->links() }}
    </div>

    <div class="float-right">
        <a href="{{ route('usuarios.create') }}" class="btn btn-success btn-sm">Novo usuário</a>
    </div>
@stop