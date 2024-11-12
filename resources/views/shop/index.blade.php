@extends('base')
@section('titre', 'Accueil')
@section('contenu')
    <h1>Liste des articles</h1><br>
    <div class="row">

        @foreach ($articles as $article)
            <div class="col-sm-6 mb-3">
                <x-article-card :art="$article" />
            </div>
        @endforeach

        {{ $articles->links() }}
    @endsection()
