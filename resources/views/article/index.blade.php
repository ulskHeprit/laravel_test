@extends('layouts.app')

@section('content')
    @if (Session::has('flash'))
        <h2>{{ Session::get('flash') }}</h2>
    @endif
    <h2><a href="{{ route('articles.create') }}">create new article</a></h2>
    <h1>Список статей, PAGE {{ $_GET['page'] ?? 1 }}</h1>
    @foreach($articles as $article)
        <h2><a href="/articles/{{ $article->id }}">{{ $article->name }}</a></h2>
        <p>Updated: {{ $article->updated_at }}</p>
        {{-- Str::limit – функция-хелпер, которая обрезает текст до указанной длины --}}
        {{-- Используется для очень длинных текстов, которые нужно сократить --}}
        <div>{{ Str::limit($article->body, 200) }}</div>
        <a href="{{ route('articles.edit', $article->id) }}">edit</a>
    <hr>
    @endforeach
    <?php $page = $_GET['page'] ?? 1 ?>
        @if ($page > 1)
            <form action="\articles" method="get" style="display: inline">
                <input type="hidden" name="page" value="{{ $page - 1 }}">
                <input type="submit" value="Prev...{{ $page - 1 }}">
            </form>
        @endif
        <form action="\articles" method="get" style="display: inline">
            <input type="hidden" name="page" value="{{ $page + 1 }}">
            <input type="submit" value="Next...{{ $page + 1 }}">
        </form>
@endsection
