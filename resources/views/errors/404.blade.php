@extends('layouts.layout', ['title' => "Аяй-яй"])

@section('content')
    <div class="card">
        <h2 class="card-header">А тут ничего нет</h2>
        <img class="img_error" src="{{ asset('img/where-the-page.jpg') }}">
    </div>

    <a href="/" class="btn btn-outline-primary">Перейти на главную</a>
@endsection
