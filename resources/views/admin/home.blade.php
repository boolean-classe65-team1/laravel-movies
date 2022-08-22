@extends('layouts.admin')


@section('page_title', 'Home')
@section('main_content')
<div class="container text-center">
    <div class="d-flex flex-column vh-100">
        <h1 class="py-3">Sei Loggato!</h1>
        <div class="d-flex gap-4 justify-content-center align-items-center flex-grow-1">
            <div><a class="btn btn-danger" href="{{ route('admin.movies.index') }}">Movies</a></div>
            <div><a class="btn btn-danger" href="{{ route('admin.tv_series.index') }}">Tv Series</a></div>
        </div>
    </div>
</div>
@endsection
