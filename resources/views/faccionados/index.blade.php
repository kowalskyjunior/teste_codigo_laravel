@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Lista de Faccionados</h1>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <a href="{{ route('faccionados.create') }}" class="btn btn-primary">Adicionar Faccionado</a>
        <table class="table mt-4">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Organização</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($faccionados as $faccionado)
                    <tr>
                        <td>{{ $faccionado->nome_faccionado }}</td>
                        <td>{{ $faccionado->cpf }}</td>
                        <td>{{ $faccionado->organizacao_faccionado }}</td>
                        <td>
                            <a href="{{ route('faccionados.show', $faccionado->id) }}" class="btn btn-info">Ver</a>
                            <a href="{{ route('faccionados.edit', $faccionado->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('faccionados.destroy', $faccionado->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
