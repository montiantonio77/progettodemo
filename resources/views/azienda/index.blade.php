@extends('layouts.app')

@section('content')
    <h1>Elenco Aziende</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Indirizzo</th>
                <th>CAP</th>
                <th>Provincia</th>
                <th>Regione</th>
                <th>Email</th>
                <th>Telefono</th>
                <th>Nome Amministratore</th>
                <th>Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($aziende as $azienda)
                <tr>
                    <td>{{ $azienda->id }}</td>
                    <td>{{ $azienda->nome }}</td>
                    <td>{{ $azienda->indirizzo }}</td>
                    <td>{{ $azienda->cap }}</td>
                    <td>{{ $azienda->provincia }}</td>
                    <td>{{ $azienda->regione }}</td>
                    <td>{{ $azienda->email }}</td>
                    <td>{{ $azienda->telefono }}</td>
                    <td>{{ $azienda->nome_amministratore }}</td>
                    <td>
                        <a href="{{ route('azienda.show', $azienda->id) }}">Mostra</a>
                        <a href="{{ route('azienda.edit', $azienda->id) }}">Modifica</a>
                        <form action="{{ route('azienda.destroy', $azienda->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Elimina</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('azienda.create') }}">Aggiungi Azienda</a>
@endsection
