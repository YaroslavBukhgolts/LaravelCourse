@extends('layouts.main')
@section('content')
<div>
    <h1>Страница приветствия</h1>
    <a href="{{ route('categories.showCategories') }}">Категории новостей</a><br>
    <a href="{{ route('news.showNews') }}">Список новостей</a><br>
    <a href="{{ route('showAutarisation') }}">Страница авторизации</a>
</div>
@endsection
