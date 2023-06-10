@extends('layouts.app')

@section('content')
    <h1>Dettagli Azienda</h1>

    <p><strong>ID:</strong> {{ $azienda->id }}</p>
    <p><strong>Nome:</strong> {{ $azienda->nome }}</p>
    <p><strong>Indirizzo:</strong> {{ $azienda->indirizzo }}</p>
   

    <a href="{{ route('azienda.index') }}">Torna all'elenco</a>
@endsection