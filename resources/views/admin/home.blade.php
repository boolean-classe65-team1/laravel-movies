@extends('layouts.base')


@section('page_title', 'Home')
@section('main_content')
<header>
<div class="container">
    <div class="d-flex justify-content-between">
        <span><strong>BackEnd</strong></span>
        <ul class="list-unstyled d-flex gap-3 py-3 justify-content-center">
            <li><a href="{{ route("admin.") }}">Home</a></li>
            <li><a href="{{ route("admin.movies.index") }}">Movies</a></li>
            <li><a href="{{ route("admin.tv_series.index") }}">Serie TV</a></li>
            <li><form id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-secodary">Logout</button>
            </form></li>
        </ul>
    </div>
</div>
</header>
<div class="container text-center">
    <h1>Sei Loggato!</h1>
</div>
@endsection
