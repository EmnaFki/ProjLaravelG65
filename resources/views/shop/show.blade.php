@extends('base')
@section('titre', $article->designation)
@section('contenu')
    <h2>{{ $article->designation }}</h2>
    <ul>
        <li>{{ $article->prix }} TND</li>
        <li>{{ $article->description }} </li>
        <li>Quantité disponible: {{ $article->qte_stock }} </li>
    </ul>
@endsection()
