@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalhes do Faccionado</h1>

    <div class="card">
        <div class="card-header">
            {{ $faccionado->nome_faccionado }}
        </div>
        <div class="card-body">
            <p><strong>Gênero:</strong> {{ $faccionado->genero }}</p>
            <p><strong>Data de Nascimento:</strong> {{ $faccionado->data_nascimento }}</p>
            <p><strong>CPF:</strong> {{ $faccionado->cpf }}</p>
            <p><strong>Nacionalidade:</strong> {{ $faccionado->nacionalidade }}</p>
            <p><strong>Estado de Naturalidade:</strong> {{ $faccionado->estado_naturalidade }}</p>
            <p><strong>Cidade de Naturalidade:</strong> {{ $faccionado->cidade_naturalidade }}</p>
            <p><strong>Nome da Mãe:</strong> {{ $faccionado->nome_mae }}</p>
            <p><strong>Nome do Pai:</strong> {{ $faccionado->nome_pai }}</p>
            <p><strong>Nome do(a) Cônjuge:</strong> {{ $faccionado->nome_conjuge }}</p>
            <p><strong>Organização do Faccionado:</strong> {{ $faccionado->organizacao_faccionado }}</p>
            <a href="{{ route('faccionados.edit', $faccionado->id) }}" class="btn btn-warning">Editar</a>
            <form action="{{ route('faccionados.destroy', $faccionado->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Excluir</button>
            </form>
        </div>
    </div>
</div>
@endsection