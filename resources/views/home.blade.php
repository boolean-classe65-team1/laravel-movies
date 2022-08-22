@extends('layouts.base')


@section('page_title', 'Home')
@section('main_content')
<header>
<div class="container">
    <ul class="list-unstyled d-flex gap-3 py-3 justify-content-center">
        <li><a class="btn" href="{{ route("home") }}">Home</a></li>
        <li><a class="btn" href="{{ route("register") }}">Registrati</a></li>
        <li><a class="btn" href="{{ route("login") }}">Login</a></li>
    </ul>
</div>
</header>
<div class="container text-center">
    <h1>Benvenuti nel nostro sito!</h1>
    <img src="{{ asset('img/team.png') }}" alt="">
</div>
@endsection
