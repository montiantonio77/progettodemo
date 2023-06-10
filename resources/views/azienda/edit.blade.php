@extends('layouts.app')

@section('content')
    <h1>Modifica Azienda</h1>

    <form action="{{ route('azienda.update', $azienda->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" value="{{ $azienda->nome }}" required>

        <label for="indirizzo">Indirizzo:</label>
        <input type="text" name="indirizzo" id="indirizzo" value="{{ $azienda->indirizzo }}" required>

        <label for="cap">CAP:</label>
        <input type="text" name="cap" id="cap" value="{{ $azienda->cap }}" required>

        <label for="provincia">Provincia:</label>
        <input type="text" name="provincia" id="provincia" value="{{ $azienda->provincia }}" required>

        <label for="regione">Regione:</label>
        <input type="text" name="regione" id="regione" value="{{ $azienda->regione }}" required>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="{{ $azienda->email }}" required>

        <label for="telefono">Telefono:</label>
        <input type="text" name="telefono" id="telefono" value="{{ $azienda->telefono }}" required>

        <label for="nome_amministratore">Nome Amministratore:</label>
        <input type="text" name="nome_amministratore" id="nome_amministratore" value="{{ $azienda->nome_amministratore }}" required>

        <button type="submit">Salva Modifiche</button>
    </form>

    <a href="{{ route('azienda.index') }}">Torna all'elenco</a>
@endsection
