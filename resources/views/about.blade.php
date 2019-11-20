@extends('layouts.app')

@section('title', 'laravel-title')

@section('header')
    О блоге
@endsection

@section('content')
    <p>Эксперименты с Ларавелем</p>
    <p>{{ implode(',', $tags) }}</p>
@endsection
