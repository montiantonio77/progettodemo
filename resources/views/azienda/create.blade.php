@extends('layouts.app')

@section('content')
    <h1>Nuova Azienda</h1>

    <form action="{{ route('azienda.store') }}" method="POST">
        @csrf

        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required>

        <label for="indirizzo">Indirizzo:</label>
        <input type="text" name="indirizzo" id="indirizzo" required>

        <label for="cap">CAP:</label>
        <input type="text" name="cap" id="cap" required>

        <label for="provincia">Provincia:</label>
        <input type="text" name="provincia" id="provincia" required>

        <label for="regione">Regione:</label>
        <input type="text" name="regione" id="regione" required>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>

        <label for="telefono">Telefono:</label>
        <input type="text" name="telefono" id="telefono" required>

        <label for="nome_amministratore">Nome Amministratore:</label>
        <input type="text" name="nome_amministratore" id="nome_amministratore" required>

        <button type="submit">Crea Azienda</button>
    </form>

    <a href="{{ route('azienda.index') }}">Torna all'elenco</a>
@endsection
