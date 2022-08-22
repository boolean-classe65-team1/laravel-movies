@extends('layouts.admin')
@section('page_title', '#' . $movie['id']. " - ". $movie['title'])

@section('script')
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css' integrity='sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==' crossorigin='anonymous'/>
<script>
    function showModal(id){
        const modal = document.getElementById('modal'+id);
        if(modal.style.display === 'none'){
            modal.style.display = 'block';
        }else{
            modal.style.display = 'none';
        }
        console.log(id);
    };
</script>
@endsection

@php
$movieJson = file_get_contents('https://api.themoviedb.org/3/search/movie?api_key=6fc530c8a4a5679024aea82b062cbd34&language=it&query=' . str_replace(' ', '+', $movie['original_title']));
$movieObj = json_decode($movieJson, true);
$movieImg = 'https://image.tmdb.org/t/p/w400/' . $movieObj['results'][0]['poster_path'];
$movieOverview = $movieObj['results'][0]['overview'];
$moviePop = $movieObj['results'][0]['popularity'];
@endphp

@section('main_content')
    <div class="container py-3">
        <a href="{{ route('admin.movies.index') }}" class="btn btn-success">Home</a>
        <h1 class="pt-5">{{ $movie['title'] }}</h1>
        <h2>({{ $movie['original_title'] }})</h2>
        <div class="py-3 d-flex gap-3">
            <div class="image">
                <img src="{{ $movieImg }}" alt="{{$movie['title']}}" style="width: 200px; height:auto;">
            </div>
            <div>
                <p class="fs-4">{{ $movieOverview }}</p>
                <div class="d-flex gap-5">
                    <p><i class="fa fa-solid fa-globe text-success"></i> {{ $movie['nationality'] }}</p>
                    <p><i class="fa-solid fa-calendar-check text-primary"></i> {{ $movie['date'] }}</p>
                    <p><i class="fa-solid fa-star text-warning"></i> {{ $movie['vote'] }}</p>
                </div>
            </div>
        </div>
        <div class="d-flex gap-4">
            <button class="btn btn-danger" onclick="showModal({{$movie['id']}})">Elimina</button>
            <a href="{{route('admin.movies.edit', $movie['id'])}}" class="btn btn-secondary">Modifica</a>
        </div>
        <div class="position-absolute w-100 hv-100 bg-danger" id="modal{{$movie['id']}}" style="display: none; top:0; bottom:0; right:0; left:0; z-index:10;">
            <div class="w-50 m-auto p-3 bg-light rounded mt-5">
                <h3>Sei sicuro di voler eliminare "{{$movie['title']}}" dal database?</h3>
                <h4>Non potrai recuperarlo in alcun modo!</h4>
                <div class="d-flex gap-4 align-items-center">
                    <form action="{{ route('admin.movies.destroy', $movie['id']) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Sì, elimina" class="btn btn-danger mt-3">
                    </form>
                    <button class="btn btn-success my-3" onclick="showModal({{$movie['id']}})">No, annulla</button>
                </div>
            </div>
        </div>
    </div>
@endsection
