@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Adicionar Faccionado</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('faccionados.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nome_faccionado">Nome do Faccionado</label>
                <input type="text" name="nome_faccionado" class="form-control" value="{{ old('nome_faccionado') }}">
            </div>
            <div class="form-group">
                <label for="genero">Gênero</label>
                <select name="genero" class="form-control">
                    <option value="Masculino">Masculino</option>
                    <option value="Feminino">Feminino</option>
                    <option value="Outro">Outro</option>
                </select>
            </div>
            <div class="form-group">
                <label for="data_nascimento">Data de Nascimento</label>
                <input type="date" name="data_nascimento" class="form-control" value="{{ old('data_nascimento') }}">
            </div>
            <div class="form-group">
                <label for="cpf">CPF</label>
                <input type="number" name="cpf" class="form-control" value="{{ old('cpf') }}">
            </div>
            <div class="form-group">
                <label for="nacionalidade">Nacionalidade</label>
                <input type="text" name="nacionalidade" class="form-control" value="{{ old('nacionalidade') }}">
            </div>
            <div class="form-group">
                <label for="estado_naturalidade">Estado de Naturalidade</label>
                <input type="text" name="estado_naturalidade" class="form-control" value="{{ old('estado_naturalidade') }}">
            </div>
            <div class="form-group">
                <label for="cidade_naturalidade">Cidade de Naturalidade</label>
                <input type="text" name="cidade_naturalidade" class="form-control" value="{{ old('cidade_naturalidade') }}">
            </div>
            <div class="form-group">
                <label for="nome_mae">Nome da Mãe</label>
                <input type="text" name="nome_mae" class="form-control" value="{{ old('nome_mae') }}">
            </div>
            <div class="form-group">
                <label for="nome_pai">Nome do Pai</label>
                <input type="text" name="nome_pai" class="form-control" value="{{ old('nome_pai') }}">
            </div>
            <div class="form-group">
                <label for="nome_conjuge">Nome do(a) Cônjuge</label>
                <input type="text" name="nome_conjuge" class="form-control" value="{{ old('nome_conjuge') }}">
            </div>
            <div class="form-group">
                <label for="organizacao_faccionado">Organização do Faccionado</label>
                <input type="text" name="organizacao_faccionado" class="form-control" value="{{ old('organizacao_faccionado') }}">
            </div>
            <button type="submit" class="btn btn-primary">Adicionar</button>
        </form>
    </div>
@endsection
