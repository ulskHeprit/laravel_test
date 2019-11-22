@extends('layouts.app')

@section('title', 'Статья')

@section('header')
    {{ $article->name }}
@endsection

@section('content')
    <p>Date: {{ $article->updated_at }}</p>
    <p>{{ $article->body }}</p>
@endsection
