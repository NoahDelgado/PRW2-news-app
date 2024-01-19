@extends('layout')

@section('content')
    <!--show the top 5 articles-->
    <h1>Voici les articles</h1>
    <ul>
        @foreach ($articles as $article)
            <li>
                <a href="{{ route('articles.show', $article) }}">{{ $article->title }}</a>
                <p>Nombre de vues : {{ $article->views }}</p>
            </li>
        @endforeach
    </ul>
@endsection
