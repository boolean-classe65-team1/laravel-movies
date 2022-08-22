@extends('layouts.base')

@section('page_title')

@section('main_content')
    <div class="container">
        <form action="{{ route('tv_series.store') }}" method="POST">
            @csrf
            <h2 class="mb-5">Aggiungi una serie</h2>
            <div class="mb-3">
                <label for="titleInput" class="form-label">Titolo</label>
                <input type="text" name="title" id="titleInput"
                    class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" value="{{ old('title') }}">
                <div class="invalid-feedback">
                    {{ $errors->first('title') }}
                </div>
            </div>
            <div class="mb-3">
                <label for="originalTitleInput" class="form-label">Titolo originale</label>
                <input type="text" name="original_title" id="originalTitleInput"
                    class="form-control {{ $errors->has('original_title') ? 'is-invalid' : '' }}"
                    value="{{ old('original_title') }}">
                <div class="invalid-feedback">
                    {{ $errors->first('original_title') }}
                </div>
            </div>
            <div class="mb-3">
                <label for="nationalityInput" class="form-label">Nazionalità</label>
                <input type="text" name="nationality" id="nationalityInput"
                    class="form-control {{ $errors->has('nationality') ? 'is-invalid' : '' }}"
                    value="{{ old('nationality') }}">
                <div class="invalid-feedback">
                    {{ $errors->first('nationality') }}
                </div>
            </div>
            <div class="mb-3">
                <label for="dateInput" class="form-label">Data di uscita</label>
                <input type="date" name="date" id="dateInput"
                    class="form-control {{ $errors->has('date') ? 'is-invalid' : '' }}" value="{{ old('date') }}">
                <div class="invalid-feedback">
                    {{ $errors->first('date') }}
                </div>
            </div>
            <div class="mb-3">
                <label for="voteInput" class="form-label">Voto</label>
                <input type="number" min="0" max="10" step="0.1" name="vote" id="voteInput"
                    class="form-control {{ $errors->has('vote') ? 'is-invalid' : '' }}" value="{{ old('vote') }}">
                <div class="invalid-feedback">
                    {{ $errors->first('vote') }}
                </div>
            </div>
            <input type="submit" value="Aggiungi" class="btn btn-primary">
            <a class="btn btn-secondary" href="{{ route('tv_series.index') }}" role="button">Annulla</a>
        </form>
    </div>
@endsection
